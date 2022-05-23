<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA JADWAL MATA KULIAH</title>
</head>

<body>
    <h2>DATA JADWAL MATA KULIAH</h2>
    <hr>
    <table>
        <tr>
            <td><a href="jadwal_add.php"><button> + Tambah Jadwal Matakuliah</button></a></td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Dosen</th>
            <th>Kode Matakuliah</th>
            <th>Ruang</th>
            <th>Waktu</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $sql = mysqli_query($koneksi, "select * from tbl_jadwal");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kd_dosen']; ?></td>
                <td><?php echo $data['kd_mk']; ?></td>
                <td><?php echo $data['ruang']; ?></td>
                <td><?php echo $data['waktu']; ?></td>
                <td>
                    <a href="jadwal_edit.php?id=<?php echo $data['id']; ?> ">Edit</a>
                    <a href="jadwal_delete.php?id=<?php echo $data['id']; ?> ">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <table>
        <tr>
            <a href="admin_dashboard.php"><button>Kembali Ke Menu Utama</button></a>
        </tr>
    </table>
</body>

</html>