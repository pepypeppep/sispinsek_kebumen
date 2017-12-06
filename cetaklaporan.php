<html>
	<head>
		<title>Cetak Laporan</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset-iso-8859-1" />
		<style>
			table, td, tr {
			    text-align: left;
			}

			table {
			    border-collapse: collapse;
			    width: 100%;
			}

			tr, td {
			    padding: 15px;
			}
			td{
				vertical-align: top;
			}
		</style>
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
				<?php
					$id = $_GET['id'];
                    include("koneksi.php");
                    $query = mysqli_query($koneksi,"SELECT * from tb_pindah where id=$id");
                    while($data = mysqli_fetch_array($query)){?>
					<table>
						<tr>
							<td>1. Nama</td>
							<td> : </td>
							<td><?php echo $data['nama']; ?></td>
						</tr>
						<tr>
							<td>2. Tempat dan tanggal lahir</td>
							<td> : </td>
							<td><?php echo $data['ttl']; ?></td>
						</tr>
						<tr>
							<td>3. Nomor Induk/ NISN</td>
							<td> : </td>
							<td><?php echo $data['nisn']; ?></td>
						</tr>
						<tr>
							<td>4. Asal Sekolah</td>
							<td> : </td>
							<td><?php echo $data['asal']; ?></td>
						</tr>
						<tr>
							<td>5. Kelas</td>
							<td> : </td>
							<td><?php echo $data['kelas']; ?></td>
						</tr>
						<tr>
							<td>6. Nama orang tua</td>
							<td> : </td>
							<td><?php echo $data['ortu']; ?></td>
						</tr>
						<tr>
							<td>7. Keperluan</td>
							<td> : </td>
							<td><?php echo $data['keperluan']; ?></td>
						</tr>
						<tr>
							<td>8. Alasan mendaftar / pindah pada sekolah tersebut</td>
							<td> : </td>
							<td><?php echo $data['alasan']; ?></td>
						</tr>
						<tr>
							<td>9. Yang bersangkutan memiliki</td>
							<td> : </td>
							<td><?php echo $data['memiliki']; ?></td>
						</tr>
						<tr>
							<td>10. Keterangan</td>
							<td> : </td>
							<td><?php echo $data['keterangan']; ?></td>
						</tr>
					</table>
					<?php
					}
					?>
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
		</div>
		</center>
	</body>
</html>