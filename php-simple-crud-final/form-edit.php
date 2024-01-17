<!DOCTYPE html>
<?php
include("koneksi.php");
$id = $_GET['id'];
$data = $dbcon->query("SELECT * FROM produk WHERE id = $id");
while($info = mysqli_fetch_array($data)) {
?>
<html>
  <head>
      <title>CRUD sederhana</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container-content">
      <h1>Form Edit Data</h1>
      <form action="query-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $info['id'] ?>" required>
        <label>Nama Produk :</label>
        <br>
        <input type="text" name="nama-produk" value="<?php echo $info['nama_produk'] ?>" placeholder="Masukan nama produk" class="input-box" required>
        <br><br>
        <label>Keterangan :</label>
        <br>
        <textarea name="keterangan" placeholder="Masukan keterangan produk" class="text-box" required><?php echo $info['keterangan'] ?></textarea>
        <br><br>
        <label>Harga :</label>
        <br>
        <input type="number" name="harga" value="<?php echo $info['harga'] ?>" placeholder="Masukan harga produk" class="input-box" required>
        <br><br>
        <label>Jumlah :</label>
        <br>
        <input type="number" name="jumlah" value="<?php echo $info['jumlah'] ?>" placeholder="Masukan jumlah produk"  class="input-box" required>
        <br><br>
        <p></p>
        <button type="Submit" class="button-box">Submit</button>
      </form>
    </div>
  </body>
</html>
<?php } ?>