<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

$username = htmlspecialchars($_SESSION["username"], ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SessionAuthSystem</title>
    <link rel="stylesheet" href="bootstrap_template/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
           <span style="color: white">SessionAuthSystem</span>
            <div class="ms-auto d-flex align-items-center gap-3">
                <span class="text-white">Hello, <?= $username ?></span>
                <form action="logout.php" method="POST" class="m-0">
                    <button class="btn btn-danger" type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="card shadow-lg" style="border:2px solid black; margin-top: 50px; height: 55vh; text-align:center; width: 55%; margin-left:22pc">
        <h1 style="color:blue">Welcome, <?= $_SESSION["username"] ?></h1>
        <h2>How Are you?</h2> <br>
        <span >This page or dashboard is only accessible to people who have real credentials</span>
        <br>
        <span >Username: <?= $_SESSION["username"] ?></span>


        <div class="column" style="display:flex; justify-content:center; flex-direction:column; align-items:center; gap:20px">
            <div class="card" style="width:50%; background-color: grey; border:2px solid black">
                <span>Active Session ID:</span>
                <span><?= session_id() ?></span>
            </div>

            <div class="card" style="width:50%; background-color: grey; border:2px solid black">
                <span>User Details</span>
                <span>Username: <?= $_SESSION["username"] ?></span> 
                <span>User Id: <?= session_regenerate_id() ?></span>
            </div>
        </div>
        

    </div>

   
        
    </main>
</body>
</html>
