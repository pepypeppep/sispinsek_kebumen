<?php
include("koneksi.php");
	if(isset($_POST['add'])) {
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$alamat= $_POST['alamat'];
	$ttl= $_POST['ttl'];
	$kelas= $_POST['kelas'];
	
	
	
	$cek = mysql_query("SELECT * FROM tb_siswa WHERE nisn = '$nisn'");

				$insert = mysql_query("INSERT INTO tb_siswa VALUES ('$nisn', '$nama', '$kelamin', '$alamat', '$ttl', '$kelas')");
				if($insert){
				
				echo "<script> alert('data berhasil di simpan'); location='tabel_siswa.php'; </script>";
				}
				else {
				echo "<script> alert('data gagal di simpan'); location='tabel_siswa.php'; </script>";
				}
				}		
?>