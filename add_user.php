<?php include 'header.php'; ?>
<div id="page-wrapper">
	<div class="main-page">
		<h3 class="title1"> <span class="fa fa-plus"></span> Tambah Siswa</h3>
		<div class="blank-page widget-shadow scroll" id="style-2 div1">
			<div class="forms">
						<!-- <div class="form-title">
							<h4>Basic Form :</h4>
						</div> -->
						<div class="form-body">
							<form action="proses.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
								 <label for="Username">Username</label> 
								 <input type="text" name="username" class="form-control" id="Username" placeholder="Username">
								  </div>
								<div class="form-group">
								 <label for="exampleInputPassword1">Password</label>
								  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div>
								  	<div class="form-group">
								 <label for="Nama">Nama Lengkap</label> 
								 <input type="text" name="namalengkap" class="form-control" id="Nama" placeholder="Nama Lengkap">
								  </div>

								<div class="form-group">
								 <label for="foto">File Foto</label>
								  <input name="foto" type="file" id="foto"> <!-- <p class="help-block">FiLE TYPE : jpg,PNG</p> -->
								   </div>
								
								<button type="submit" class="btn btn-warning" name="simpan_user"> <span class="fa fa-save"></span> Simpan</button>
							</form> 
						</div>
					</div>



		
		</div>
</div>
</div>

<?php include 'footer.php'; ?>