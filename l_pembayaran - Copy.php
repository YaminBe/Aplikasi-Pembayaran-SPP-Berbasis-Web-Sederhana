<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"> <span class="fa fa-print"></span> Laporan</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
						<strong><span class="fa fa-file"></span> LAPORAN PEMBAYARAN SPP</strong> <br> <br>
						<table class="table">
								<tr>
									<td>Laporan Per Periode</td>
									<td>:</td>
									<td>
						<form method="GET" action="pembayaran.php" class="form-inline">
						<div class="form-group">
						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
						<div class="input-group">
						<div class="input-group-addon">Mulai Tanggal</div>
						<input type="date" class="form-control" name="tgl1" value="<?php echo date (' d F Y') ?>"/>
						<div class="input-group-addon"> Sampai Tanggal</div>
						<input type="date" class="form-control" name="tgl2" value="<?php echo date('Y-m-d'); ?> ">
						</div>
						</div>
						<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> Tampilkan</button>
						</form>	
									</td>
								</tr>

								<tr>
									<td>Laporan Per Bulan</td>
									<td>:</td>
									<td>
										
										<form method="GET" action="laporan_perbulan.php" class="form-inline">
						<div class="form-group">
						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
						<div class="input-group">
						<div class="input-group-addon">Bulan</div>
								<select name="bulan" class="form-control">
								<option value="" selected>- Pilih Bulan -</option>
								<?php
								$sqlKelas=mysqli_query($konek, "SELECT * FROM spp ORDER BY idspp ASC");
								while($k=mysqli_fetch_array($sqlKelas)){
								echo "<option value='$k[bulan]'>$k[bulan]</option>";
								}
								?>
								</select>
						<div class="input-group-addon"> Kelas</div>
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
						<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> Tampilkan</button>
						</form>	
										
									</td>
								</tr>
							<!-- 	<tr>
									<td>Laporan Per Kelas</td>
									<td>:</td>
									<td>
												<form method="GET" action="pembayaran.php" class="form-inline">
					  <div class="form-group">
					<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
					<div class="input-group">
					<div class="input-group-addon">Mulai Tanggal</div>
					<input type="date" class="form-control" name="tgl1" value="<?php echo date (' d F Y') ?>"/>
					<div class="input-group-addon"> Sampai Tanggal</div>
					<input type="date" class="form-control" name="tgl2" value="<?php echo date('Y-m-d'); ?> ">
					</div>
					</div>
					<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> Tampilkan</button>
					</form>		
										
									</td>
								</tr> -->
						</table>


<table class="table table-striped">
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
include '../koneksi.php';
$no=1;
$total=0;
$sql_Bayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
 FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa WHERE ket='LUNAS'
") or die(mysqli_error($konek)) ;
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
								<td><?php echo $d['ket']; ?> </td>								
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
							 	<td><b style="font-size: 15px;">
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