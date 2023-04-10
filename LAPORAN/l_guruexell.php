<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN DATA GURU.xls");?>



<h3>LAPORAN DATA GURU</h3>
<hr style="border: 2px solid;">
<table cellspacing="0" cellpadding="4" width="100%" border="2" style="border-collapse: collapse;">
	<thead>
		<tr height="40">
			<th>No.</th>
			<th>Nama Guru</th>
			<th>Mata Pelajaran</th>
			<th>Jabatan</th>
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
		</tr>
		<?php 
		}

		 ?>
	</tbody>
</table>
<table width="100%">
	<tr>
		<td></td>
		<td>
			<p>
				Ujunggading, <?php echo date (" d F Y") ?><br/>
			Operator, </p>
			<br/>
			<br/>
			<p>__________________________________</p>
		</td>
	</tr>
</table>

</body>
</html>