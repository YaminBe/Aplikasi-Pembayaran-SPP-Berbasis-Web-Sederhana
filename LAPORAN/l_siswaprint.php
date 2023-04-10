<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DATA GURU</title>
</head>
<style type="text/css" media="screen">
body{
	font-family: arial;
}	
</style>
<body>

<center> 
<h3>
<img src="LOGO.jpg" width="100" style="border-radius: 10px;"> <br>
PEMERINTAH KABUPATEN PASAMAN BARAT <br> DINAS PENDIDIKAN <br>LAPORAN DATA GURU <br> SMAN I LEMBAH MELINTANG</h3>
</center>
<hr style="border: 2px solid;">
<table cellspacing="0" cellpadding="4" width="100%" border="2" style="border-collapse: collapse;">
		<thead>
		<tr height="40">
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tahun Ajaran</th>
		<th>Biaya SPP</th>
		<th>Foto</th>
		<!-- <th>Opsi</th> -->
		</tr>
	</thead>
	<tbody>
<?php 
include '../koneksi.php';
$no=1;
$sql_User = mysqli_query($konek, "SELECT * FROM siswa ORDER BY idsiswa ASC") or die(mysqli_error($konek)) ;
while ($d = mysqli_fetch_array($sql_User)) {
?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['nis']; ?> </td>
								<td><?php echo $d['namasiswa']; ?> </td>
								<td><?php echo $d['kelas']; ?> </td>
								<td><?php echo $d['tahunajaran']; ?> </td>
								<td><?php echo $d['biaya']; ?> </td>
								<td>
									<img src="../images/<?php echo $d['foto']; ?>" width="50" height="50" style="border: 1px solid; border-radius: 100%; ">
								</td>
								<!-- <td>
									<a href="" class="btn btn-warning"> <span class="fa fa-print"></span> </a>
								</td> -->
							</tr>
							<?php 
							}

							 ?>
	</tbody>
</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<p>
				Ujunggading, <?php echo date (" d F Y") ?> <br/>
			Operator, </p>
			<br/>
			<br/>
			<p>_____________________________</p>
		</td>
	</tr>
</table>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

</body>
</html>