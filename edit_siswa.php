<?php include "header.php"; ?>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
		<h3 class="title1">  <span class="fa fa-edit"></span> Edit Data <small>/ Data Siswa</small> </h3>
				<hr style="border: 1px solid #f50057;">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4> <span class="fa fa-edit"></span> Form Edit Siwa</h4>
						</div>
						<div class="form-body">

<?php
$sqlEdit = mysqli_query($konek, "SELECT * FROM siswa WHERE idsiswa='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>



<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
								 <label for="Username">NIS</label> 
								 <input type="hidden" name='idsiswa' value="<?php echo $e['idsiswa']; ?>" />
								 <input type="text" name="nis" class="form-control" id="Username" value="<?php echo $e['nis']; ?>">
								  </div>
								<div class="form-group">
								 <label for="Nama Siswa">Nama Siswa</label>
								  <input type="text" name="namasiswa" class="form-control" id="Nama Siswa" value="<?php echo $e['namasiswa']; ?>"> </div>
								  	<div class="form-group">
								 <label for="Nama">Kelas Siswa</label> 
									<select name="kelas" class="form-control">
									<?php
					$sqlKelas = mysqli_query($konek, "select * from walikelas order by kelas ASC");
					while($k=mysqli_fetch_array($sqlKelas)){

						if($k['kelas'] == $e['kelas']){
							$selected = "selected";
						}else{
							$selected ="";
						}

						?>
						<option value="<?php echo $k['kelas']; ?>" <?php echo $selected; ?>><?php echo $k['kelas']; ?></option>
						<?php
					}
					?>
									</select>
								  </div>
								  <div class="form-group">
								 <label for="Nama Siswa">Tahun Ajaran</label>
								  <input type="text" value="<?php echo $e['tahunajaran']; ?>" class="form-control" name="tahunajaran" value="2017/2018" readonly />
								</div>
								  <div class="form-group">
								 <label for="Nama Siswa">Biaya SPP</label>
								  <input class="form-control" type="text" name="biaya" value="<?php echo $e['biaya']; ?>"/>
								   </div>
								     <div class="form-group">
								 <label for="Nama Siswa">Jatuh Tempo</label>
								  <input class="form-control" type="text" name="jatuhtempo" value="2018-01-25" readonly />
								   </div>


								<div class="form-group">
							
								<input type="submit" name="simpan" class="btn btn-warning" value="Update">
							</div>
							</form> 


</div>
</div>
</div>
</div>
</div>


<!-- proses edit data -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	//variabel untuk menampung inputan dari form
	$id 	= $_POST['idsiswa'];
	$nis 	= $_POST['nis'];
	$nama 	= $_POST['namasiswa'];
	$kelas 	= $_POST['kelas'];
	$tahun 	= $_POST['tahunajaran'];
	$biaya 	= $_POST['biaya'];

	if($nis=='' || $nama =='' || $kelas==''){
		echo "Form Belum lengkap....";
	}else{
		$update = mysqli_query($konek, "UPDATE siswa SET nis='$nis',
											namasiswa='$nama',
											kelas='$kelas',
											tahunajaran='$tahun',
											biaya='$biaya'
										WHERE idsiswa='$id'");

		if(!$update){
			echo "Update data gagal...";

		}else{
			echo "<script>
			alert('Data siswa Telah diubah !!');
			window.location='data_siswa.php';</script>";
			

		}
	}
}
?>

<?php include "footer.php" ?>