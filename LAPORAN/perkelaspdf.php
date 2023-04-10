 <?php
 //Define relative patd from tdis script to mPDF
 $nama_file='cetak-deskripsi'; //Beri nama file PDF hasil.
define('_MPDF_PAtd','mpdf60/');
//define("_JPGRAPH_PAtd", '../mpdf60/graph_cache/src/');

//define("_JPGRAPH_PAtd", '../jpgraph/src/'); 
 
include(_MPDF_PAtd . "mpdf.php");
//include(_MPDF_PAtd . "graph.php");

//include(_MPDF_PAtd . "graph_cache/src/");

$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 

$mpdf->useGraphs = true;

?>
<h3 align="center">
	<img src="LOGO.jpg" width="100" style="border-radius: 10px;"> <br>
	LAPORAN DATA PEMBAYARAN UANG SPP <br>SMAN I LEMBAH MELINTANG </h3><hr>
	<p>
		Kelas :<?php echo $_GET['kelas']; ?>
	</p>
<table cellspacing="0" cellpadding="4" width="100%" border="1" style="border-collapse: collapse;">
<thead>
	<tr height="40" style="background-color: dodgerblue; ">
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
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
 WHERE kelas='$_GET[kelas]'") or die(mysqli_error($konek)) ;
while ($d = mysqli_fetch_array($sql_Bayar)) {
?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['nis']; ?> </td>
								<td><?php echo $d['namasiswa']; ?> </td>
								<td><?php echo $d['kelas']; ?> </td>
								<td><?php echo $d['bulan']; ?> </td>
								<td><?php echo number_format( $d['jumlah']).",-";?></td>
								<td><?php
								if ($d['ket']=='LUNAS') {
									echo "<b>LUNAS</b>";
								}else{
									echo "Belum Bayar";
								}
								  ?> </td>
							</tr>
							<?php 

							}

							 ?>
						</tbody>
					</table>
				<br>
					<table width="100%">
			<!-- 	<a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
			  <tr>
			  	<td align="right" colspan="6" rowspan="" headers="">
			  		<p>Ujunggading, <?php echo date (" d F Y") ?> <br> <br>
			  		Operator </p> <br> <br>
			  		<p>______________________</p>
			  	</td>
			  </tr>
			</table>
<?php
$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert tde encode for UTF-8, if you prefer tde ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);	// tde parameter 1 tells tdat tdis is css/style only and no body/html/text
$mpdf->WriteHTML($html,1);
$mpdf->Output($nama_file."-".date("Y/m/d H:i:s").".pdf" ,'I');
exit; 
?>