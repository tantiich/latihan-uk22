<table border="1">
    <tr>
        <th>No_Anggota</th>
        <th>Nama</th>
        <th>Wajib</th>
        <th>Pokok</th>
        <th>Saldo</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    $sql = mysqli_query($koneksi, "SELECT * FROM tblanggota");
    while ($anggota = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td><?php echo $anggota['no_anggota']; ?></td>
            <td><?php echo $anggota['nama']; ?></td>
            <td><?php echo $anggota['wajib']; ?></td>
            <td><?php echo $anggota['pokok']; ?></td>
            <td><?php echo $anggota['saldo']; ?></td>
            <td><a href="anggota_edit.php?no_anggota=<?php echo $anggota['no_anggota']; ?>">Edit</a></td>
            <td><a href="aksi_delete_anggota.php?no_anggota=<?php echo $anggota['no_anggota']; ?>">Hapus</a></td>
        </tr>
    <?php
    }
    ?>
</table>