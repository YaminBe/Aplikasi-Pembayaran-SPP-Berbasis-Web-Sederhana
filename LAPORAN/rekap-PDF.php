<?php

include '../koneksi.php';
session_start();
if (@$_SESSION['guru']) {
?>
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
<?php
// $jml =mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tb_siswa"));
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($konek,"
SELECT * FROM guru p INNER JOIN walikelas b ON p.idguru=b.idguru WHERE p.idguru='$sesi' ") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);

?>

    <?php

// $jml =mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tb_siswa"));
// Query lama
//SELECT * FROM guru p INNER JOIN walikelas b ON p.idguru=b.idguru

$sql = mysqli_query($konek," SELECT db_kas.*,guru.idguru,guru.namaguru, walikelas.kelas,walikelas.tahunajaran,walikelas.idguru
    FROM db_kas INNER JOIN guru ON db_kas.idguru=guru.idguru 
                INNER JOIN walikelas ON guru.idguru=walikelas.idguru WHERE guru.idguru='$sesi'

 ") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);

?>
<h3>SEKOLAH MENENGAH ATAS NEGERI I LEMBAH MELINTANG <br> LAPORAN KAS MASUK</h3>
<table>
        <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><?php echo $data['kelas'];?></td>
    </tr>
    <tr>
        <td>Nama Walikelas</td>
        <td>:</td>
        <td><?php echo $data['namaguru'];?></td>
    </tr>
       <tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td><?php echo $data['tahunajaran'];?></td>
    </tr>
</table>
 <hr>
<table cellspacing="0" cellpadding="4" width="100%" border="1" style="border-collapse: collapse;">
<thead>
    <tr>
        <th>no</th>
        <th>kode</th>
        <th>tanggal</th>
        <th>keterangan</th>
        <th>jenis</th>
        <th>kas masuk</th>
        <th>kas keluar</th>
    </tr>
</thead>
<tbody>

    <?php 
        
        $no = 1;
        $sql = $konek->query("select * from db_kas where kelas='$data[kelas]'");
        while ($data=$sql->fetch_assoc()) {
            # code...
        
    ?>
    <tr class="odd gradeX">
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['kode'];?></td>
        <td><?php echo date('d F Y', strtotime( $data['tgl']));?></td>
        <td><?php echo $data['keterangan'];?></td>
        <td><?php echo $data['jenis'];?></td>
        <td align="right"><?php echo number_format( $data['jumlah']).",-";?></td>
        <td align="right"><?php echo number_format( $data['keluar']).",-";?></td>
    </tr>
    <?php

    $total=$total+$data['jumlah'];
    $totalk=$totalk+$data['keluar'];
    $saldo=$total-$totalk;
}
?>
</tbody>
<tr>
    <th colspan="5" style="text-align: left;font-size: 17px">Total Kas Masuk</th>
    <th colspan="2" style="text-align: left;font-size: 17px"><?php echo "Rp.".number_format( $total).",-"; ?></th>
</tr>
<tr>
    <th colspan="5" style="text-align: left;font-size: 17px">Total Kas Keluar</th>
    <th colspan="2" style="text-align: left;font-size: 17px"><?php echo "Rp.".number_format( $totalk).",-"; ?></th>
</tr>
<tr>
    <th colspan="5" style="text-align: left;font-size: 17px">Total Saldo Akhir</th>
    <th colspan="2" style="text-align: left;font-size: 17px"><?php echo "Rp.".number_format( $saldo).",-"; ?></th>
</tr>
</table>
<?php

include '../koneksi.php';
// $jml =mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tb_siswa"));

$sql = mysqli_query($konek,"
    SELECT db_kas.*,guru.idguru,guru.namaguru, walikelas.kelas,walikelas.idguru
    FROM db_kas INNER JOIN guru ON db_kas.idguru=guru.idguru 
                INNER JOIN walikelas ON guru.idguru=walikelas.idguru WHERE guru.idguru ='$sesi' ") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);

?>
    <table width="100%">
            <!--    <a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
              <tr>
                <td align="right" colspan="6" rowspan="" headers="">
                    <p>Ujunggading, <?php echo date (" d F Y") ?>  <br> <br>
                    Walikelas </p> <br> <br>
                    <p><?php echo $data['namaguru'];?><br>
                    ---------------------------------- </p>
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
$mpdf->WriteHTML($stylesheet,1);    // tde parameter 1 tells tdat tdis is css/style only and no body/html/text
$mpdf->WriteHTML($html,1);
$mpdf->Output($nama_file."-".date("Y/m/d H:i:s").".pdf" ,'I');
exit; 
?>


<?php
} else{
echo "<script> window.location='../login_gru.php';</script>";

}