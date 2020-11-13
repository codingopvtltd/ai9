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
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="header-main w-100">
                    <div class="header-block d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center justify-content-between">
                            <div class="header-logo">
                                <div class="header-logo-block">
                                    <img class="img-fluid" src="{{asset('images/logo/logo.png')}}" alt="">
                                </div>
                            </div>
                            <div class="header-bar">
                                <i class="fal fa-bar text-dark"></i>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header-menu">
                                <div class="user-notifications">
                                    <div class="notifications">

                                    </div>
                                </div>
                                <div class="user-block">
                                    <div class="user-photo theme-bg">
                                        <img class="img-fluid" src="{{asset('images/logo/logo.png')}}" alt="">
                                    </div>
                                    <div class="user-popup-main">
                                        <div class="user-popup">
                                            <div class="user-small">
                                                <img class="img-fluid" src="{{asset('images/logo/logo.png')}}" alt="">
                                            </div>
                                            <h5>Rathin Rajendran</h5>
                                            <h6>rethin@codingo.co</h6>
                                            <div class="option-block">
                                                <ul>
                                                    <!-- <li><a href=""><i class="fal fa-home"></i>Home</a></li>
                                                    <li><a href=""><i class="fal fa-cog"></i>Settings</a></li> -->
                                                    <li><a href="{{route('logout')}}"><i class="fal fa-sign-out"></i>Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
