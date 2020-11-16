<!doctype html>
<html lang="en">
  <head>
    <title>Send Email in Laravel 8 Using Mailgun | Programming Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3>New Enquiry </h3>
                <p> Name:-  {{ $first_name ?? '0'}}   {{ $last_name ?? '0' }}</p>
                <p> Email :- {{ $email ?? '0' }} </p>
                <p> Company Name :- {{ $company ?? '0'}} </p>
                <p> City :- {{ $city ?? '0'}} </p>
                <p> Country :- {{ $country ?? '0'}}</p>
                <p> Phone Number :- {{$phone_number ?? '0'}} </p>
                <p> Project Details :- {{$project_details ?? '0'}} </p>
                <br/>
                <p> Thank you</p>
                <p> Name:-  {{ $first_name ?? '0'}}   {{ $last_name ?? '0' }}</p>
            </div>
        </div>
    </div>
  </body>
</html>
