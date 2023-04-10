<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN PEMBAYARAN SPP</title>
	<style type="text/css">
	body{
		font-family: Consolas;
	}
		@media print{
			.no-print{
				display: none;
			}

		}
	</style>
</head>
<body>
<h3>SMAN I LEMBAH MELINTANG<br> SLIP PEMBAYARAN SPP </h3> <hr>
<?php 
include 'koneksi.php';
$sqlSiswa = mysqli_query($konek, " SELECT siswa.*,spp.jatuhtempo,spp.bulan,spp.nobayar,spp.tglbayar,spp.jumlah
 FROM siswa
  INNER JOIN spp ON siswa.idsiswa=spp.idsiswa WHERE nis='$_GET[nis]'");
	$ds=mysqli_fetch_array($sqlSiswa);
 ?>

 <table width="100%">
  <tr>
    <td width="173">Nis</td>
    <td width="18">:</td>
    <td width="689"><?php echo $ds['nis']; ?> </td>
    <td width="431">&nbsp;</td>
   <!--  <td width="161">Pembayaran Bulan </td>
    <td width="18">:</td>
    <td width="335"><?php echo $ds['bulan']; ?></td> -->
  </tr>
  <tr>
    <td>Nama Siswa </td>
    <td>:</td>
    <td><?php echo $ds['namasiswa']; ?> </td>
    <td>&nbsp;</td>
    <td>Tahun Ajaran </td>
    <td>:</td>
    <td><?php echo $ds['tahunajaran']; ?></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?php echo $ds['kelas']; ?></td>
    <td>&nbsp;</td>
    <td>Jumlah Bayar </td>
    <td>:</td>
    <td>Rp.<?php echo number_format( $ds['jumlah']).",-";?></td>
  </tr>
  <tr>
    <td>Tanggal Pembayaran </td>
    <td>:</td>
    <td><?php echo date (" d F Y") ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>




<!-- 
<table>
<tr>
	<td width="100">Nama Siswa</td>
	<td width="4">:</td>
	<td > <?php echo $ds['namasiswa']; ?> </td>
</tr>
<tr>
	<td width="100">NIS</td>
	<td width="4">:</td>
	<td > <?php echo $ds['nis']; ?> </td>
</tr>
<tr>
	<td width="100">Kelas</td>
	<td width="4">:</td>
	<td > <?php echo $ds['kelas']; ?> </td>
</tr>
<tr>
	<td width="100">TA</td>
	<td width="4">:</td>
	<td > <?php echo $ds['tahunajaran']; ?> </td>
</tr>

</table> -->
<hr style="border: 1px dashed;">
	
<table border="2" width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse;">
<thead>
	<tr height="40" style="background-color: silver; ">
		<th>No.</th>
		<th>No.Bayar</th>
		<th>Pembayaran Bulan</th>
		<th>Jumlah</th>
		<th>Keterangan</th>
		<!-- <th>Opsi</th> -->
	</tr>
</thead>
<tbody>
<?php 
include 'koneksi.php';
$no=1;
$sql_Bayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
 FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
 WHERE idspp='$_GET[id]' ") or die(mysqli_error($konek)) ;
while ($d = mysqli_fetch_array($sql_Bayar)) {
?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['nobayar']; ?> </td>
								<td><?php echo $d['bulan']; ?> </td>
								<td>Rp.<?php echo number_format( $d['jumlah']).",-";?></td>
								<td><?php echo $d['ket']; ?> </td>								
							</tr>
							<?php 
						

							}

							 ?>
						</tbody>
					</table>
					<br>

<table width="100%">
  <tr>
    <td>&nbsp;</td>
    <td><p align="right">Ujunggading, <?php echo date (" d F Y") ?></p>
    <p align="right">&nbsp; </p></td>
  </tr>
  <tr>
    <td height="26">Kepala Sekolah </td>
    <td><div align="right">Petugas / Operator </div></td>
  </tr>
  <tr>
    <td height="136">[______________________]</td>
    <td><div align="right">[________________________]</div></td>
  </tr>
</table>




					<!-- 
					
			<table width="100%">
			  <tr>
			  	<td align="right" colspan="6" rowspan="" headers="">
			  		<p>Ujunggading, <?php echo date (" d F Y") ?>  <br> <br>
			  		Operator </p> <br> <br>
			  		<p>______________________</p>
			  	</td>
			  </tr>
			</table> -->
 <?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?> 