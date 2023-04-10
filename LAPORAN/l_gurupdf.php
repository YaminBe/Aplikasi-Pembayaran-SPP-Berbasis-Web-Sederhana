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




<center> 
<h3>
 <br>
PEMERINTAH KABUPATEN PASAMAN BARAT <br> DINAS PENDIDIKAN <br>LAPORAN DATA GURU <br> SMAN I LEMBAH MELINTANG</h3>
</center>

<table cellspacing="0" cellpadding="4" width="100%" border="1" style="border-collapse: collapse;">
	<thead>
		<tr height="60">
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
			<td><?php echo $no++; ?>. </td>
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
<br> <br>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<p>
				Ujunggading, <?php echo date (" d F Y") ?><br/>
			Operator, </p>
			<br/>
			<br/>
			<p>__________________________________</p>
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