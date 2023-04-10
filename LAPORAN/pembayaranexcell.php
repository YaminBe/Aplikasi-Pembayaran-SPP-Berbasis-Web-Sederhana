
<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN PEMBAYARAN SPP.xls");?>
	<h3>LAPORAN DATA PEMBAYARAN UANG SPP <br>SMAN I LEMBAH MELINTANG </h3> <hr>
	<p>
		Tanggal :<?php echo $_GET['tgl1']." - ". $_GET['tgl1']; ?>
	</p>
<table border="2" width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse;">
<thead>
	<tr height="40" style="background-color: dodgerblue; ">
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
 FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
 WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' ORDER BY nobayar ASC") or die(mysqli_error($konek)) ;
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
