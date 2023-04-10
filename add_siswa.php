<?php include 'header.php'; ?>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
						<h3 class="title1">  <span class="fa fa-plus-circle"></span> Add Data <small>/ Input Siswa</small> </h3>
				<hr style="border: 1px solid #f50057;">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4> <span class="fa fa-edit"></span> Form Input Siwa</h4>
						</div>
						<div class="form-body">
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
								 <label for="Username">NIS</label> 
								 <input type="text" name="nis" class="form-control" id="Username" placeholder="NIS">
								  </div>
								<div class="form-group">
								 <label for="Nama Siswa">Nama Siswa</label>
								  <input type="text" name="namasiswa" class="form-control" id="Nama Siswa" placeholder="Nama Siswa"> </div>
								  	<div class="form-group">
								 <label for="Nama">Kelas Siswa</label> 
									<select name="kelas" class="form-control">
									<option value="" selected>- Pilih Kelas -</option>
									<?php
									$sqlKelas = mysqli_query($konek, "select * from walikelas order by kelas ASC");
									while($k=mysqli_fetch_array($sqlKelas)){
									?>
									<option value="<?php echo $k['kelas']; ?>"><?php echo $k['kelas']; ?></option>
									<?php
									}
									?>
									</select>
								  </div>
								  <div class="form-group">
								 <label for="Nama Siswa">Tahun Ajaran</label>
								  <input type="text" class="form-control" name="tahunajaran" value="2017/2018" readonly />
								</div>
								  <div class="form-group">
								 <label for="Nama Siswa">Biaya SPP</label>
								  <input class="form-control" type="text" name="biaya" value="60000" readonly />
								   </div>
								     <div class="form-group">
								 <label for="Nama Siswa">Jatuh Tempo</label>
								  <input class="form-control" type="text" name="jatuhtempo" value="2018-01-25" readonly />
								   </div>


								<div class="form-group">
								 <label for="foto">File Foto</label>
								  <input name="foto" type="file" id="foto"> <!-- <p class="help-block">FiLE TYPE : jpg,PNG</p> -->
								   </div>
								<input type="submit" name="simpan" class="btn btn-warning" value="Simpan">
							</form> 

							<!-- simpan data -->
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//variabel untuk menampung inputan dari form
		$nis 	= $_POST['nis'];
		$nama 	= $_POST['namasiswa'];
		$kelas 	= $_POST['kelas'];
		$tahun 	= $_POST['tahunajaran'];
		$biaya 	= $_POST['biaya'];
		$awaltempo = $_POST['jatuhtempo'];

		$filename=$_FILES['foto']['name'];
		$tmp_file=$_FILES['foto']['tmp_name'];
		$move=move_uploaded_file($tmp_file,'images/'.$filename);


		// Membuat Array untuk menampung bulan bahasa indonesia
		$bulanIndo = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember'
		);


		//proses simpan
		if($nis=='' || $nama=='' || $kelas==''){
			echo "Form belum lengkap...";
		}else{
			$simpan = mysqli_query($konek, "insert into siswa(nis,namasiswa,kelas,tahunajaran,biaya,foto)
					values('$nis','$nama','$kelas','$tahun','$biaya','$filename')");
			if(!$simpan){
				echo "Penyimpanan data gagal..";
			}else{
				//ambil data id siswa terakhir
				$ds=mysqli_fetch_array(mysqli_query($konek, "SELECT idsiswa FROM siswa ORDER BY idsiswa DESC LIMIT 1"));
				$idsiswa = $ds['idsiswa'];

				//membuat tagihan (12 bulan dimulai dari Juli 2017 dan menyimpan tagihan di tabel spp
				for($i=0; $i<12; $i++){
					//membuat tanggal jatuh tempo nya setiap tanggal 10
					$jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));

					$bulan = $bulanIndo[date('m', strtotime($jatuhtempo))]." ".date('Y',strtotime($jatuhtempo));

					mysqli_query($konek, "INSERT INTO spp(idsiswa,jatuhtempo,bulan,jumlah)
								values('$idsiswa','$jatuhtempo','$bulan','$biaya')");
				}

				echo"<script>alert('Data Berhasil Tersimpan !!');window.location='data_siswa.php';</script>";
			}
		}

	}
?>

</div>
</div>
</div>
</div>
</div>



<?php include 'footer.php'; ?>