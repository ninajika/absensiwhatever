<?php
include 'koneksi.php';

// Periksa apakah pengguna sudah masuk (Anda harus menerapkan otentikasi pengguna di login.php)
if (!isset($_SESSION['username'])) {
    header('Location: index.php'); // Redirect ke halaman login
    exit();
}

// Dapatkan aksi dari formulir
$action = isset($_POST['action']) ? $_POST['action'] : '';

// Dapatkan username dari sesi
$username = $_SESSION['username'];

// Lakukan pembaruan basis data berdasarkan aksi
if ($action === 'masuk') {
    $updateQuery = "UPDATE absensi SET Kondisi='Masuk' WHERE username='$username'";
} elseif ($action === 'pulang') {
    $updateQuery = "UPDATE absensi SET Kondisi='Pulang' WHERE username='$username'";
} else {
    // Tangani kasus atau kesalahan lainnya jika diperlukan
    die("Aksi tidak valid.");
}

// Jalankan kueri pembaruan
if (mysqli_query($conn, $updateQuery)) {
    header('Location: absensi.php'); // Redirect kembali ke halaman menu
    exit();
} else {
    // Tangani kesalahan basis data jika diperlukan
    die("Kesalahan saat memperbarui basis data: " . mysqli_error($conn));
}
?>
