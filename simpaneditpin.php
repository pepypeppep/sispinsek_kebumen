     <?php
    include "koneksi.php";
    $nama     	= $_POST['nama'];
	$ttl     	= $_POST['ttl'];
    $nisn    	= $_POST['nisn'];
    $asal    	= $_POST['asal'];
    $ortu    	= $_POST['ortu'];
    $keperluan  = $_POST['keperluan'];
    $alasan    	= $_POST['alasan'];
    $memiliki   = $_POST['memiliki'];
    $keterangan = $_POST['keterangan'];
    $sk_ortu    = $_POST['sk_ortu'];
    $sk_skl    	= $_POST['sk_skl'];
    $sk_uptd    = $_POST['sk_uptd'];

    $query =mysql_query("update tb_pindah set nama='$nama', ttl='$ttl', nisn='$nisn', asal='$asal', ortu='$ortu', keperluan='$keperluan', alasan='$alasan', memiliki='$memiliki', keterangan='$keterangan', sk_ortu='$sk_ortu', sk_skl='$sk_skl', sk_uptd='$sk_uptd' where nama='$nama'");
		if($query){
		
		echo "<script> alert('update data berhasil'); location = 'tabel_pin.php'; </script>";
		
	}else{
		
		echo "<script> alert('update data gagal'); location = 'tabel_pin.php'; </script>";
		
	}
  {
      echo mysql_error();
  }
  
    ?>