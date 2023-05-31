<?php

$host = 'localhost'; // Ganti dengan nama host database Anda
$user = 'root'; // Ganti dengan nama pengguna database Anda
$password = ''; // Ganti dengan kata sandi database Anda
$database = 'uaselsa'; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>
