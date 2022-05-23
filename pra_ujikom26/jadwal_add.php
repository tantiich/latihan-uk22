<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH JADWAL MATAKULIAH</title>
</head>

<body>
    <h2>Tambah Jadwal Matakuliah</h2><br>
    <form action="aksi_add_jadwal.php" method="post">
        <table>
            <tr>
                <td><label for="kd_dosen">Kode Dosen</label></td>
                <td>:</td>
                <input type="hidden" name="id">
                <td><input type="text" name="kd_dosen" placeholder="masukkan kode dosen" required></td>
            </tr>
            <tr>
                <td><label for="kd_mk">Kode Matakuliah</label></td>
                <td>:</td>
                <td><input type="text" name="kd_mk" placeholder="masukkan kode matakuliah" required></td>
            </tr>
            <tr>
                <td><label for="ruang">Ruang Kuliah</label></td>
                <td>:</td>
                <td><input type="text" name="ruang" placeholder="masukkan ruang kuliah" required></td>
            </tr>
            <tr>
                <td><label for="waktu">Waktu Perkuliahan</label></td>
                <td>:</td>
                <td><input type="text" name="waktu" placeholder="masukkan waktu perkuliahan" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"><input type="button" value="BATAL" onclick="window.location.href='jadwal_list.php'"></td>
            </tr>
        </table>
    </form>
</body>

</html>