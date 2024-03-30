<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sakit</title>
<style>
  .border {
    margin: auto;
    max-width: 90%; /* Adjust the max-width as needed */
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.5);
    border-color: transparent;
  }

 body {
  margin: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
 }

 h1 {
  margin-bottom: 20px;
  text-align: center;
 }

 form {
  display: flex;
  flex-direction: column;
  align-items: center;
 }

 textarea {
  width: 482px;
  height: 100px;
  resize: none;
  font-family: 'Onest', sans-serif;
 }

 button {
  display: block;
  margin-top: 10px;
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

  /* Media query for smaller screens */
  @media (max-width: 768px) {
    .border {
      max-width: 100%;
    }

    body {
      max-width: 100%;
    }

    table {
      width: 100%;
    }
  }
</style>
</head>
<body>
 <img src="https://politeknik-sampit.ac.id/wp-content/uploads/2022/03/DJI_0238_Moment-scaled-e1648001582587.jpg" alt="" class="belakanglayar">
 <div class="border">
  <h1>Menu Sakit</h1>
  <div style="width: 100%; display: flex; flex-direction: column; align-items: center; align-content: center;">
    <img draggable="false" src="logo.png" alt="Logo Kampus" width="200" height="200">
  </div>
  <br><br>
  <form action="proses_sakit.php" method="POST" enctype="multipart/form-data">
   <textarea id="sakit_text" aria-label="text" name="sakit" rows="4" cols="20"></textarea>
   <br>
   <input type="file" id="FileSaya" name="namafile" accept=".jpg,.png,.docx,.txt">
   <br>
   <button type="submit" id="submit-button">Submit</button>
  </form>
 </div>

 <script>
  document.getElementById("submit-button").addEventListener("click", function(event) {
   var textareaValue = document.getElementById("sakit_text").value;
   if (textareaValue === "") {
    event.preventDefault();
    alert("Kamu harus mengisi izin!");
   } else {
    alert("Formulir Dikirim!");
   }
  });
 </script>
</body>
</html>