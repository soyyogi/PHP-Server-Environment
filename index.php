<?php
session_start();

if(isset($_SESSION['username'])) {
    header('Location: http://localhost/PHP-Server-Environment/panel.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<form action="http://localhost/PHP-Server-Environment/validate.php" method="post">
    <label>User Name: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit" value="Login">
</form>

<body>

</body>

</html>