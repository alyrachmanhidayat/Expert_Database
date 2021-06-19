<?php
include 'library/library.php';

sudahLogin();

//jika server request method = post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //kalo password bener maka nampilin sql query
    $sql = "SELECT * FROM t_login
    WHERE username = '$username'
    AND password = SHA1('$password')";

    //kalo password salah nampilin error
    $data = $mysqli->query($sql) or die($mysqli->error);

    //jika data num_rows tidak sama dengan 0 maka
    if ($data->num_rows != 0) {
        $row = mysqli_fetch_object($data);
        $_SESSION['username'] = $row->username;
        $_SESSION['level'] = $row->level;
        header('location: index.php');
    } else {
        $error = "Username atau password salah.";
    }
}
include 'views/v_login.php';
