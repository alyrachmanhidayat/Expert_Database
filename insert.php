<?php
include 'library\library.php';

//utk memeriksa apakah ada request dlm bentuk POST ke insert.php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //ambil data dlm bentuk POST dari form input data
    $name = @$_POST['name'];
    $phone = @$_POST['phone'];
    $email = @$_POST['email'];
    $occupation = @$_POST['occupation'];
    $expertise = @$_POST['expertise'];
    $workarea_ceccep = @$_POST['workarea_ceccep'];
    $article_presentation = @$_POST['article_presentation'];

    //memasukan data ke tabel experts
    $sql = "INSERT INTO experts (name, phone, email, occupation, expertise, workarea_ceccep, article_presentation)
    VALUES ('$name', '$phone', '$email', '$occupation', '$expertise', '$workarea_ceccep', '$article_presentation')";

    //melakukan query ke sql, bila error muncul message error
    $mysqli->query($sql) or die($mysqli->error);

    //redirect ke index.php
    header('location: index.php');
}

include 'views\v_insert.php';
