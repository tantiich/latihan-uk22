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
    <?php
    $no_anggota = $_GET['no_anggota'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tblanggota WHERE no_anggota = '$no_anggota'");
    while ($anggota = mysqli_fetch_array($sql)) {
    ?>
        <form action="aksi_edit_anggota.php" method="post">
            <table>
                <tr>
                    <td>Nomor Anggota</td>
                    <td>:</td>
                    <td><input type="text" name="no_anggota" id="no_anggota" value="<?php echo $anggota['no_anggota']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $anggota['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Simpanan Wajib</td>
                    <td>:</td>
                    <td><input type="number" name="wajib" id="wajib" value="<?php echo $anggota['wajib']; ?>"></td>
                </tr>
                <tr>
                    <td>Simpanan Pokok</td>
                    <td>:</td>
                    <td><input type="number" name="pokok" id="pokok" value="<?php echo $anggota['pokok']; ?>"></td>
                </tr>
                <tr>
                    <td>Saldo</td>
                    <td>:</td>
                    <td><input type="number" name="saldo" id="saldo" value="<?php echo $anggota['saldo']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Input"> <input type="button" value="Tutup" onclick="window.location.href='dashboard.php'"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
    <br><br>
    <?php
    include "anggota_list.php";
    ?>
</body>

</html>