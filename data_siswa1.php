<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"> <span class="fa fa-gear"></span> View Data</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<a href="add_siswa.php" class="btn btn-warning pull-right"> <span class="fa fa-plus"></span> Tambah Data Siswa </a>
					<table class="table table-striped">
						<caption style="font-size: 19px; color: black;"><span class="fa fa-th-large"></span> Daftar Data Siswa</caption>
						<thead>
							<tr>
								<th>No.</th>
								<th>NIS</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th>Tahun Ajaran</th>
								<th>Biaya</th>
								<th>Foto</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no=1;
							$sql_User = mysqli_query($konek, "SELECT * FROM siswa") or die(mysqli_error($konek)) ;
							while ($d = mysqli_fetch_array($sql_User)) {
							?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['nis']; ?> </td>
								<td><?php echo $d['namasiswa']; ?> </td>
								<td><?php echo $d['kelas']; ?> </td>
								<td><?php echo $d['tahunajaran']; ?> </td>
								<td><?php echo $d['biaya']; ?> </td>
								<td>
									<img src="images/<?php echo $d['foto']; ?>" width="50" height="50" style="border: 1px solid; border-radius: 100%; ">
								</td>
								<td>
									<a href="edit_siswa.php?id=<?php echo $d['idsiswa']; ?> " class="btn btn-primary"> <span class="fa fa-edit"></span> </a>
									<a href="hapus_siswa.php?id=<?php echo $d['idsiswa']; ?> " class="btn btn-danger"> <span class="fa fa-times"></span> </a>
								</td>
							</tr>
							<?php 
							}

							 ?>
						</tbody>
					</table>



					</div>
				</div>
			</div>

<?php include 'footer.php'; ?>