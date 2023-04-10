<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		body{
			font-size: 20px;
			font-family: Consolas;
		}
	</style>
</head>
<body>
	<?php include 'koneksi.php'; ?>
<?php
$id= $_GET['id'];
$sqlEdit = mysqli_query($konek, "SELECT * FROM siswa WHERE nis='$_GET[nis]'");
$ds=mysqli_fetch_array($sqlEdit);
?>
<center>
	<img src="LAPORAN/LOGO.jpg" width="100"><h2>LAPORAN TAGIHAN SPP SISWA <br>SMAN I LEMBAH MELINTANG  <br>TAHUN AJARAN <?php echo $ds['tahunajaran']; ?> </h2></center>
<hr>
<p><h3>Data Siswa</h3> </p>
   <table style="border-collapse: collapse;" cellpadding="4">
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><?php echo $ds['nis']; ?></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo $ds['namasiswa']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $ds['kelas']; ?></td>
	</tr>
	<tr>
		<td>Tahun Ajaran</td>
		<td>:</td>
		<td><?php echo $ds['tahunajaran']; ?></td>
	</tr>
</table>
<p><h3>Tagihan SPP Siswa</h3> </p>
<hr>
<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="4">
<tdead>
		<tr style="background-color: #E9E9E9; height: 40px;">
		<th>No</th>
		<th>Bulan</th>
		<th>Jatuh Tempo</th>
		<th>No. Bayar</th>
		<th>Tgl. Bayar</th>
		<th>Jumlah</th>
		<th>Keterangan</th>	
	
	</tr>
</tdead>
	<tbody>
		<?php 
		$no=1;
		$query = "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
 FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
 WHERE nis='$_GET[nis]'";
		$sql= mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
		while ($data = mysqli_fetch_array($sql)) { ?>
		<tr>
			<td><?php echo $no++ ?>.</td>
			<td><?php echo $data['bulan'] ?></td>
			<td><?php echo $data['jatuhtempo'] ?></td>
			<td><?php
			if ($data['nobayar']=='') {
				echo "<b>-------------</b>";
			}else{
				echo "$data[nobayar]";
			}

			  ?></td>
			<td>
				<?php
				if ($data['tglbayar']=='') {
					echo "---------------";
				}else{
					echo $data['tglbayar'] ;
				}
			 ?>
			 	
			 </td>
			<td>Rp.<?php echo number_format($data['jumlah']) ?></td>
			<td>
				<?php
				if ($data['ket']=='LUNAS') {
				echo "<b>LUNAS</b>";
				}else{
					echo "<p style='color:red;'>Belum Dibayar</p>";
				}
				?>
			 	
			 </td>
			
			</tr>
		<?php
		 } ?>
	</tbody>
</table>

				<br>
					<table width="100%">
			<!-- 	<a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
			  <tr>
			  	<td align="right" colspan="6" rowspan="" headers="">
			  		<p>Ujunggading, <?php echo date (" d F Y") ?> <br> <br>
			  		Operator </p> <br> <br>
			  		<p>______________________</p>
			  	</td>
			  </tr>
			</table>
	
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?> 