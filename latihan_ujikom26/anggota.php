<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>

<body>
    <h1>Data Anggota</h1>
    <form action="aksi_add_anggota.php" method="post">
        <table>
            <tr>
                <td>Nomor Anggota</td>
                <td>:</td>
                <td><input type="text" name="no_anggota" id="no_anggota" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td>Simpanan Wajib</td>
                <td>:</td>
                <td><input type="number" name="wajib" id="wajib" required></td>
            </tr>
            <tr>
                <td>Simpanan Pokok</td>
                <td>:</td>
                <td><input type="number" name="pokok" id="pokok" required></td>
            </tr>
            <tr>
                <td>Saldo</td>
                <td>:</td>
                <td><input type="number" name="saldo" id="saldo" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Input"> <input type="button" value="Tutup" onclick="window.location.href='dashboard.php'"></td>
            </tr>
        </table>
    </form>
    <br><br>
    <?php
    include "anggota_list.php";
    ?>

</body>

</html>