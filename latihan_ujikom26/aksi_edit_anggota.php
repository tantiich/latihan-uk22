<?php
include "koneksi.php";

$no_anggota = $_POST['no_anggota'];
$nama = $_POST['nama'];
$wajib = $_POST['wajib'];
$pokok = $_POST['pokok'];
$saldo = $_POST['saldo'];

mysqli_query($koneksi, "UPDATE tblanggota SET no_anggota='$no_anggota', nama='$nama', wajib='$wajib', pokok='$pokok', saldo='$saldo' WHERE no_anggota='$no_anggota'");

header("location:anggota.php");
