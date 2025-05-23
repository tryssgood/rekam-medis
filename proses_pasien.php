<?php
include 'koneksi.php'; // Sesuaikan dengan path ke koneksi.php
// Pastikan variabel koneksi bernama $conn di koneksi.php

// Ambil data dari form
$nama_passien  = $_POST['nama_passien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama         = $_POST['agama'];
$alamat        = $_POST['alamat'];
$ttl           = $_POST['ttl'];
$usia          = $_POST['usia'];
$no_ktp        = $_POST['no_ktp'];
$no_kk         = $_POST['no_kk'];
$hub_keluarga  = $_POST['hub_keluarga'];

// Query simpan data (tanpa kolom primary key auto_increment)
// Pastikan kolom primary key (misal: id_passien) tidak dicantumkan di sini
// Pastikan kolom primary key (misal: id_passien) di tabel passien bertipe AUTO_INCREMENT dan tidak dicantumkan di query
$sql = "INSERT INTO passien (nama_passien, jenis_kelamin, agama, alamat, ttl, usia, no_ktp, no_kk, hub_keluarga)
        VALUES ('$nama_passien', '$jenis_kelamin', '$agama', '$alamat', '$ttl', '$usia', '$no_ktp', '$no_kk', '$hub_keluarga')";

if (mysqli_query($conn, $sql)) {
    echo "✅ Data berhasil disimpan.";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}   

mysqli_close($conn);
?>

