<?php include "header.php" ?>
<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">  <span class="fa fa-folder-o"></span> View Data <small>/ Data Siswa</small> </h3>
				<hr style="border: 1px solid #f50057;">
				<div class="blank-page widget-shadow scroll" id="style-2 div1">

<!-- <h3><span class="fa fa-file"></span>  Transaksi Pembayaran SPP</h3>
<p>Pembayaran SPP dilakukan dengan cara mencari tagihan siswa dengan NIS melalui form di atas, kemudian proses pembayaran !!</p>
 <br> -->

<!-- <form method="get" action="">
	NIS: <input type="text" name="nis">
	<input type="submit" name="cari" value="Cari Siswa" />
</form> -->

<form class="form-inline" method="get" action="">
  <div class="form-group">
    <label class="sr-only"></label>
    <div class="input-group">
      <div class="input-group-addon"> BERDASARKAN KELAS :</div>
		<select name="kelas" class="form-control" style="width: 200px;">
		<option value="" selected>- Pilih Kelas -</option>
		<?php
		$sqlKelas = mysqli_query($konek, "select * from walikelas order by kelas ASC");
		while($k=mysqli_fetch_array($sqlKelas)){
		?>
		<option value="<?php echo $k['kelas']; ?>"><?php echo $k['kelas']; ?></option>
		<?php
		}
		?>
		</select>
      <!-- <div class="input-group-addon">.00</div> -->
    </div>
  </div>
  <button type="submit" name="cari" class="btn btn-danger"> <span class="fa fa-search"></span> Tampilkan</button>
   <div class="pull-right">
   	<a href="add_siswa.php" class="btn btn-warning"> <span class="fa fa-plus"></span> Tambah Data Siswa</a>

   	
   </div>
</form>



<?php
if(isset($_GET['kelas']) && $_GET['kelas']!=''){
	$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE kelas='$_GET[kelas]'");
	$ds=mysqli_fetch_array($sqlSiswa);
	$kelas = $ds['kelas'];
?>
<br> <br>
<div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-th-large"></span> Daftar Data Siswa <b class="pull-right">Kelas : <?php echo $kelas; ?></b></h3>
</div>
<div class="panel-body">
  	<table class="table table-striped table-condensed table-hover data">
						<caption style="font-size: 19px; color: black;"></caption>
						<thead>
							<tr>
								<th>No.</th>
								<th>NIS</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th>Tahun Ajaran</th>
								<th>Biaya</th>
								<th>Foto</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
	<?php
	$sql = mysqli_query($konek, "SELECT * FROM siswa WHERE kelas='$ds[kelas]' ORDER BY namasiswa ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[nis]</td>
			<td>$d[namasiswa]</td>
			<td>$d[kelas]</td>
			<td>$d[tahunajaran]</td>
			<td>$d[biaya]</td>
			<td>
			<img src='images/$d[foto]' width='50' height='50' style='border: 1px solid; border-radius: 100%;'>
			</td>
			<td>
			<a href='edit_siswa.php?id=$d[idsiswa]' class='btn btn-primary'> <span class='fa fa-edit'></span> </a>
			<a href='hapus_siswa.php?id=$d[idsiswa]'class='btn btn-danger'> <span class='fa fa-times'></span> </a>
			</td>
			
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
<!--  <div class="panel-footer">Panel footer</div> -->
</div>





</div>



</div>
</div>
</div>


<?php include "footer.php" ?>