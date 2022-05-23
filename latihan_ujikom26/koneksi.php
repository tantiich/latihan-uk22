<?php

class koneksi
{
    public function get_koneksi()
    {
        $conn = mysqli_connect("localhost", "root", "", "latihan_ujikom26");

        if (mysqli_connect_error()) {
            echo "gagal konek ke database" . mysqli_connect_error();
        }

        return $conn;
    }
}

$konek = new koneksi;
$koneksi = $konek->get_koneksi();
