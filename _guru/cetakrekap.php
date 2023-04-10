<?php include '../koneksi.php'; ?>
<?php
if(isset($_GET['jenis'])){
    $sqlSiswa = mysqli_query($konek, "SELECT * FROM db_kas WHERE jenis='$_GET[jenis]' AND kelas='$data[kelas]' ");
    $data=mysqli_fetch_array($sqlSiswa);
    $kelas = $data['jenis'];
?>
<hr>


    <table class="table table-striped table-condensed table-hover data">
                        <caption style="font-size: 19px; color: black;"></caption>
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
    $sql = mysqli_query($konek, "SELECT * FROM siswa WHERE kelas='$ds[kelas]'");
    $no=1;
    while($data=mysqli_fetch_array($sql)){
        echo "<tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data[kode];?></td>
            <td><?php echo $data[tgl];?></td>
            <td><?php echo $data[keterangan];?></td>
            <td><?php echo $data[jenis];?></td>
            <td><?php echo $data[jumlah];?></td>
            <td>
            <?php 
            if ($data[jenis]==keluar) {
            echo  $data[jumlah];
            }

            ?>


            </td>
            
            </tr>";
        $no++;
    }
    ?>
</tbody>
</table>

<?php
}
?>