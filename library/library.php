<?php
include 'library\helper.php';

// connect library.php agar bisa read db_expert
//session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_expert';

$mysqli = mysqli_connect($host, $user, $pass, $db)
    or die('Cant connect to Database');
