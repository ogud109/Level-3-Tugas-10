<?php
	include("koneksi.php");

    $id = $_POST['id'];
		$a = $_POST['nama-produk'];
    $b = $_POST['keterangan'];
    $c = $_POST['harga'];
    $d = $_POST['jumlah'];
		
		$data = $dbcon->query("UPDATE produk SET nama_produk = '$a', keterangan = '$b', harga = '$c', jumlah = '$d' WHERE id = '$id'");
		if ($data){
			echo "<script>alert('Data Telah Edit');document.location = 'index.php' </script>";
		}
		else
		{
			echo "<script>alert('Data gagal di edit');".$dbcon->eror."</script>";
		}
	
	?>