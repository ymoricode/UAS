<?php
// koneksi db
include 'db.php';

// menangkap data yg dikirim dari form
$id = $_POST['id'];
$nama = $_POST['name'];
$age = $_POST['age'];
$medical_history = $_POST['medical_history'];

//update ke database
mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', npm='$npm', alamat='$alamat' where id='$id'");

//mengalihkan halaman ke index.php
header("location:index.php");