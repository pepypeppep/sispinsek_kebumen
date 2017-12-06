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
       
        <li class="breadcrumb-item active" align="center">Tambah Data Sekolah</li>
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
<form name="form1" method="post" action="simpan_skl.php"> 
<table align="center" width="49%" border="0">
<tr>
<td>Kode Sekolah</td> 
<td>:</td> 
<td> 
<input name="kode_skl" type="text" size="25" maxlength="50"> 
</td> 
</tr>
<tr>
<td>Asal Sekolah</td> 
<td>:</td> 
<td> 
<input name="asal_skl" type="text" size="25" maxlength="50"> 
</td> 
</tr> 	
<tr> 
<td>Tujuan Sekolah</td> 
<td>:</td> 
<td> 
<input name="tujuan_skl" type="text" size="25" maxlength="50"> 
</td> 
</tr> 
<tr>
<td></td><td></td>
<td><input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
<a href="tabel_skl.php" class="btn btn-sm btn-danger">Batal</a></td>
</tr>
</table> 
</form>
     
 </body>
 