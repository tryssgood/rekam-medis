<?php
session_start();
include 'koneksi.php';

$kode     = $_POST['kode_user'];
$username = $_POST['username'];
$password = $_POST['password'];

// Ganti nama tabel dan field sesuai database Anda
$query = "SELECT * FROM login WHERE kode_user='$kode' AND username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    $_SESSION['login'] = true;
    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('Login gagal!');window.location='login.php';</script>";
}
?>