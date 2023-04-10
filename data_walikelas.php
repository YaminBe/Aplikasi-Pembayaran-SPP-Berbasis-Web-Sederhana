<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
					<h3 class="title1">  <span class="fa fa-folder-o"></span> View Data <small>/ Data Walikelas</small> </h3>
				<hr style="border: 1px solid #f50057;">
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<a href="add_walikelas.php" class="btn btn-warning"> <span class="fa fa-plus"></span> Tambah Data Walikelas </a> <br> <br>
<div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-th-large"></span> Daftar Data Walikelas</h3>
</div>
<div class="panel-body">
					<table class="table table-striped table-condensed table-hover data">
						<caption style="font-size: 19px; color: black;"></caption>
						<thead>
							<tr>
								<th>No.</th>
								<th>Kelas</th>
								<th>Nama Guru</th>
								<th>Jabatan</th>
								<th>Foto</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no=1;
							$sql = mysqli_query($konek, "SELECT walikelas.kelas,guru.namaguru,guru.jabatan,guru.foto
								FROM walikelas
								INNER JOIN guru ON walikelas.idguru=guru.idguru
								ORDER BY walikelas.kelas ASC");
							while ($d = mysqli_fetch_array($sql)) {
							?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['kelas']; ?> </td>
								<td><?php echo $d['namaguru']; ?> </td>
								<td><?php echo $d['jabatan']; ?> </td>
								<td>
									<img src="images/<?php echo $d['foto']; ?>" width="50" height="50" style="border: 1px solid; border-radius: 100%; ">
								</td>
								<td >
								<a href="edit_walikelas.php?kls=<?php echo $d['kelas'] ?> " class="btn btn-primary"> <span class="fa fa-edit"></span> </a>
								<a href="hapus_walikelas.php?kls=<?php echo $d['kelas'] ?> " class="btn btn-danger"> <span class="fa fa-times"></span> </a>
								
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
		</div>
	</div>


<?php include 'footer.php'; ?>