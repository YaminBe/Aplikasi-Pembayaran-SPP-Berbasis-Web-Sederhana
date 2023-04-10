
		<!-- HEADER -->
		<?php include 'header.php';
		$siswa =mysqli_num_rows(mysqli_query($konek, "SELECT * FROM siswa"));
		$bulan =mysqli_num_rows(mysqli_query($konek, "SELECT * FROM spp WHERE MONTH(tglbayar)"));

		 ?>

		<!-- main content start-->
<div id="page-wrapper">
<div class="main-page">
<h3 class="title1"><span class="fa fa-home"></span> Halaman Admin</h3>
<hr style="border: 1px solid #f50057;">

<div class="blank-page widget-shadow scroll" id="style-2 div1">

<!-- dashboard -->
<div class="row-one">
	<h3><b>Aplikasi Pembayaran SPP & KAS Siswa</b></h3>

		<div class="media">
		<div class="media-left">
			<a href="data_guru.php">
			  <span class="fa fa-folder-open" style="font-size: 64px;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Master Data</b></h3>
			<p><b>Menu Master Data</b> Digunakan Oleh Admin Untuk Melakukan Manipulasi Data Guru, Data Walikelas, Data Siswa. Seperti Melakukan Entry Data, Mengubah Data serta Menghapus Data.
				<a href="data_guru.php" class="label label-danger">
			  <span class="fa fa-edit" style=""></span> Cek
			</a>

			</p> 
		</div>
		<div class="clearfix"> </div>
		</div>
		<hr>

	<div class="media">
		<div class="media-left">
			<a href="rekap-kas.php">
			  <span class="fa fa-folder-open-o" style="font-size: 64px;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Kas Siswa</b></h3>
			<p><b>Menu Kas Siswa</b> Digunakan Oleh Admin Untuk Melihat Data Kas Siswa, Seperti Kas Masuk, Kas Keluar, Rekapitulasi Kas.
					<a href="rekap-kas.php" class="label label-danger">
			  <span class="fa fa-folder-open-o" style=""></span> Cek
			</a>
			 </p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<hr>
	<div class="media">
		<div class="media-left">
			<a href="transaksi.php">
			  <span class="fa fa-folder-o" style="font-size: 64px;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Pembayaran SPP</b></h3>
			<p><b>Menu Pembayaran SPP</b> Digunakan Oleh Admin Untuk Melakukan Transaksi Pembayaran Tagihan SPP Siswa Dengan Memasukkan NIS Siswa Lalu Submit Untuk Melihat tagihan Siswa Berdasarkan Bulanan .
					<a href="transaksi.php" class="label label-danger">
			  <span class="fa fa-folder-o" style=""></span> Cek
			</a>
			 </p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<hr>
	<div class="media">
		<div class="media-left">
			<a href="data_admin.php">
			  <span class="fa fa-gear" style="font-size: 64px;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Pengaturan User</b></h3>
			<P><b>Menu Pengaturan User</b> Digunakan Oleh Admin Untuk Manipulasi Data Pengguna, Seperti Menambahkan , Merubah Data serta Menghapus Data.
					<a href="data_admin.php" class="label label-danger">
			  <span class="fa fa-print" style=""></span> Cek
			</a>
			 </P>
		</div>
		<div class="clearfix"> </div>
	</div>
<hr>
	<div class="media">
		<div class="media-left">
			<a href="?page=rekap-masuk">
			  <span class="fa fa-print" style="font-size: 64px;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Laporan</b></h3>
			<P><b>Menu Laporan Kas</b> Digunakan Oleh Guru Untuk Melihat Uang Kas Masuk Dan Kas Keluar, Guru Juga Dapat Dicetak Lansung Dari Aplikasi Atau Export Data Dalam Bentuk Excell Dan Download Laporan Dalam Bentuk PDF.
					<a href="?page=rekap-masuk" class="label label-danger">
			  <span class="fa fa-print" style=""></span> Cek
			</a>
			 </P>
		</div>
		<div class="clearfix"> </div>
	</div>



</div>









					<!-- <div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Jumlah</h5>
							<h4>Siswa</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $siswa; ?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Pembayaran Lunas Bulan Ini</h5>
							<h4>Orang</h4>
						</div>
						<div class="stats-right">
							<label>  <?php echo $bulan; ?> </label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Orders</h4>
						</div>
						<div class="stats-right">
							<label>51</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div> -->





				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php include 'footer.php'; ?>
		