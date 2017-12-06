<html>
	<head>
		<title>Cetak Laporan</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset-iso-8859-1" />
	</head>
	<body>
		<center>
		<div id="wrapper">
			<header>
				<!-- <img src="images/dasar.jpg"> -->
				<br>
				<img src="images/logo1.png">
				<div id="textKop">
					<p id="pemkabkeb">PEMERINTAH KABUPATEN KEBUMEN</p>
					<h2>DINAS PENDIDIKAN</h2>
					<p id="jalan">Jl. Veteran No. 2 Kebumen Telp.(0287)381447,381289, Kode Pos.54311.s</p>
				</div>
				<hr>
			</header>
				<h2><u>SURAT KETERANGAN</u></h2>
				<p id="nomor"><b>Nomor :</b></p>
				<p class="keterangan">Tentang Surat Keterangan/Rekomendasi, dengan ini Kepala Dinas Pendidikan Kabupaten Kebumen menerangkan bahwa :</p>
				<br>
				<div id="dataDiri">
					<div id="tagName">
						<span>1. Nama</span>
						<span>2. Tempat dan tanggal lahir</span>
						<span>3. Nomor Induk/ NISN</span>
						<span>4. Asal Sekolah</span>
						<span>5. Kelas</span>
						<span>6. Nama orang tua</span>
						<span>7. Keperluan</span><br><br><br>
						<span>8. Alasan mendaftar / pindah pada sekolah tersebut</span>
						<span>9. Yang bersangkutan memiliki</span>
						<span>10. Keterangan</span>
					</div>
					<div id="separator">
						<span>:</span>
						<span>:</span>
						<span>:</span>
						<span>:</span>
						<span>:</span>
						<span>:</span>
						<span>:</span><br><br><br>
						<span>:</span>
						<span>:</span>
						<span>:</span>
					</div>
					<div id="isiData">
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</span>
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum</span>
						<span>Lorem Ipsum</span><br>
					</div>
				</div>
				<p class="keterangan">Demikian Surat Keterangan ini dikeluarkan untuk dapat dipergunakan sebagaimana mestinya.</p>
				<div id="ttd">
					<p class="ketTtd">Kebumen, XX September 2017 a.n. Kepala Dinas Pendidikan Kabupaten Kebumen<br>
					Sekretaris,
					</p><br><br>
					<h4><u>Drs. H. SUDIRMAN</u></h4>
					<p class="ketTtd">Pembina<br>NIP. 19620113 199003 1 003
					</p>
				</div>
				<?php
				//mulai proses tambah data
				//cek dahulu, jika tombol tambah di klik
				if(isset($_POST['Submit'])){
					//inlcude atau memasukkan file koneksi ke database
					include('koneksi.php');
					date_default_timezone_set('Asia/Jakarta');
					$query = mysql_query("select * from tb_pindah") or die(mysql_error());
					if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
							//jika data kosong, maka akan menampilkan row kosong
							echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
					}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
							//jika data tidak kosong, maka akan melakukan perulangan while
							$no = 1;	//membuat variabel $no untuk membuat nomor urut
							while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
								//menampilkan row dengan data di database
								echo '<tr>';
									echo '<td bgcolor="#FFFFFF">'.$data['nama'].'</td>';	//menampilkan data nama dari database
									echo '<td  bgcolor="#FFFFFF"> '.$data['nisn'].'</a></td>';
									echo '<td align="center"  bgcolor="#FFFFFF">'.$data['asal'].'</td>';
									echo '<td align="center"  bgcolor="#FFFFFF">'.$data['kelas'].'</td>';
									echo '<td align="center"  bgcolor="#FFFFFF">'.$data['keperluan'].'</td>';
								$no++;	//menambah jumlah nomor urut setiap row	
							}
								
					}
				}
				?>
		</div>
		</center>
	</body>
</html>