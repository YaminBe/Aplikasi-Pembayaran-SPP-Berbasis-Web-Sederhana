<div class=" form-grids row form-grids-right">
	<div class="widget-shadow " data-example-id="basic-forms"> 
		<div class="form-title">
			<h4> <span class="fa fa-file"></span> Pembyaran Uang Kas Siswa</h4>
		</div>
		<div class="form-body">
			<?php 
			$id = $_GET['id'];

			$sqlEdit = mysqli_query($konek,"SELECT * FROM db_Kas WHERE kode='$id' ");
			$d= mysqli_fetch_array($sqlEdit);

			 ?>
<form  action="?page=act" method="post">
<!-- 	<div class="form-group">
		<label>Kode</label>
			
	</div> -->
		<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $d['kode']; ?>">	

	</div>
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" name="tgl" value="<?php echo $k['tgl']; ?>" class="form-control">		
	</div>
	
		<div class="form-group">
		<label>Jumlah Pembayaran </label>

		<input type="number" name="jumlah" value="<?php echo $d['keluar']; ?>" class="form-control">		
	</div>
<!-- 	<div class="form-group">
		<label>Jenis Kas</label> <br>
		
		<div class="radio-inline">
			<label><input type="radio" name="jenis" value="masuk"> Kas Masuk</label>
		</div>
		<div class="radio-inline">
			<label><input type="radio" name="jenis" value="keluar"> Kas Keluar</label>
		</div>	
	</div> -->
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control"><?php echo $d['keterangan']; ?></textarea>
		
	</div>
	<div class="form-group">
		<button type="submit" name="update_kasklr" class="btn btn-success"> <span class="fa fa-edit"></span> Edit </button>
		<button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset </button>
		
	</div>
	
</form> 
		</div>
	</div>
</div>
