<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "auth_demo";

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection error");
}else{
    // echo "Success";
}

if(isset($_POST["create-acc"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];    

    $sql_insert = "INSERT INTO users(email, username, `password`) VALUES('$email', '$username', '$password')";
    $sql_execute = $conn->query($sql_insert);

    header("Location: index.php");
}

if(isset($_POST["login"])){
    $login_username = $_POST["username"];
    $login_password = $_POST["password"];

    $sql_see = "SELECT * FROM users WHERE username = '$login_username'";
    $execute = $conn->query($sql_see);
    $fetch = $execute->fetch_assoc();
    
    if($fetch["username"] == $login_username && $fetch["password"] == $login_password){
        
        $_SESSION["username"]= $login_username;
        $_SESSION["password"] = $login_password;

        header("Location: dashboard.php");
        exit();
    }else{
        header("Location: index.php");
        exit();
    }
}

?>