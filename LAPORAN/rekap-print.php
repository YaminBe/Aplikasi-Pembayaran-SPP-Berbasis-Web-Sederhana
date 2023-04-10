<?php

include '../koneksi.php';
session_start();
if (@$_SESSION['guru']) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rekapitulasi Kas Masuk</title>
    <style>
    body{
        font-family: "Arial Rounded MT Bold", "Helvetica Rounded", Arial, sans-serif;
    }
    </style>
</head>
<body>
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

$sql = mysqli_query($konek," SELECT db_kas.*,guru.idguru,guru.namaguru, walikelas.kelas,walikelas.idguru
    FROM db_kas INNER JOIN guru ON db_kas.idguru=guru.idguru 
                INNER JOIN walikelas ON guru.idguru=walikelas.idguru
                 WHERE guru.idguru='$sesi'") or die(mysqli_error($konek));
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
<!--        <tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td><?php echo $data['tahunajaran'];?></td>
    </tr> -->
</table>
 <hr>
<table cellpadding="4" cellspacing="1" border="2" width="100%" style="border-collapse: collapse;">
<thead>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Tanggal</th>
        <th>Keterangan</th>
        <th>Jenis</th>
        <th>Kas masuk</th>
        <th>Kas keluar</th>
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


</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?> 


<?php
} else{
echo "<script> window.location='../login_gru.php';</script>";

}