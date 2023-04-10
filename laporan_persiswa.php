



<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">  <span class="fa fa-print"></span> Laporan <small>/ Laporan Persiswa</small> </h3>
<hr style="border: 1px solid #f50057;">
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<strong><span class="fa fa-file"></span> LAPORAN PEMBAYARAN SPP</strong>
					<hr>
<div class="col-md-6">
	<form method="GET" action="laporan_persiswa.php" class="form-inline">
	<div class="form-group">
	<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
	<div class="input-group">
 <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS Siswa">
	</div>
	</div>
	<button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> Cari</button>
	</form>		

</div><!--col-md-3 -->


<div class="col-md-6" style="border-left: 2px solid;">
<!-- <form method="GET" action="laporan_perbulan-kelas.php" class="form-inline">
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
</form>	 -->
	
</div>

<br> 
<hr>
<strong><span class="fa fa-th-large"></span>LAPORAN PEMBAYARAN SPP PERSISWA</strong>
<div class="pull-right">

<a target="_blank" href="detail-laporan.php?nis=<?php echo $_GET['nis'];?>" class="btn btn-warning"> <span class="fa fa-print"></span> Cetak Semua Data </a>
	
</div>
 <br>
 <br>
 <hr>
 <?php
$id= $_GET['id'];
$sqlEdit = mysqli_query($konek, "SELECT * FROM siswa WHERE nis='$_GET[nis]'");
$ds=mysqli_fetch_array($sqlEdit);
?>

<h3>Data Siswa</h3>
<hr>
   <table class="table">
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
<h3>Tagihan SPP</h3>
<hr>
	<table class="table table-striped table-condensed table-bordered table-responsive">
		<thead>
			<tr>
				<th>No</th>
				<th>Bulan</th>
				<th>Jatuh Tempo</th>
				<th>No. Bayar</th>
				<th>Tgl. Bayar</th>
				<th>Jumlah</th>
				<th>Keterangan</th>	
			</tr>
		</thead>
		<tbody>
		<?php 
		include 'koneksi.php';
		$no=1;
		$total=0;
		$sql_Bayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
		FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
		WHERE nis='$_GET[nis]'") or die(mysqli_error($konek)) ;
		while ($data = mysqli_fetch_array($sql_Bayar)) {
		?>
			<tr>
				<td><?php echo $no++ ?>.</td>
				<td><?php echo $data['bulan'] ?></td>
				<td><?php echo $data['jatuhtempo'] ?></td>
				<td><?php echo $data['nobayar'] ?></td>
				<td><?php echo $data['tglbayar'] ?></td>
				<td>Rp.<?php echo number_format($data['jumlah']) ?></td>
				<td>
				<?php
				if ($data['ket']=='LUNAS') {
				echo "<b>LUNAS</b>";
				}else{
				echo "<em><b style='color:red;'>Belum Dibayar</b></em>";
				}
				?>

				</td>
			</tr>
		<?php } 
		?>

		</tbody>
	</table>

						
					</div>
					
				</div>
			</div>


<?php include 'footer.php'; ?>




<!-- 


<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"> <span class="fa fa-print"></span> Laporan Persiswa</h3>
				<hr style="border: 1px solid #f50057;">
				<div class="blank-page widget-shadow scroll" id="style-2 div1">					
					<table class="table table-striped table-condensed table-bordered table-responsive data">
						<caption style="font-size: 19px; color: black;"><span class="fa fa-user"></span> DAFTAR DATA SISWA</caption>
						<thead>
							<tr>
								<th>No.</th>
								<th>NIS</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th>Tahun Ajaran</th>
								 <th>Cetak</th>
							</tr>
						</thead>
						<tbody>
							<?php 
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
								<td>
									<a href="detail-laporan.php?id= <?php echo $d['idsiswa']; ?>" target="_blank" class="btn btn-danger"> <span class="fa fa-print"></span> Cetak</a>
								</td> 
							</tr>
							<?php 
							}

							 ?>
						</tbody>
					</table>


					</div>
					
				</div>
			</div>

 -->
