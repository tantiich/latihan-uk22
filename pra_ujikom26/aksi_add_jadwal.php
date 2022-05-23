<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd_dosen = $_POST['kd_dosen'];
$kd_mk = $_POST['kd_mk'];
$ruang = $_POST['ruang'];
$waktu = $_POST['waktu'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tbl_jadwal VALUES ('','$kd_dosen','$kd_mk', '$ruang', '$waktu')");

// mengalihkan halaman kembali ke index.php
header("location:jadwal_list.php");
