<?php
//allow the config
define('__CONFIG__', true);
//require the config
require_once "inc/config.php";

Page::ForceDashboard();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign In Page</title>
    <!-- Custom styles for this template -->
    <link href="assets/styles/global.css" rel="stylesheet">
    <link href="assets/styles/form.css" rel="stylesheet">
</head>

<body class="d-flex flex-column justify-content-between">
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <img src="https://img.icons8.com/color/48/000000/b-cute.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler02" aria-controls="navbarToggler02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarToggler02">
                    <ul class="navbar-nav mr-auto mt-0 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <div class=" my-2 my-lg-0">
                        <a href="/signin.php" role="button" class="btn btn-outline-light mr-3">Log In</a>
                        <a href="/signup.php" role="button" class="btn btn-warning">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="form">
        <div class="card">
            <div class="card-header py-2">
                <h5 class="my-1">Sign In</h5>
            </div>
            <div class="card-body text-center">
                <form class="form-signin">
                    <div class="alert alert-danger js-error" role="alert" style="display: none;">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <button class="btn btn-md btn-success btn-block w-100 py-2 my-2" id="btn-signin" type="submit"> Sign In</button>

                    <a href="/resetpassword.php" class="btn btn-md btn-secondary btn-block w-100 py-2 my-2" role="button" id="btn-password-reset"> Forgot Password</a>

                    <hr />

                    <a href="/signup.php" class="btn btn-md btn-primary btn-block w-100 py-2" role="button" id="btn-signup"> Sign Up New Account</a>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once "inc/footer.php"; ?>
</body>

</html>