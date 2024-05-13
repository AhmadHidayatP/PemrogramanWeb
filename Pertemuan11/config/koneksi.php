<?php
// Set zona waktu default 
date_default_timezone_set('Asia/Jakarta');

// Membuat koneksi ke MySQL
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb","3306");

// Memeriksa apakah terjadi kesalahan saat koneksi ke database
if (mysqli_connect_error()) {
    // Jika terjadi kesalahan, hentikan eksekusi dan tampilkan pesan kesalahan
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
