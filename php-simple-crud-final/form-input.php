<!DOCTYPE html>
<html>
  <head>
      <title>CRUD Sederhana</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container-content">
      <h1>Form Input Data</h1>
      <form action="query-input.php" method="POST">
        <label>Nama Produk :</label>
        <br>
        <input type="text" name="nama-produk" placeholder="Masukan nama produk..." class="input-box" required>
        <br><br>
        <label>Keterangan :</label>
        <br>
        <textarea name="keterangan" placeholder="Masukan keterangan produk..." class="text-box" required></textarea>
        <br><br>
        <label>Harga :</label>
        <br>
        <input type="number" name="harga" placeholder="Masukan harga produk..." class="input-box" required>
        <br><br>
        <label>Jumlah :</label>
        <br>
        <input type="number" name="jumlah" placeholder="Masukan jumlah produk..." class="input-box" required>
        <br>
        <p class="p-box">
        <button type="Submit" class="button-box">Submit</button>
        </p>
      </form>
    </div>
  </body>
</html>