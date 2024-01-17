<?php
	include("koneksi.php");

    $id = $_GET['id'];

		$data = $dbcon->query("DELETE FROM produk where id = '$id'");
		if ($data){
			echo "<script>alert('Data telah di hapus');document.location = 'index.php' </script>";
		}
		else
		{
			echo "<script>alert('Data gagal di hapus');".$dbcon->eror."</script>";
		}
	
	?>