<?php
session_start();
require "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap_template/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <main class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="card shadow-sm border-0 w-100" style="max-width: 420px;">
            <div class="card-body p-4 p-md-5">
                <h1 class="h3 text-center mb-2">Kindly Login into our Login Form</h1>
                <p class="text-muted text-center mb-4">Log in to your account</p>

                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input
                            type="text" class="form-control" id="username" name="username" placeholder="Enter your username"
                            required
                        >
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
                            required
                        >
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="login">Log in</button>
                </form>
                    <a href="register.php" style="display: flex; justify-content:center">Create one</a>
            </div>
        </div>
    </main>
</body>
</html>
