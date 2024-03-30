<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 60px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        button[type="submit"] {
            width: 105%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group select {
            width: 106%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group option {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ABSENSI MAHASISWA POLISAM</h2>
        <form action="proses_absensi.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <select name="jurusan" id="jurusan" class="form-control">
                    <option value="Teknik Informatika" selected>Teknik Informatika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Perkebunan">Perkebunan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="waktu">Waktu:</label>
                <input type="time" id="waktu" name="waktu" required>
            </div>
            <button type="submit">Hadir</button>
        </form>
    </div>
</body>
</html>
