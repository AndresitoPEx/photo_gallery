<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->

        <!-- Header-->

        <!-- Section-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6">
                        <form class="form-signin" action="../controlador/login.php" method="post">
                            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                            <label for="inputEmail">Email address</label>
                            <input type="email" id="inputEmail" name="email" class="form-control frm_login_email" placeholder="Email address" required autofocus>
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" name="password" class="form-control frm_login_pass" placeholder="Password" required>
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
                    </div>
                    <div class="col-lg-3">

                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../assets/js/scripts.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>