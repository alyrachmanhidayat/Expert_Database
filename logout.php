<?php
//memulai sesi
session_start();
//menghancurkan sesi yang telah dimulai
session_destroy();
//nampilin index.php
header('location: login.php');
