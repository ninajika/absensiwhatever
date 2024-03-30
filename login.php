<?php
include 'koneksi.php'; // Include your database connection

// Check if the form fields are set

$username = $_POST['username'];
$login = mysqli_query($conn, "SELECT * FROM login WHERE user='$username'");
$data = mysqli_num_rows($login);

if ($data > 0) {
    echo("Login Berhasil");
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: absensi.php");
} else {
    echo("Login Gagal");
    header("location: index.php");
}
echo("Hai Masbro")

?>
