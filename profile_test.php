<?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: logintest.php");
        exit();
    }else {
        $username = $_SESSION["username"];
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile Form</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Username:</p> <?= $username ?>
    <p>Welcom</p>
</body>
</html>