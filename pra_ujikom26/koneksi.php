<?php
class koneksi
{
    public function get_koneksi()
    {
        //menghubungkan ke db
        $conn = mysqli_connect("localhost", "root", "", "pra_ujikom26");
        //echo "Koneksi ke database berhasil!";
        //cek koneksi db
        if (mysqli_connect_error()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
        return $conn;
    }
}
$konek = new koneksi();
$koneksi = $konek->get_koneksi();
