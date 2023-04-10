<?php include 'header.php'; ?>
<div id="page-wrapper">
	<div class="main-page">
	<h3 class="title1">  <span class="fa  fa-plus-circle"></span> Add Data <small>/ Input Walikelas</small> </h3>
				<hr style="border: 1px solid #f50057;">
					<div class="sign-up-row widget-shadow" style="border-radius: 10px;"><!-- 
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title" style="background-color: #212121;">
							<h4 style="color: silver;"><span class="fa fa-edit"></span> Form Input Data Guru </h4>
						</div> -->
						<h3> <span class="fa fa-edit"></span> Form Input Walikelas</h3>
						<hr style="border: 1px dashed;">
						<div class="form-body">
							<form action="" method="post">
								
								<div class="form-group">
								 <label for="Nama Siswa">Kelas</label>
								 <input type="text" name="kelas" class="form-control" id="Nama Siswa" placeholder="XIA"> 
							<!-- 	  	<select name="kelas" class="form-control">
									<option value="" selected>- Pilih Kelas -</option>
									<?php
									$sqlKelas=mysqli_query($konek, "SELECT * FROM kelas ORDER BY kelas ASC");
									while($k=mysqli_fetch_array($sqlKelas)){
									echo "<option value='$k[kelas]'>$k[kelas]</option>";
									}
									?>
									</select> -->
									 </div>
									 	<?php
									$sqlKelas=mysqli_query($konek, "SELECT * FROM siswa GROUP BY tahunajaran");
									$k=mysqli_fetch_array($sqlKelas)
									?>
									<input type="hidden" name="ta" value="<?php echo $k['tahunajaran'] ?>">




								  	<div class="form-group">
								 <label for="Nama">Pilih Guru / Wali Kelas</label> 
									<select name="guru" class="form-control">
									<option value="" selected>- Pilih Guru -</option>
									<?php
									$sqlGuru=mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
									while($g=mysqli_fetch_array($sqlGuru)){
									echo "<option value='$g[idguru]'>$g[namaguru]</option>";
									}
									?>
									</select>
								  </div>
								<button type="submit" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
							</form> 

							<!-- simpan data -->
							<!-- untuk memproses form -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$kelas = $_POST['kelas'];
	$guru = $_POST['guru'];
	$ta = $_POST['ta'];
	
	if($kelas=='' || $guru==''){
		echo "Form belum lengkap!!!";		
	}else{
		//simpan data
		$simpan = mysqli_query($konek, "INSERT INTO walikelas(kelas,idguru,tahunajaran)
						VALUES ('$kelas','$guru','$ta')") or die(mysqli_error($konek)) ;
		
		if(!$simpan){
			echo "Simpan data gagal!!!";
		}else{
			echo"<script>alert('Data Berhasil Tersimpan !!');window.location='data_walikelas.php';</script>";
		}
	}
}
?>


						</div>
					</div>



		</div>
	</div>


<?php include 'footer.php'; ?>