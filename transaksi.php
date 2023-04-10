<?php include "header.php" ?>
<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"> <span class="fa fa-edit"></span> Transaksi</h3>
				<hr style="border: 1px solid #f50057;">
				<div class="blank-page widget-shadow scroll" id="style-2 div1">

<h3><span class="fa fa-file"></span>  Transaksi Pembayaran SPP</h3>
<p>Pembayaran SPP dilakukan dengan cara mencari tagihan siswa dengan NIS melalui form di Bawah ini, kemudian proses pembayaran !!</p>
 <br>

<!-- <form method="get" action="">
	NIS: <input type="text" name="nis">
	<input type="submit" name="cari" value="Cari Siswa" />
</form> -->

<form class="form-inline" method="get" action="">
  <div class="form-group">
    <label class="sr-only"></label>
    <div class="input-group">
      <div class="input-group-addon"> NIS : </div>
      <input type="text" name="nis" class="form-control" placeholder="Cari Berdasarkan NIS" style="width: 400px;height: 40px; ">
      <!-- <div class="input-group-addon">.00</div> -->
    </div>
  </div>
  <button type="submit" name="cari" class="btn btn-warning"> <span class="fa fa-search"></span> Cari Siswa</button>
</form>



<?php
if(isset($_GET['nis']) && $_GET['nis']!=''){
	$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE nis='$_GET[nis]'");
	$ds=mysqli_fetch_array($sqlSiswa);
	$nis = $ds['nis'];
?>
<br> <br>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3> <span class="fa fa-file"></span> Biodata Siswa</h3>		
	</div>
  <div class="panel-body">
    <div class="col-md-3">
    	<img src="images/<?php echo $ds['foto']; ?>" width="150" height="150" style="border: 2px solid; border-radius: 100%;">
    	
    </div>
      <div class="col-md-9">
    	<table class="table table-striped">
	<tr>
		<th>NIS</th>
		<th>:</th>
		<th><?php echo $ds['nis']; ?></th>
	</tr>
	<tr>
		<th>Nama Siswa</th>
		<th>:</th>
		<th><?php echo $ds['namasiswa']; ?></th>
	</tr>
	<tr>
		<th>Kelas</th>
		<th>:</th>
		<th><?php echo $ds['kelas']; ?></th>
	</tr>
	<tr>
		<th>Tahun Ajaran</th>
		<th>:</th>
		<th><?php echo $ds['tahunajaran']; ?></th>
	</tr>
</table>
    	
    </div>
  </div>
<!--   <div class="panel-footer">Panel footer</div> -->
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3> <span class="fa fa-file"></span> Tagihan SPP Siswa</h3>		
	</div>
  <div class="panel-body">
<table class="table table-striped table-condensed table-hover">
<thead>
		<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Jatuh Tempo</th>
		<th>No. Bayar</th>
		<th>Tgl. Bayar</th>
		<th>Jumlah</th>
		<th>Keterangan</th>
		<th>Bayar</th>
	
	</tr>
</thead>

<tbody>
		<?php
	$sql = mysqli_query($konek, "SELECT * FROM spp WHERE idsiswa='$ds[idsiswa]' ORDER BY jatuhtempo ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[bulan]</td>
			<td>$d[jatuhtempo]</td>
			<td>$d[nobayar]</td>
			<td>$d[tglbayar]</td>
			<td>$d[jumlah]</td>
			<td> <span class='label label-warning' style='font-size:17px;'>$d[ket]</span> </td>
			<td align='center'>";
				if($d['nobayar']==''){
					echo "<a href='proses_transaksi.php?nis=$nis&act=bayar&id=$d[idspp]' class='btn btn-success'><span class='fa fa-edit'></span> Bayar</a>";
				}else{
					echo "
					<a href='proses_transaksi.php?nis=$nis&act=batal&id=$d[idspp]' class='btn btn-danger'><span class='fa fa-times'></span> Batal</a>

					<a href='slip_transaksi.php?nis=$nis&id=$d[idspp]' class='btn btn-default' target='_blank'><span class='fa fa-print'></span> Cetak</a>

					";
				}
			echo "</td>
			
			</tr>";
		$no++;
	}
	?>
</tbody>
</table>

<?php
}

?>
</div>
</div>
</div>



</div>
</div>
</div>


<?php include "footer.php" ?>