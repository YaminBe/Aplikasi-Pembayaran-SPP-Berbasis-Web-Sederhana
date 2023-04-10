<?php include "header.php" ?>
<div id="page-wrapper">
<div class="main-page">
<h3 class="title1">  <span class="fa fa-folder-o"></span> Kas Siswa <small>/ Kas Keluar</small> </h3>
<hr style="border: 1px solid #f50057;">
<div class="blank-page widget-shadow scroll" id="style-2 div1">
    <div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-folder-o"></span> Daftar Kas Keluar</h3>
</div>
<div class="panel-body">

<div class="table-responsive">
<table class="table table-striped table-bordered table-hover data">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>tanggal</th>
            <th>keterangan</th>
            <th>jumlah</th>
    </thead>
    <tbody>

        <?php 
            
            $no = 1;
            $total=0;
            $sql = $konek->query("select * from db_kas where jenis = 'keluar' ");
            while ($data=$sql->fetch_assoc()) {
                # code...
            
        ?>
        <tr class="odd gradeX">
            <td><?php echo $no++; ?>.</td>
            <td><?php echo $data['namasiswa'];?></td>
            <td><?php echo $data['kelas'];?></td>
            <td><?php echo date('d F Y', strtotime( $data['tgl']));?></td>
            <td><?php echo $data['keterangan'];?></td>
            <td align="right"><?php echo number_format( $data['keluar']).",-";?></td>
        </tr>
        <?php

        $total=$total+$data['keluar'];
    }
    ?>
    </tbody>
    <tr>
        <th colspan="5" style="text-align: center;">Total Kas Keluar</th>
        <th style="text-align: center;"><?php echo "Rp.".number_format( $total).",-"; ?></th>
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