



<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"> <span class="fa fa-print"></span> Laporan</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<strong><span class="fa fa-file"></span> LAPORAN PEMBAYARAN SPP</strong>
					<hr>
<div class="col-md-3">
	<form method="GET" action="laporan_perbulan.php" class="form-inline">
	<div class="form-group">
	<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
	<div class="input-group">
		<select name="bulan" class="form-control">
			<option value="" selected>- Pilih Bulan -</option>
			<?php
			$sqlKelas=mysqli_query($konek, "SELECT * FROM spp GROUP BY bulan ASC");
			while($k=mysqli_fetch_array($sqlKelas)){
			echo "<option value='$k[bulan]'>$k[bulan]</option>";
			}
			?>
		</select>
	</div>
	</div>
	<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> Cari</button>
	</form>		

</div><!--col-md-3 -->
<div class="col-md-3">
	<form method="GET" action="laporan_perkelas.php" class="form-inline">
	<div class="form-group">
	<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
	<div class="input-group">
		<select name="kelas" class="form-control">
			<option value="" selected>- Pilih Kelas -</option>
			<?php
			$sqlKelas=mysqli_query($konek, "SELECT * FROM siswa ORDER BY idsiswa ASC");
			while($k=mysqli_fetch_array($sqlKelas)){
			echo "<option value='$k[kelas]'>$k[kelas]</option>";
			}
			?>
			</select>
	</div>
	</div>
	<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> Cari</button>
	</form>		

</div>

<div class="col-md-6" style="border-left: 2px solid;">
<form method="GET" action="laporan_perbulan-kelas.php" class="form-inline">
<div class="form-group">
<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
<div class="input-group">

		<select name="bulan" class="form-control">
		<option value="" selected>- Pilih Bulan -</option>
		<?php
		$sqlKelas=mysqli_query($konek, "SELECT * FROM spp GROUP BY bulan ASC");
		while($k=mysqli_fetch_array($sqlKelas)){
		echo "<option value='$k[bulan]'>$k[bulan]</option>";
		}
		?>
		</select>
<div class="input-group-addon">&</div>
			<select name="kelas" class="form-control">
			<option value="" selected>- Pilih Kelas -</option>
			<?php
			$sqlKelas=mysqli_query($konek, "SELECT * FROM siswa ORDER BY idsiswa ASC");
			while($k=mysqli_fetch_array($sqlKelas)){
			echo "<option value='$k[kelas]'>$k[kelas]</option>";
			}
			?>
			</select>
</div>
</div>
<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> Cari</button>
</form>	
	
</div>

<br> 
<hr>
<strong><span class="fa fa-th-large"></span> DAFTAR LAPORAN PEMBAYARAN SPP</strong>
<div class="pull-right">

<a target="_blank" href="LAPORAN/perbulanpdf-1.php?bulan=<?php echo $_GET['bulan'];?>" class="btn btn-warning"> <span class="fa fa-print"></span> Cetak Semua Data PDF </a>

<!-- 	 <a target="_blank" href="LAPORAN/perbulanpdf.php?bulan=<?php echo $_GET['bulan'];?>&kelas=<?php echo $_GET['kelas'];?> " class="btn btn-default"> <span class="fa fa-print"></span> Cetak Perkelas </a>

	 <a target="_blank" href="LAPORAN/perbulanpdf.php?bulan=<?php echo $_GET['bulan'];?>&kelas=<?php echo $_GET['kelas'];?> " class="btn btn-default"> <span class="fa fa-print"></span> Perbulan & Kelas Cetak PDF </a> -->
	 <hr>
	
</div>
 <br>
 <br>
					
					<table class="table table-striped table-condensed table-bordered table-responsive">
						<thead>
							<tr>
								<th>No.</th>
								<th>NIS</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
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
$total=0;
$sql_Bayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
 FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
 WHERE bulan='$_GET[bulan]'") or die(mysqli_error($konek)) ;
while ($d = mysqli_fetch_array($sql_Bayar)) {
?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['nis']; ?> </td>
								<td><?php echo $d['namasiswa']; ?> </td>
								<td><?php echo $d['kelas']; ?> </td>
								<td><?php echo $d['nobayar']; ?> </td>
								<td><?php echo $d['bulan']; ?> </td>
								<td>
									<?php echo number_format( $d['jumlah']).",-";?>
									<!-- <?php echo $d['jumlah']; ?>  --></td>
								<td>		<?php
									if ($d['ket']=='LUNAS') {
										echo "LUNAS"; 
									}else{
										echo "<em><b style='color:red;'>Belum Dibayar</b></em>";
									}
									 
									 ?> </td>								
								<!-- <td>
									<a href="" class="btn btn-warning"> <span class="fa fa-print"></span> </a>
								</td> -->
							</tr>
							<?php 
							$total +=$d['jumlah'];

							}

							 ?>
							 <tr>
							 	<td colspan="6" align="right"> Jumlah Total </td>
							 	<td style="background-color: green; color: white;>"><b style="font-size: 15px;">
							 		<?php echo "Rp.".number_format( $total).",-"; ?>
							 	</b></td>
							 	<td></td>
							 </tr>
						</tbody>
			</table>

						
					</div>
					
				</div>
			</div>


<?php include 'footer.php'; ?>
