<?php
session_start();
require "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="bootstrap_template/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <main class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="card shadow-sm border-0 w-100" style="max-width: 420px;">
            <div class="card-body p-4 p-md-5">
                <h1 class="h3 text-center mb-2">Create an account</h1>
                <p class="text-muted text-center mb-4">Sign up to get started</p>

                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input
                            type="text" class="form-control" id="username" name="username" placeholder="Choose a username"
                            required
                        >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com"
                            required
                        >
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password" class="form-control" id="password" name="password" placeholder="Create a password"
                            required
                        >
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="create-acc">Create account</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
