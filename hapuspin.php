<html>
<title>Hapus</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
-->
</style>

<?php
  include("koneksi.php");
  if(isset($_GET['nama'])!="")
  {
  $delete=$_GET['nama'];
  $delete=mysql_query("DELETE FROM tb_pindah WHERE nama='$delete'");
	if($delete){
		
	echo "<script> alert('data berhasil dihapus'); location = 'tabel_pin.php'; </script>";
		
	}else{
		
		echo "<script> alert('data gagal dihapus'); location = 'tabel_pin.php'; </script>";
		
	}
  {
      echo mysql_error();
  }
  }
?>
</html>