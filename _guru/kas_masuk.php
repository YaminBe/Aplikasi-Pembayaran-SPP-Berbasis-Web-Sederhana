<h3 class="title1"><span class="fa fa-folder-open-o"></span> Kas Masuk</h3>
<hr style="border: 1px solid #f50057;">
<div class="blank-page widget-shadow scroll" id="style-2 div1">


<!-- 
<a href="tambah_masuk.php" class="btn btn-warning pull-right"> <span class="fa fa-plus"></span> Tambah Data </a> <br> <br> -->

<div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-th-large"></span> <b>Daftar Kas Masuk</b> <b class="pull-right">Kelas : <?php echo $data['kelas']; ?></b> </h3>
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
                                            <th>aksi</th>
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
                                            <td>

                                               <a href="?page=e_kas&id=<?php echo $data['kode']; ?>" class="btn btn-info"><i class="fa fa-edit"></i> </a>

                                                <a onclick="return confirm('anda yakin ingin menghapus data?')" href="?page=d_kas&id=<?php echo $data['kode']; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
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
                     <a href="?page=pembyaran" class="btn btn-warning" title=""> <span class="fa fa-plus"></span> Tambah Data</a>

                 </div>
             </div>

