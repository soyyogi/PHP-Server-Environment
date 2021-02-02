<?php
session_start();
session_destroy();
header('Location: http://localhost/PHP-Server-Environment/index.php');