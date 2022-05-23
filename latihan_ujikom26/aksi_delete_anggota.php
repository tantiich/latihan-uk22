<?php
include "koneksi.php";

$no_anggota = $_GET['no_anggota'];

mysqli_query($koneksi, "DELETE FROM tblanggota WHERE no_anggota='$no_anggota'");

header("location:anggota.php");
