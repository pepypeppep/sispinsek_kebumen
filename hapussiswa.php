<html>
<title>Hapus</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
-->
</style>

<?php
  include("koneksi.php");
  if(isset($_GET['nisn'])!="")
  {
  $delete=$_GET['nisn'];
  $delete=mysql_query("DELETE FROM tb_siswa WHERE nisn='$delete'");
	if($delete){
		
	echo "<script> alert('data berhasil dihapus'); location = 'tabel_siswa.php'; </script>";
		
	}else{
		
		echo "<script> alert('data gagal dihapus'); location = 'tabel_siswa.php'; </script>";
		
	}
  {
      echo mysql_error();
  }
  }
?>
</html>