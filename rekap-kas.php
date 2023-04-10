<?php include "header.php" ?>
<div id="page-wrapper">
<div class="main-page">
<h3 class="title1">  <span class="fa fa-folder-o"></span> Rekapitulasi <small>/ Kas Siswa</small> </h3>
<hr style="border: 1px solid #f50057;">
<div class="blank-page widget-shadow scroll" id="style-2 div1">
    <div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-folder-o"></span> Rekapitulasi Kas Siswa</h3>
</div>
<div class="panel-body">



<div class="table-responsive">
<table class="table table-striped table-bordered table-hover data">
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
        $sql = $konek->query("select * from db_kas");
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
    <th colspan="5" style="text-align: center;font-size: 20px">Total Kas Masuk</th>
    <th colspan="2" style="text-align: center;font-size: 20px"><?php echo "Rp.".number_format( $total).",-"; ?></th>
</tr>
<tr>
    <th colspan="5" style="text-align: center;font-size: 20px">Total Kas Keluar</th>
    <th colspan="2" style="text-align: center;font-size: 20px"><?php echo "Rp.".number_format( $totalk).",-"; ?></th>
</tr>
<tr>
    <th colspan="5" style="text-align: center;font-size: 20px">Total Saldo Akhir</th>
    <th colspan="2" style="text-align: center;font-size: 20px"><?php echo "Rp.".number_format( $saldo).",-"; ?></th>
</tr>
</table>
</div>
</div>
</div>
  </div>
    </div>
     </div>
    </div>






<?php include "footer.php" ?>