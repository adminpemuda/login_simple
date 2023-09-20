<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'data_login');
    if ($koneksi) {
        echo "Koneksi Berhasil\n";
    } else {
        echo "Koneksi Gagal\n";
    }
?>