<?php
$user = 'yogi';
$pwd = 'abcd1234';
$username = $_POST['username'];
$password = $_POST['password'];
if ($user === $username && $pwd === $password) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('Location: localhost:3000/panel.php');
} else {
    header('Location: localhost:3000/index.php');
}

