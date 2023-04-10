<?php include 'header.php'; ?>
<div id="page-wrapper">
	<div class="main-page">
		<h3 class="title1">  <span class="fa  fa-plus-circle"></span> Add Data <small>/ Input Guru</small> </h3>
				<hr style="border: 1px solid #f50057;">
					<div class="sign-up-row widget-shadow" style="border-radius: 10px;"><!-- 
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title" style="background-color: #212121;">
							<h4 style="color: silver;"><span class="fa fa-edit"></span> Form Input Data Guru </h4>
						</div> -->
						<h3> <span class="fa fa-edit"></span> Form Input Data Guru</h3>
						<hr style="border: 1px dashed;">
						<div class="form-body">
							<form action="proses.php" method="post" enctype="multipart/form-data">
								
								<div class="form-group">
								 <label for="Nama Siswa">Nama Guru</label>
								  <input type="text" name="namaguru" class="form-control" id="Nama Siswa" placeholder="Nama Guru"> </div>
								  <div class="form-group">
								 <label for="Username">Username</label>
								  <input type="text" name="user" class="form-control" id="Username" placeholder="Username">
								  </div>
								    <div class="form-group">
								 <label for="Password">Password</label>
								  <input type="text" name="pass" class="form-control" id="Password" placeholder="Password">
								  </div>
								  	<div class="form-group">
								 <label for="Nama">Mata Pelajaran</label> 
									<select name="mapel" class="form-control">
									<option value="" selected>- Pilih Mapel -</option>
									<?php
									$sqlKelas = mysqli_query($konek, "select * from mapel order by mapel ASC");
									while($k=mysqli_fetch_array($sqlKelas)){
									?>
									<option value="<?php echo $k['mapel']; ?>"><?php echo $k['mapel']; ?></option>
									<?php
									}
									?>
									</select>
								  </div>
								   <div class="form-group">
								 <label for="Nama">Jabatan Guru</label> 
									<select name="jabatan" class="form-control">
									<option value="" selected>- Pilih Jabatan -</option>
									<?php
									$sqlKelas = mysqli_query($konek, "select * from jabatan order by jabatan ASC");
									while($k=mysqli_fetch_array($sqlKelas)){
									?>
									<option value="<?php echo $k['jabatan']; ?>"><?php echo $k['jabatan']; ?></option>
									<?php
									}
									?>
									</select>
								  </div>


								<div class="form-group">
								 <label for="foto">File Foto</label>
								  <input name="foto" type="file" id="foto"> <!-- <p class="help-block">FiLE TYPE : jpg,PNG</p> -->
								   </div>
								<button type="submit" name="simpan_guru" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
							</form> 

							<!-- simpan data -->
							
						</div>
					</div>

		</div>
	</div>
</div>



<?php include 'footer.php'; ?>