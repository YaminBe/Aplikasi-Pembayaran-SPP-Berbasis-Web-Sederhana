<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"> <span class="fa fa-print"></span> Laporan</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
						<strong><span class="fa fa-file"></span> LAPORAN PEMBAYARAN SPP</strong> <br> <br>
			<table class="table">
  <tr>
    <td>Laporan Per Periode </td>
    <td>:</td>
    <td>Mulai Tanggal </td>
    <td>
      <form id="form1" method="GET" action="pembayaran.php">
      <label>
        <input type="date" class="form-control" name="tgl1" value="<?php echo date ('Y-m-d') ?>" />
        </label>
    </td>
    <td>Sampai Tanggal </td>
    <td>
      <label>
        <input type="date" class="form-control" name="tgl2" value="<?php echo date('Y-m-d'); ?> "/>
        </label>
      </td>
    <td>
      <label>
        <input type="submit" name="Submit" value="Submit" class="btn btn-danger" />
        </label>
    </td>
  </tr>
  <tr>
    <td>Laporan Per Bulan </td>
    <td>:</td>
    <td>Pilih Bulan </td>
    <td><form id="form3" name="form3" method="post" action="">
      <label>
        <select name="select" class="form-control">
        	<option value="">--Pilih Bulan--</option>}
        	<option value="">1</option>}
        	
        </select>
        </label>
    </form>    </td>
    <td>Pilih Kelas </td>
    <td><form id="form4" name="form4" method="post" action="">
      <label>
        <select name="select2" class="form-control">
        	<option value="">--Pilih Bulan--</option>}
        	<option value="">1</option>}
        </select>
        </label>
    </form>    </td>
    <td><form id="form6" name="form6" method="post" action="">
      <label>
        <input type="submit" name="Submit2" value="Submit" class="btn btn-danger" />
        </label>
    </form>    </td>
  </tr>
</table>
<hr>
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
FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa WHERE ket='LUNAS' ORDER BY nobayar ASC") or die(mysqli_error($konek)) ;
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