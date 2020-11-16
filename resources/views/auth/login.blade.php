<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet" />
    <title>AI 9</title>
</head>
<body>
    <section class="login">
        <div class="container">
            <div class="row m-0">
                <div class="login-reg">
                    <div class="login-form">
                        <form method="post" action="{{ route('login') }}">
                        @csrf
                            <!-- <h1>Codingo</h1> -->
                            <!-- logo Text or Logo -->
                            <div class="login-logo">
                                <img class="img-fluid" src="images/logo-footer.png" alt="">
                            </div>
                            <h3>Login</h3>
                            <div class="form-group">
                                <!-- <label for="">Email address</label> -->
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="" placeholder="Username">
                                <small id="" class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <!-- <label for="">Password</label> -->
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <small id="" class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
                            </div>
                            <a href="" class="forgot-text">Forgot Password?</a>
                            <button type="submit" class="btn theme-primary">Sign In</button>
                        </form>
                    </div>
                <!-- <p class="text-center account-link">Don't have an account? <a href="">Sign up</a></p> -->
            </div>
        </div>
    </section>

    @include('console.layouts.footer')
