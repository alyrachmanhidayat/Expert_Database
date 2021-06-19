<?php
session_start();

function base_url()
{
    return "http://localhost/databaseexpert";
}

function flash($tipe, $pesan = '')
{
    if (empty($pesan)) {
        $pesan = @$_SESSION[$tipe];
        unset($_SESSION[$tipe]);
        return $pesan;
    } else {
        $_SESSION[$tipe] = $pesan;
    }
}

//cek apakah data username & level tidak kosong?(uname & level is sesi yang di pake saat login)
//cek sudah login atau belum, kalo belum ke login.php
function cekLogin()
{
    $username = @$_SESSION['username'];
    $level    = @$_SESSION['level'];

    if (empty($username) and empty($level)) {
        header("location: login.php");
    }
}

//cek sudah login atau belum, kalo sesi nya masi aktif bisa langsung ke index.php
function sudahLogin()
{
    $username = @$_SESSION['username'];
    $level    = @$_SESSION['level'];

    if (!empty($username) and !empty($level)) {
        header("location: index.php");
    }
}
