<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "absensi_kampus";
$tb = "login";

$conn = mysqli_connect($host, $user, $pass, $db);
session_start();
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
