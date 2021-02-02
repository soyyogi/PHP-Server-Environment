<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: http://localhost/PHP-Server-Environment/index.php');
}

$username = strtoupper($_SESSION['username']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    <h2>Welcome to admin panel <?=$username?></h2>
    <a href="http://localhost/PHP-Server-Environment/close_session.php"><button>Logout</button></a>
</body>
</html>