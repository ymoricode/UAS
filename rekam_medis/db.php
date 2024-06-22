<?php
$koneksi = mysqli_connect("localhost", "root", "", "rekam_medis");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}