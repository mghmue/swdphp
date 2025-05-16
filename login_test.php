<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>
<body>
  <form action="profiletest.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    
    <input type="submit" value="Login">
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars( $_POST["password"]);

    if($email == "MgHmue" && $password == "123456") {
       
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    
    header("Location: profiletest.php");
    exit();
  } else {
    echo "something went wrong";
  }
}
?>