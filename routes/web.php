<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'Landing\LandingController@home')->name('home');
Route::post('/contact-actions', 'Landing\LandingController@contactActions')->name('contact-actions');

// Route::get('/send-mail', 'Email\EmailController@sendEmail')->name('send-mail');

Route::get('/logout', function () {
	Auth::logout();
	return redirect('/');
})->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/console', 'Console\HomeController@home')->name('console');
    Route::post('/lead-view', 'Console\HomeController@leadView')->name('lead-view');


});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "Cache is clearedee";
});
Route::post('/git-webhook', function () {
    shell_exec( 'git fetch --all' );
    shell_exec( 'git reset --hard origin/master' );
    shell_exec( 'git pull origin master' );
    return "shell executed";
});
Auth::routes();







//Github Automatic Pull Controller
Route::namespace('Webhooks')->prefix('/webhooks')->group(function () {
    Route::post('/github/pull', 'GithubWebhookProcessor@pull');
});
//Github Automatic Pull Controller

