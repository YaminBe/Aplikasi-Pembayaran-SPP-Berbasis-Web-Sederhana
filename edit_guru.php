<?php include "header.php"; ?>

<?php
$sqlEdit=mysqli_query($konek, "SELECT * FROM guru WHERE idguru='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<div id="page-wrapper">
	<div class="main-page">
		<h3 class="title1">  <span class="fa fa-edit"></span> Edit Data <small>/ Data Guru</small> </h3>
				<hr style="border: 1px solid #f50057;">
					<div class="sign-up-row widget-shadow"><!-- 
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title" style="background-color: #212121;">
							<h4 style="color: silver;"><span class="fa fa-edit"></span> Form Input Data Guru </h4>
						</div> -->
						<h3> <span class="fa fa-edit"></span> Form Edit Data Guru</h3>
						<hr style="border: 1px dashed;">
						<div class="form-body">
							<form action="" method="post" enctype="multipart/form-data">
								
								<div class="form-group">
								 <label for="Nama Siswa">Nama Guru</label>
								  <input type="text" name="namaguru" class="form-control" id="Nama Siswa" value=" <?php echo $e['namaguru'] ?> "> 
								  <input type="hidden" name="idguru" class="form-control" id="Nama Siswa" value=" <?php echo $e['idguru'] ?> "> 
								</div>
									  <div class="form-group">
								 <label for="Username">Username</label>
								  <input type="text" name="user" class="form-control" id="Username" value=" <?php echo $e['username'] ?> ">
								  </div>
								    <div class="form-group">
								 <label for="Password">Password</label>
								  <input type="text" name="pass" class="form-control" id="Password" value=" <?php echo $e['password'] ?> ">
								  </div>
								  	<div class="form-group">
								 <label for="Nama">Mata Pelajaran</label> 
										<select name="mapel" class="form-control">
										<?php
										$sqlKelas = mysqli_query($konek, "select * from mapel order by mapel ASC");
										while($k=mysqli_fetch_array($sqlKelas)){

										if($k['mapel'] == $e['mapel']){
										$selected = "selected";
										}else{
										$selected ="";
										}

										?>
										<option value="<?php echo $k['mapel']; ?>" <?php echo $selected; ?>><?php echo $k['mapel']; ?></option>
										<?php
										}
										?>
										</select>


								  </div>
								   <div class="form-group">
								 <label for="Nama">Jabatan Guru</label> 
									<select name="jabatan" class="form-control">
										<?php
										$sqlKelas = mysqli_query($konek, "select * from jabatan order by jabatan ASC");
										while($k=mysqli_fetch_array($sqlKelas)){

										if($k['jabatan'] == $e['jabatan']){
										$selected = "selected";
										}else{
										$selected ="";
										}

										?>
										<option value="<?php echo $k['jabatan']; ?>" <?php echo $selected; ?>><?php echo $k['jabatan']; ?></option>
										<?php
										}
										?>
										</select>
								  </div>
								<button type="submit" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
							</form> 

							<!-- simpan data -->
							
						</div>
					</div>

		</div>
	</div>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel dari elemen form
	$id		= $_POST['idguru'];
	$nama 	= $_POST['namaguru'];
	$user 	= $_POST['user'];
	$pass 	= $_POST['pass'];
	$mapel 	= $_POST['mapel'];
	$jabatan 	= $_POST['jabatan'];
	
	if($nama==''){
		echo "Form belum lengkap!!!";
	}else{
		//proses edit data guru
		$edit = mysqli_query($konek, "UPDATE guru SET namaguru='$nama',username='$user',password='$pass', mapel='$mapel',jabatan='$jabatan' WHERE idguru='$id'");
		
		if(!$edit){
			echo "Edit data gagal!!";
		}else{
			echo"<script>alert('Data Berhasil Tersimpan !!');window.location='data_guru.php';</script>";
		}
	}
}
?>

<?php include "footer.php"; ?>