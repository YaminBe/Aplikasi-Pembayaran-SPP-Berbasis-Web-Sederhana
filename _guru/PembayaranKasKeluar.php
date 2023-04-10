<h3 class="title1"><span class="fa fa-edit"></span>Pembayaran</h3>
<hr style="border: 1px solid #f50057;">
<div class="blank-page widget-shadow scroll" id="style-2 div1">


<div class=" form-grids row form-grids-right">
	<div class="widget-shadow " data-example-id="basic-forms"> 
		<div class="form-title">
			<h4> <span class="fa fa-file"></span> Pembyaran Uang Kas Siswa</h4>
		</div>
		<div class="form-body">
<form  action="?page=act" method="post">
	<div class="form-group">
		<label>Kode</label>
		<input type="hidden" name="idguru" value="<?php echo $data['idguru']; ?>">
		<input type="disabled" placeholder="Tidak Diisi" class="form-control" disabled="">		
	</div>
<!-- 		<div class="form-group">
		<label>Nama Siswa</label>
		<select name="namasiswa" class="form-control">
		<option value="" selected>- Pilih Siswa -</option>
		<?php
		$sqlKelas = mysqli_query($konek, "select * from siswa");
		while($k=mysqli_fetch_array($sqlKelas)){
		?>
		<option value="<?php echo $k['namasiswa']; ?>"><?php echo $k['namasiswa']; ?></option>
		<?php
		}
		?>
		</select>		
	</div> -->
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" name="tgl" value="<?php echo date('d/m/y'); ?>" class="form-control">		
	</div>
		<div class="form-group">
		<label>Kelas</label>
		<input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" class="form-control" readonly>		
	</div>
	
		<div class="form-group">
		<label>Jumlah Pengeluaran </label>

		<input type="number" name="jumlah" class="form-control">		
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
		<textarea name="keterangan" class="form-control"></textarea>
		
	</div>
	<div class="form-group">
		<button type="submit" name="save_kaskeluar" class="btn btn-info"> <span class="fa fa-save"></span> Simpan </button>
		<button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset </button>
		
	</div>
	
</form> 
		</div>
	</div>
</div>
</div>
</<div>
