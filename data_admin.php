<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"> <span class="fa fa-gear"></span> Pengaturan User</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<div class="pull-right">
						<a href="admin.php" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>
						<a href="add_user.php" class="btn btn-warning"> <span class="fa fa-plus"></span> Tambah User </a>
					</div>					
					<table class="table table-striped table-condensed table-hover">
						<caption style="font-size: 19px; color: black;"><span class="fa fa-th-large"></span> Daftar Data User</caption>
						<thead>
							<tr>
								<th>No.</th>
								<th>Username</th>
								<th>Password</th>
								<th>Nama Lengkap</th>
								<th>Foto</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no=1;
							$sql_User = mysqli_query($konek, "SELECT * FROM admin") or die(mysqli_error($konek)) ;
							while ($d = mysqli_fetch_array($sql_User)) {
							?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $d['username']; ?> </td>
								<td><?php echo $d['password']; ?> </td>
								<td><?php echo $d['namalengkap']; ?> </td>
								<td>
									<img src="images/<?php echo $d['foto']; ?>" width="50" height="50" style="border: 1px solid;border-radius:100%; ">
								</td>
								<td>

<a href="" data-toggle="modal" data-target="#edit<?php echo $d['idadmin']; ?>"><button type="button" class="btn btn-info"  data-toggle="tooltip" data-placement="left" title="Ubah Data">
<i class="fa fa-edit"></i>
</button></a>
<!--- Modal EDIT-->


	<div class="modal fade" id="edit<?php echo $d['idadmin']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
								<form action="" method="post" enctype="multipart/form-data">
								<div class="modal-content">
									<div class="modal-header" style="background-color: #f50057;">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="exampleModalLabel"> <span class="fa fa-edit"></span> Edit Data User</h4>
									</div>
									
									<div class="modal-body">
										
								<div class="form-group">
								 <label for="Username">Username</label> 
								 <input type="hidden" name="idadmin" class="form-control" value="<?php echo $d['idadmin']; ?>"/> 
								 <input type="text" name="username" value="<?php echo $d['username']; ?>" class="form-control" id="Username">
								  </div>
								<div class="form-group">
								 <label for="exampleInputPassword1">Password</label>
								  <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $d['password']; ?>"> </div>
								  	<div class="form-group">
								 <label for="Nama">Nama Lengkap</label> 
								 <input type="text" name="namalengkap" class="form-control" id="Nama" value="<?php echo $d['namalengkap']; ?>" >
								  </div>
									</div>
									<div class="modal-footer" style="background-color:#212121;">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										<input type="submit" value="Simpan" name="update" type="button" class="btn btn-info">
									</div>
									</form>

									<?php 
include 'koneksi.php';
 // Script update data
    if (isset($_REQUEST['update'])) {
         $idadmin = $_REQUEST['idadmin'];  
        $username = $_REQUEST['username']; 
         $password = $_REQUEST['password'];  
         $namalengkap = $_REQUEST['namalengkap'];  

         mysqli_query($konek,"UPDATE admin SET 
                                      username='$username',password='$password',namalengkap='$namalengkap'
                                      WHERE idadmin='$idadmin'") or die(mysqli_error($konek));
          ?>
<script type="text/javascript">
alert(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="data_admin.php";     
</script>
<?php 
}
 ?> 



								</div>
							</div>
						</div>
	







									<a href="hapus_guru.php?id=<?php echo $d['idguru'] ?> " class="btn btn-danger"> <span class="fa fa-times"></span> </a>
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