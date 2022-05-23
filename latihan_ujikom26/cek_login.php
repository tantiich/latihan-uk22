<?php
session_start();
include "koneksi.php";

$namaksr = $_POST['username'];
$passwordksr = $_POST['password'];

$data_cek = mysqli_query($koneksi, "SELECT * FROM tblkasir WHERE namaksr = '$namaksr' AND passwordksr = '$passwordksr'");
$cek = mysqli_num_rows($data_cek);

if ($cek > 0) {
    $_SESSION['username'] = $namaksr;
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
} else {
    header("location:login.php?pesan=gagal");
}
