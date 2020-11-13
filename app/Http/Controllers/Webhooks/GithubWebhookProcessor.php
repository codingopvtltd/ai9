<?php

namespace App\Http\Controllers\Webhooks;

use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

class GithubWebhookProcessor
{
    /** @var \Psr\Log\LoggerInterface */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Validate an incoming github webhook
     *
     * @param string $known_token Our known token that we've defined
     * @param \Illuminate\Http\Request $request
     *
     * @throws \BadRequestHttpException, \UnauthorizedException
     * @return void
     */
    protected function validateGithubWebhook($known_token, Request $request)
    {
        if (($signature = $request->headers->get('X-Hub-Signature')) == null) {
            throw new BadRequestHttpException('Header not set');
        }

        $signature_parts = explode('=', $signature);

        if (count($signature_parts) != 2) {
            throw new BadRequestHttpException('signature has invalid format');
        }

        $known_signature = hash_hmac('sha1', $request->getContent(), $known_token);

        if (! hash_equals($known_signature, $signature_parts[1])) {
            throw new UnauthorizedException('Could not verify request signature ' . $signature_parts[1]);
        }
    }


    /**
     * Entry point to our webhook handler
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function pull(Request $request)
    {
        $this->validateGithubWebhook(config('app.github_webhook_secret'), $request);
        shell_exec( 'git fetch --all' );
        shell_exec( 'git reset --hard origin/master' );
        shell_exec( 'git pull origin main' );
        return "Successfully Pulled to Server";
        //$this->logger->info('Hello World. The GitHub webhook is validated');
        //$this->logger->info($request->getContent());
    }
}