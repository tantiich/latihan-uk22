<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT JADWAL MATAKULIAH</title>
</head>

<body>
    <h2>Edit Jadwal Matakuliah</h2>
    <hr><br>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqr = mysqli_query($koneksi, "SELECT * FROM tbl_jadwal WHERE id = '$id'");
    while ($data = mysqli_fetch_array($sqr)) {
    ?>

        <form method="post" action="aksi_edit_jadwal.php">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <td><label for="kd_dosen">kode dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="kd_dosen" value="<?php echo $data['kd_dosen']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="kd_mk">kode matakuliah</label></td>
                    <td>:</td>
                    <td><input type="text" name="kd_mk" value="<?php echo $data['kd_mk']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="ruang">Ruang Kuliah</label></td>
                    <td>:</td>
                    <td><input type="text" name="ruang" value="<?php echo $data['ruang']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="waktu">Waktu Perkuliahan</label></td>
                    <td>:</td>
                    <td><input type="text" name="waktu" value="<?php echo $data['waktu']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"><input type="button" value="BATAL" onclick="window.location.href='jadwal_list.php'"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>