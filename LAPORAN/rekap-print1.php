

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rekapitulasi Kas</title>
    <style>
    body{
        font-family: "Arial Rounded MT Bold", "Helvetica Rounded", Arial, sans-serif;
    }
    </style>
</head>
<body>
<h3>SEKOLAH MENENGAH ATAS NEGERI I LEMBAH MELINTANG <br> LAPORAN REKAPITULASI KAS SISWA</h3>
<hr>
<table cellpadding="4" cellspacing="1" border="2" width="100%" style="border-collapse: collapse;">
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
        include '../koneksi.php';
        $no = 1;
        $sql = $konek->query("select * from db_kas");
        while ($data=$sql->fetch_assoc()) {        
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

    <table width="100%">
            <!--    <a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
              <tr>
                <td align="right" colspan="6" rowspan="" headers="">
                    <p>Ujunggading, <?php echo date (" d F Y") ?>  <br> <br>
                    Operator </p> <br> <br>
                    <p><br>
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

