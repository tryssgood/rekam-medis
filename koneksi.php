
<?php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan jika tidak ada password untuk MySQL
$db   = "rekam_medis"; // Pastikan database ini sudah dibuat di phpMyAdmin

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
