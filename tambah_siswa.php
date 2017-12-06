<html>
<head>
 <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  
 
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  
   <ol class="breadcrumb">
       
        <li class="breadcrumb-item active" align="center">Tambah Data Siswa</li>
      </ol>
<style type="text/css">
<!--
.style2 {font-family: "Courier New", Courier, monospace}
.style6 {color: #FFFFFF; font-family: "Courier New", Courier, monospace; font-weight: bold; }
.style7 {
	color: #333333;
	font-weight: bold;
}
-->
</style>
<td width="689"><table width="571" border="0" align="center">
    </table>
 <br>
 <br>
<form name="form1" method="post" action="simpan_siswa.php"> 
<table align="center" width="49%" border="0">
<tr>
<td>Nisn</td> 
<td>:</td> 
<td> 
<input name="nisn" type="text" size="15" maxlength="50"> 
</td> 
</tr> 	
<tr> 
<td>Nama Siswa</td> 
<td>:</td> 
<td> 
<input name="nama" type="text" size="25" maxlength="50"> 
</td> 
</tr> 
<tr> 
<td>Jenis Kelamin</td> 
<td>:</td> 
<td> 
<input name="kelamin" type="text" size="15" maxlength="50"> 
</td> 
</tr> 
<tr>  
<td valign="top">Alamat</td> 
<td valign="top">:</td> 
<td valign="top">
<textarea name="alamat" cols="25" rows="2"></textarea> 
</td> 
</tr>
<tr> 
<td>Tempat/Tgl Lahir</td> 
<td>:</td> 
<td> 
<input name="ttl" type="text" size="25" maxlength="50"> 
</td> 
</tr>  
<tr> 
<td>Kelas</td> 
<td>:</td> 
<td> 
<input name="kelas" type="text" size="5" maxlength="50"> 
</td> 
</tr>  
<tr>
<td></td><td></td>
<td><input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
<a href="tabel_siswa.php" class="btn btn-sm btn-danger">Batal</a></td>
</tr>
</table> 
</form>
     
 </body>
 