<?php
include "koneksi.php";

$no_anggota = $_POST['no_anggota'];
$nama = $_POST['nama'];
$wajib = $_POST['wajib'];
$pokok = $_POST['pokok'];
$saldo = $_POST['saldo'];

mysqli_query($koneksi, "INSERT INTO tblanggota VALUES ('$no_anggota','$nama','$wajib','$pokok','$saldo')");

header("location:anggota.php");
