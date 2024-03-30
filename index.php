<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
        body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Make sure the container takes up the full viewport height */
        margin: 0; /* Remove default body margin */
    }

    body h1 {
        text-align: center;
        color: black;
    }

    .border {
        max-width: 80%;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        border: 2px solid black; /* Set the border to medium size */
        text-align: center;
    }

    #login {
        text-align: center;
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
<body>
    <h1>Absensi Anak</h1>
    <img src="https://politeknik-sampit.ac.id/wp-content/uploads/2022/03/DJI_0238_Moment-scaled-e1648001582587.jpg" alt="" class="belakanglayar">
    <div class="border">
        <div id="login">
            <form id="Masuk" action="login.php" method="POST">
                <label for="username">Masukan Nama Anda :</label>
                <br />
                <input type="text" name="username" id="username" placeholder="Masukkan Nama">
                <br /><br />
                <button type="submit" form="Masuk" value="Masuk">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
