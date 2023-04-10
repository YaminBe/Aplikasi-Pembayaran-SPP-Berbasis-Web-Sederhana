<?php include "header.php"; ?>

<?php
$sqlEdit = mysqli_query($konek, "SELECT * FROM walikelas WHERE kelas='$_GET[kls]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<div id="page-wrapper">
	<div class="main-page">
		<h3 class="title1">  <span class="fa fa-edit"></span> Edit Data <small>/ Data Wali Kelas</small> </h3>
				<hr style="border: 1px solid #f50057;">
					<div class="sign-up-row widget-shadow"><!-- 
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title" style="background-color: #212121;">
							<h4 style="color: silver;"><span class="fa fa-edit"></span> Form Input Data Guru </h4>
						</div> -->
						<h3> <span class="fa fa-edit"></span> Form Edit Walikelas</h3>
						<hr style="border: 1px dashed;">
						<div class="form-body">
							<form action="" method="post">
								
								<div class="form-group">
								 <label for="Nama Siswa">Kelas</label>
								  <input type="text" name="kelas" class="form-control" id="Nama Siswa" value="<?php echo $e['kelas']; ?>">
								</div>
								  	<div class="form-group">
								 <label for="Nama">Pilih Guru / Wali Kelas</label> 
									<select name="guru" class="form-control">
								<?php
					$sqlGuru=mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
					while($g=mysqli_fetch_array($sqlGuru)){
						if($g['idguru'] == $e['idguru']){
							$selected = "selected";
						}else{
							$selected = "";
						}
						
						echo "<option value='$g[idguru]' $selected>$g[namaguru]</option>";
					}
					?>
									</select>
								  </div>
								<button type="submit" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
							</form> 

<!-- untuk memproses form -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$kelas = $_POST['kelas'];
	$guru = $_POST['guru'];
	
	if($kelas=='' || $guru==''){
		echo "Form belum lengkap!!!";		
	}else{
		//update data
		$update = mysqli_query($konek, "UPDATE walikelas SET idguru='$guru' WHERE kelas='$kelas'");
		
		if(!$update){
			echo "Update data gagal!!!";
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


<?php include "footer.php"; ?>