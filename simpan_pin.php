<?php
include("koneksi.php");
	if(isset($_POST['add'])) {
    $nama     	= $_POST['nama'];
	$ttl     	= $_POST['ttl'];
    $nisn    	= $_POST['nisn'];
    $asal    	= $_POST['asal'];
    $kelas    	= $_POST['kelas'];
    $ortu    	= $_POST['ortu'];
    $keperluan  = $_POST['keperluan'];
    $alasan    	= $_POST['alasan'];
    $memiliki   = $_POST['memiliki'];
    $keterangan = $_POST['keterangan'];
    $sk_ortu    = $_POST['sk_ortu'];
    $sk_skl    	= $_POST['sk_skl'];
    $sk_uptd    = $_POST['sk_uptd'];
	
	
	
	$cek = mysql_query("SELECT * FROM tb_pindah WHERE nama = '$nama'");

				$insert = mysql_query("INSERT INTO tb_pindah VALUES ('$nama', '$ttl', '$nisn', '$asal', '$kelas', '$ortu', '$keperluan', '$alasan', '$memiliki', '$keterangan', '$sk_ortu', '$sk_skl', '$sk_uptd')");
				if($insert){
				
				echo "<script> alert('data berhasil di simpan'); location='tabel_pin.php'; </script>";
				}
				else {
				echo "<script> alert('data gagal di simpan'); location='tabel_pin.php'; </script>";
				}
				}		
?>