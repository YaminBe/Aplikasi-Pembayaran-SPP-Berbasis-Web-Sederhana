<h3 class="title1"><span class="fa fa-folder-o"></span> Laporan Kas Masuk</h3>
<hr style="border: 1px solid #f50057;">
<div class="blank-page widget-shadow scroll" id="style-2 div1">


<!-- 
<a href="tambah_masuk.php" class="btn btn-warning pull-right"> <span class="fa fa-plus"></span> Tambah Data </a> <br> <br> -->
<h3><span class="fa fa-file"></span> <b>Laporan Kas Masuk</b>
    <div class="pull-right">
    <a href="../LAPORAN/masuk-print.php" target="_blank" class="btn btn-default" title=""> <span class="fa fa-print"></span> Print</a>
    <a href="../LAPORAN/masuk-excel.php" class="btn btn-success" title=""> <span class="fa fa-file"></span> Export Excell</a>
    <a target="_blank" href="../LAPORAN/masuk-PDF.php" class="btn btn-danger" title=""> <span class="fa fa-download"></span> Download PDF</a>        
    </div>
  </h3>
<hr style="border: 1px dashed;">

<div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-print"></span> <b>Kelas : <?php echo $data['kelas']; ?></b> </h3>
</div>
<div class="panel-body">




<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>tanggal</th>
            <th>keterangan</th>
            <th>jumlah</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            
            $no = 1;
            $total=0;
            $sql = $konek->query("select * from db_kas where kelas='$data[kelas]' and jenis = 'masuk' ");
            while ($data=$sql->fetch_assoc()) {
                # code...
            
        ?>
        <tr class="odd gradeX">
            <td><?php echo $no++; ?>.</td>
            <td><?php echo $data['namasiswa'];?></td>
            <td><?php echo $data['kelas'];?></td>
            <td><?php echo date('d F Y', strtotime( $data['tgl']));?></td>
            <td><?php echo $data['keterangan'];?></td>
            <td align="right"><?php echo number_format( $data['jumlah']).",-";?></td>
         
        </tr>
        <?php

        $total=$total+$data['jumlah'];
    }
    ?>
    </tbody>
    <tr>
        <th colspan="5" style="text-align: center;">Total Kas Masuk</th>
        <th style="text-align: center;"><?php echo "Rp.".number_format( $total).",-"; ?></th>
    </tr>
</table>
</div>



</div>
</div>
</div>
</div>


