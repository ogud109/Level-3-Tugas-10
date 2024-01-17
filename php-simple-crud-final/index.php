<!DOCTYPE html>
<?php
include("koneksi.php");
 
$data = $dbcon->query("SELECT * FROM produk ORDER BY id ASC");

while($info = mysqli_fetch_array($data)) {
?>
<html>
  <head>
      <title>CRUD Sederhana</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body class="satu">
    <h1>Tampilan Data</h1>
    <a href="form-input.php">
      <button class="button-input">Input Data</button>
    </a>
    <br>
    <p></p>
    <table border="1">
      <tr>
        <th>Nama Produk</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Opsi</th>
      </tr>
      <tr>
      <?php  
        while($info = mysqli_fetch_array($data)) {         
          echo "<tr>";
          echo "<td>".$info['nama_produk']."</td>";
          echo "<td>".$info['keterangan']."</td>";
          echo "<td>Rp. ".$info['harga']."</td>";
          echo "<td>".$info['jumlah']."</td>";
          echo 
            "<td><a href='form-edit.php?id=$info[id]'><button>Edit</button></a> 
            | 
            <a href='query-del.php?id=$info[id]'><button>Delete</button></a></td></tr>";
          echo "</tr>";
              
        }
        ?>
      </tr>
    </table>
  </body>
</html>

<?php } ?>