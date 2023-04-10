<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
					<h3 class="title1">  <span class="fa fa-print"></span> Laporan <small>/ Laporan Data Guru</small> </h3>
<hr style="border: 1px solid #f50057;">
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					
					<table class="table table-striped table-condensed table-bordered table-responsive data">
						<caption style="font-size: 19px; color: black;"><span class="fa fa-file"></span> LAPORAN DATA GURU</caption>
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Guru</th>
								<th>Mata Pelajaran</th>
								<th>Jabatan</th>
								<th>Foto</th>
								<!-- <th>Opsi</th> -->
							</tr>
						</thead>
						<tbody>
							<?php 
							$no=1;
							$sql_User = mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC") or die(mysqli_error($konek)) ;
							while ($d = mysqli_fetch_array($sql_User)) {
							?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['namaguru']; ?> </td>
								<td><?php echo $d['mapel']; ?> </td>
								<td><?php echo $d['Jabatan']; ?> </td>
								<td>
									<img src="images/<?php echo $d['foto']; ?>" width="50" height="50" style="border: 1px solid; border-radius: 100%; ">
								</td>
								<!-- <td>
									<a href="" class="btn btn-warning"> <span class="fa fa-print"></span> </a>
								</td> -->
							</tr>
							<?php 
							}

							 ?>
						</tbody>
					</table>
					<a target="_blank" href="LAPORAN/l_guruprint.php" class="btn btn-warning"> <span class="fa fa-print"></span> Cetak </a>
					<a target="_blank" href="LAPORAN/l_guruexell.php" class="btn btn-warning"> <span class="fa fa-print"></span> Export Ke Excell </a>
					<a target="_blank" href="LAPORAN/l_gurupdf.php" class="btn btn-warning"> <span class="fa fa-print"></span> Cetak PDF </a>

					</div>
					
				</div>
			</div>


<?php include 'footer.php'; ?>