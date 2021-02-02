<?php
$user = 'yogi';
$pwd = 'abcd1234';
$username = $_POST['username'];
$password = $_POST['password'];
if ($user === $username && $pwd === $password) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('Location: http://localhost/PHP-Server-Environment/panel.php');
} else {
    header('Location: http://localhost/PHP-Server-Environment/index.php');
}

