<?php
include("koneksi.php");
	if(isset($_POST['add'])) {
	$kode_skl = $_POST['kode_skl'];
	$asal_skl = $_POST['asal_skl'];
	$tujuan_skl = $_POST['tujuan_skl'];
	
	
	
	$cek = mysql_query("SELECT * FROM tb_sekolah WHERE kode_skl = '$kode_skl'");

				$insert = mysql_query("INSERT INTO tb_sekolah VALUES ('$kode_skl', '$asal_skl', '$tujuan_skl')");
				if($insert){
				
				echo "<script> alert('data berhasil di simpan'); location='tabel_skl.php'; </script>";
				}
				else {
				echo "<script> alert('data gagal di simpan'); location='tabel_skl.php'; </script>";
				}
				}		
?>