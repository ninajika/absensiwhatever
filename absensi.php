<?php
include 'koneksi.php';


// Check if the user is logged in (You should implement user authentication)
// if (!isset($_SESSION['username'])) {
//     header('Location: index.php'); // Redirect to the login page
//     exit();
// }
$nama = $_SESSION['username'];

$query = mysqli_query($conn, "SELECT * from absensi WHERE username='$nama'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Absen</title>
    <style>
        .tebel
        {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
        }
    .border {
        /* make this border to fully center */
        margin: auto;
        margin-left: auto;
        margin-right: auto;
        max-width: 75%;
        padding: 10px;
        /* make inside border have white color */
        background-color: rgba(255, 255, 255, 0.5);
        border-color: transparent;
    }
    body {
        margin: auto;
        max-width: 80%;
    }
    table, th, td {
        border: 1px solid black;
        text-align: center;
    }
    td, th {
        text-align: center;
    }
    h2, h3 {
        text-align: center;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    button {
        text-align: center;
    }
    .center-button {
        display: flex;
        justify-content: center;
    }
    img.belakanglayar {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        filter: blur(5px);
        z-index: -1;
    }
    </style>
</head>
<body>
    <img src="https://politeknik-sampit.ac.id/wp-content/uploads/2022/03/DJI_0238_Moment-scaled-e1648001582587.jpg" alt="" class="belakanglayar">
    <div class="border">
        <h2>Selamat Datang</h2>
        <div style="width: 100%; display: flex; flex-direction: column; align-items: center; align-content: center;">
            <img src="logo.png" alt="Logo Kampus" width="200" height="200">
        </div>
        <h3>Detail Mahasiswa</h3>
        <div class="tebel">
        <table>
            <tr>
                <th>Nama Mahasiswa</th>
                <td><?php echo $row['nama_mahasiswa']; ?></td>
            </tr>
            <tr>
                <th>Nomor Mahasiswa</th>
                <td><?php echo $row['nomor_mahasiswa']; ?></td>
            </tr>
            <tr>
                <th>Jurusan Mahasiswa</th>
                <td><?php echo $row['jurusan_mahasiswa']; ?></td>
            </tr>
            <tr>
                <th>Jam Masuk</th>
                <td>12:00 WIB</td>
            </tr>
            <tr>
                <th>Jam Keluar</th>
                <td>13:00 WIB</td>
            </tr>
        </table>
        </div>
       

        <br>

        <?php
        echo ($row["Kondisi"]);
        if ($row["Kondisi"] == "Belum Masuk") {
            echo "<div class='center-button'>";
            echo "<form action='update_absensi.php' method='POST'>";
            echo "<input hidden type='text' name='action' value='masuk'>";
            echo "<button type='submit' onclick='showMasukNotification()'>Masuk</button>";
            echo "</form>";
            echo "</div>";
        } else if ($row["Kondisi"] == "Masuk") {
            echo "<div class='center-button'>";
            echo "<form action='update_absensi.php' method='POST'>";
            echo "<input hidden type='text' name='action' value='pulang'>";
            echo "<button type='submit' onclick='showPulangNotification()'>Pulang</button>";
            echo "</form>";
            echo "</div>";
        } else if ($row["Kondisi"] == "Pulang") {
            echo "<div class='center-button'>";
            echo "<form action='update_absensi.php' method='POST'>";
            echo "<input hidden type='text' name='action' value='masuk'>";
            echo "<button type='submit' onclick='showMasukNotification()'>Masuk</button>";
            echo "</form>";
            echo "</div>";
        }
        ?>
        

        <script>
            function showMasukNotification() {
                alert("Selamat Datang!");
            }

            function showPulangNotification() {
                alert("Selamat Tinggal See You Next Time!");
            }
        </script>
    </div>
</body>
</html>
