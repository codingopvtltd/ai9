@extends(template.layouts.header)

<body>
    <section class="login">
        <div class="container">
            <div class="row m-0">
                <div class="login-form">
                    <form>
                        <!-- <h1>Codingo</h1> -->
                        <!-- logo Text or Logo -->
                        <div class="login-logo">
                            <img class="img-fluid" src="images/logo/logo.png" alt="">
                        </div>
                        <h3>Login</h3>
                        <div class="form-group">
                            <!-- <label for="">Email address</label> -->
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Enter email">
                            <small id="" class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <!-- <label for="">Password</label> -->
                            <input type="password" class="form-control" id="" placeholder="Enter Password">
                        </div>
                        <button type="submit" class="btn theme-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer JS -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mCustomScrollbar.min.js"></script>
    <script src="assets/js/themekit.js"></script>
    <script src="assets/js/login-custom.js"></script>

</body>

</html>