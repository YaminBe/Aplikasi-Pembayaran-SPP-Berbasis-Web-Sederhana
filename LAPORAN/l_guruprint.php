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
			<th>Nama Guru</th>
			<th>Mata Pelajaran</th>
			<th>Jabatan</th>
			<th>Foto</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$no=1;
		$sql_User = mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC") or die(mysqli_error($konek)) ;
		while ($d = mysqli_fetch_array($sql_User)) {
		?>
		<tr>
			<td align="center"><?php echo $no++; ?>. </td>
			<td><?php echo $d['namaguru']; ?> </td>
			<td><?php echo $d['mapel']; ?> </td>
			<td><?php echo $d['Jabatan']; ?> </td>
			<td align="center">
				<img src="../images/<?php echo $d['foto']; ?>" width="50" height="50" style="border-radius: 100%; ">
			</td>
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
			<p>__________________________________</p>
		</td>
	</tr>
</table>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

</body>
</html>