
<h3 class="title1">  <span class="fa fa-folder-o"></span> Laporan Rekapitulasi <small>/ <?php echo $data['kelas']; ?> </small> </h3>
<hr style="border: 1px solid #f50057;">
<div class="blank-page widget-shadow scroll" id="style-2 div1">

<h3><span class="fa fa-file"></span> <b>Laporan Rekapitulasi</b>
    <div class="pull-right">
    <a href="../LAPORAN/rekap-print.php" target="_blank" class="btn btn-default" title=""> <span class="fa fa-print"></span> Print</a>
    <a href="../LAPORAN/rekap-excel.php" class="btn btn-success" title=""> <span class="fa fa-file"></span> Export Excell</a>
    <a target="_blank" href="../LAPORAN/rekap-PDF.php" class="btn btn-danger" title=""> <span class="fa fa-download"></span> Download PDF</a>        
    </div>
  </h3>
<hr style="border: 1px dashed;">
<div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-folder-o"></span> Rekapitulasi Kas Siswa Kelas [ <?php echo $data['kelas']; ?> ]</h3>
</div>
<div class="panel-body">



<div class="table-responsive">
<table class="table table-condensed table-bordered">
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
</div>
</div>
</div>
  </div>
    </div>




