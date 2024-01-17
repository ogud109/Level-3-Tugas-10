<?php
	include("koneksi.php");

		$a = $_POST['nama-produk'];
    $b = $_POST['keterangan'];
    $c = $_POST['harga'];
    $d = $_POST['jumlah'];
		
		$data = $dbcon->query("INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$a', '$b', '$c', '$d')");
		if ($data){
			echo "<script>alert('Data Telah Tersimpan');document.location = 'index.php' </script>";
		}
		else
		{
			echo "<script>alert('Data Tidak Disimpan');".$dbcon->eror."</script>";
		}
	
	?>