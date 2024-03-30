<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'sakit' field is set and not empty
    if (isset($_POST['sakit']) && !empty($_POST['sakit'])) {
        // Get the text content from the 'sakit' field
        $sakitText = $_POST['sakit'];

        // Check if a file was uploaded
        var_dump($_FILES);
        if (isset($_FILES['namafile']) && $_FILES['namafile']['error'] === UPLOAD_ERR_OK) {
            // Get the file details
            $fileTmpPath = $_FILES['namafile']['tmp_name'];
            $fileName = $_FILES['namafile']['name'];

            // Set the destination directory
            $targetDirectory = 'dokumen/';
            $targetPath = $targetDirectory . $fileName;

            // Move the uploaded file to the destination directory
            move_uploaded_file($fileTmpPath, $targetPath);

            // Store the image path and text content in the database
            // Replace 'your_table_name' with your actual table name
            $sql = "INSERT INTO ujicoba (file_path, alasan) VALUES ('$targetPath', '$sakitText')";
            if (mysqli_query($conn, $sql)) {
                echo "Data berhasil disimpan";
            } else {
                echo "Error saat menyimpan data: " . mysqli_error($conn);
            }
        } else {
            echo "Tidak ada file yang diunggah";
        }
    } else {
        echo "Konten teks kosong";
    }
}
?>