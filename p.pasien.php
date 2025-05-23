<?php

$conn = mysqli_connect("localhost", "root", "", "klinik");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


$nama_passien   = $_POST['nama_passien'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$agama          = $_POST['agama'];
$alamat         = $_POST['alamat'];
$ttl            = $_POST['ttl'];
$usia           = $_POST['usia'];
$no_ktp         = $_POST['no_ktp'];
$no_kk          = $_POST['no_kk'];
$hub_keluarga   = $_POST['hub_keluarga'];

// Query simpan ke tabel pasien
$sql = "INSERT INTO pasien (nama_passien, jenis_kelamin, agama, alamat, ttl, usia, no_ktp, no_kk, hub_keluarga)
        VALUES ('$nama_passien', '$jenis_kelamin', '$agama', '$alamat', '$ttl', '$usia', '$no_ktp', '$no_kk', '$hub_keluarga')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
