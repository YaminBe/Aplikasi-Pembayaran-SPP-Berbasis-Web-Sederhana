
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
	<h3><b>Petunjuk Penggunaan Aplikasi</b></h3>

		<div class="media">
		<div class="media-left">
			 <a href="data_guru.php">
			  <span class="fa fa-folder-open" style="font-size: 64px;color: #2C2C2C;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Data Master</b></h3>
			<h3 class="media-heading"><img src="guide/master.png" width="200"></h3>
			<p></p>
			<p><b>Menu Master Data</b> Digunakan Oleh Admin Untuk Melakukan Manipulasi Data Guru, Data Walikelas, Data Siswa. Seperti Melakukan Entry Data, Mengubah Data serta Menghapus Data.
				<!-- <a href="data_guru.php" class="label label-danger">
			  <span class="fa fa-edit" style=""></span> Cek
			</a> --> <br>
<!-- 			<b>Cara Penggunaan :</b> <br> -->

			<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-guru" style="background-image: url(gguide/mgr.png);">
  Baca Selengkapnya <span class="fa fa-chevron-right"></span><span class="fa fa-chevron-right"></span>
</button>

<!-- Modal Master Data Guru -->
<div class="modal fade bs-example-modal-lg" id="modal-guru" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Penggunaan Menu Master</h4>
      </div>
      <div class="modal-body">
      	<p> <h3><b>STEP 1</b></h3> <br>
      		<b>Melihat & Entry Data Guru </b> <br>
      		<h4>Pilih Menu <img src="guide/mgr.png" width="150"> > Pilih Tombol <img src="guide/tgr.png" width="150">  Maka Akan Muncul Tampilan Form Seperti Dibawah ini : </h4> <br>
      		<img src="guide/igr.png" width="400">
      	</p>
      	<br>
      	<p><h4>Isilah Data Guru Sesuai Dengan Form Yang tersedia, Setelah data guru sudah terisi dengan benar beserta dengan file foto, kemudian Pilih Tombol <img src="guide/sgr.png" width="100"> Untuk Menyimpan data guru ke database. Untuk Mengubah Data Jika Terjadi Kesalahan Admin Bisa Memilih Tombol Edit <img src="guide/egr.png" width="50"> Pada Halaman Tampil Data Guru, dan Menghapus Data dengan memilih tombol Hapus <img src="guide/dgr.png" width="50">  Pada Halaman Tampil Data Guru </h4> <br> <b style="color: red;">Perhatian !!</b> Data Guru ini akan digunakan Untuk dijadikan Sebagai Walikelas . Bukan Semua Data Guru yang ada disekolah tersebut ..
      		<br>
      		 <b style="color: red;">Perhatian !!</b> Data Guru ini Tidak akan bisa diHapus <img src="guide/dgr.png" width="50"> Jika sudah di Set Sebagai Walikelas, Mohon Jangan Hapus Data !! </p>
      	<hr>
      	<p> <h3><b>STEP 2</b></h3> <br>
      		<b>Melihat & Menjadikan Guru Sebagai Walikelas</b> <br>
      		<h4>Pilih Menu <img src="guide/iwl.png" width="150"> > Pilih Tombol <img src="guide/twl.png" width="150">  Maka Akan Muncul Tampilan Form Seperti Dibawah ini : </h4> <br>
      		<img src="guide/vwl.png" width="400">
      	</p>
      	<br>
      	<p><h4>Admin Bisa Memilih kelas Mana yang akan di Set dan Guru mana yang akan dijadikan sebagai walikelas, data guru akan muncul setelah admin melakukan entry data guru pada STEP 1, Setelah Field Kelas dan Guru sudah terisi dengan benar, kemudian Pilih Tombol <img src="guide/sgr.png" width="100"> Untuk Menyimpan data Walikelas ke database. Untuk Mengubah Data Jika Terjadi Kesalahan Admin Bisa Memilih Tombol Edit <img src="guide/egr.png" width="50"> Pada Halaman Tampil Data Walikelas</h4> <br> <b style="color: red;">Perhatian !!</b> Data Walikelas Tidak bisa di Hapus <img src="guide/dgr.png" width="50"> Jika Pada data siswa telah memilih Kelas</p>
      	<hr>
      	<p> <h3><b>STEP 3</b></h3> <br>
      		<b>Melihat Data & Entry Data Siswa</b> <br>
      		<h4>Pilih Menu <img src="guide/ds.png" width="150"> > Pilih Tombol <img src="guide/cs.png" width=250"> Untuk Manampilkan Data > Pilih Tombol <img src="guide/ts.png" width="150"> Untuk Entry Data Siswa , Maka Akan Muncul Tampilan Form Seperti Dibawah ini : </h4> <br>
      		<img src="guide/ss.png" width="500">
      	</p>
      	<br>
      	<p><h4>Admin Bisa Memasukan data siswa Setelah semua Field sudah terisi dengan benar, kemudian Pilih Tombol <img src="guide/sgr.png" width="100"> Untuk Menyimpan data ke database. Untuk Mengubah Data Jika Terjadi Kesalahan Admin Bisa Memilih Tombol Edit <img src="guide/egr.png" width="50"> dan tombol Hapus <img src="guide/dgr.png" width="50"> Untuk menghapus data Pada Halaman Tampil Data Siswa</h4><!--  <br> <b style="color: red;">Perhatian !!</b> Data Walikelas Tidak bisa di Hapus <img src="guide/dgr.png" width="50"> Jika Pada data siswa telah memilih Kelas --></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Selesai Membaca</button>
      </div>
    </div>
  </div>
</div>







			</p> 
		</div>
		<div class="clearfix"> </div>
		</div>
		<hr>
	<div class="media">
		<div class="media-left">
			<a href="transaksi.php">
			  <span class="fa fa-edit" style="font-size: 64px;color: #2C2C2C;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Pembayaran SPP</b></h3>
			<img src="guide/spp.png" width="200">
			<p><b>Menu Pembayaran SPP</b> Digunakan Oleh Admin Untuk Melakukan Transaksi Pembayaran Tagihan SPP Siswa Dengan Memasukkan NIS Siswa Lalu Submit Untuk Melihat tagihan Siswa Berdasarkan Bulanan .
			
			 </p>

			 <!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-spp" style="background-image: url(gguide/mgr.png);">
  Baca Selengkapnya <span class="fa fa-chevron-right"></span><span class="fa fa-chevron-right"></span>
</button>

<!-- Modal Master Data Guru -->
<div class="modal fade bs-example-modal-lg" id="modal-spp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Melakukan Pembayaran SPP</h4>
      </div>
      <div class="modal-body">
      	<p> <h3><b>STEP 1</b></h3> <br>
      		<b><h4>Cara melakukan Transaksi Pembayaran SPPP</h4></b> <br>
      		<h4>Pilih Menu <img src="guide/spp.png" width="150"> > Maka Akan Muncul Tampilan <img src="guide/crspp.png" width="300"> >> Masukkan Nomor Induk Siswa (NIS) Lalu tampilkan , maka akan terlihat Semua tagihan oleh siswa yang mempunya nis yang telah dimasukkan di kolom pencarian. berikut tampilan contoh : </h4> <br>
      		<img src="guide/tagihan.png" width="600">
      	</p>
      	<br>
      	<p><h4>Pada contoh diatas admin dapat melakukan pembayaran dengan memilih tombol <img src="guide/bayar.png" width="100"> Untuk Membayar SPP Pada bulan tercantum.  > pilih Tombol <img src="guide/batal.png" width="100">  Untuk Membatalkan Transaksi >> Pilih Tombol <img src="guide/cetak.png" width="100"> Untuk mencetak Struk pembayaran pada bulan tertentu. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Selesai Membaca</button>
      </div>
    </div>
  </div>
</div>


		</div>
		<div class="clearfix"> </div>
	</div>
	<hr>

	<div class="media">
		<div class="media-left">
			<a href="?page=rekap-masuk">
			  <span class="fa fa-print" style="font-size: 64px;color: #2C2C2C;"></span>
			</a>
		</div>
		<div class="media-body">
			<h3 class="media-heading"> <b> Laporan</b></h3>
			<img src="guide/lap.png" width="200">
			<P><b>Menu Laporan</b> Digunakan Oleh Admin Untuk Mencetak Data dalam bentuk PDF, EXCELL, Maupun mencetak data secara Lansung ..
	
			 </P>


			  <!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-lap" style="background-image: url(gguide/mgr.png);">
  Baca Selengkapnya <span class="fa fa-chevron-right"></span><span class="fa fa-chevron-right"></span>
</button>

<!-- Modal Master Data Guru -->
<div class="modal fade bs-example-modal-lg" id="modal-lap" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Menu Pelaporan</h4>
      </div>
      <div class="modal-body">
      	<p> <h3><b>Menu Laporan</b></h3>
      		<hr>
      		<img src="guide/lap.png" width="150"> <br>
      		<b><h4>Pada menu ini terdapat beberapa jenis / Bentuk laporan seperti Pada gambar : <br><img src="guide/laporan.png" width="150"> </h4></b> <br>
      		<h4>Admin dapat mencetak laporan dalam bentuk dan jenis yang tersedia, contoh : </h4>
      		<p>
      		 <h4><b style="color: red;">1.Laporan Perperiode</b> <br> <br>
      			<img src="guide/pp.png" width="150"> </h4> <br>
      			<img src="guide/periode.png"width="800">
      		</p>
      		<br>
      		<p> 
      			<h4><b style="color: red;">2.Laporan Perbulan & Kelas</b> <br> <br>
      			<img src="guide/blkl.png" width="150"> </h4> <br>
      			<img src="guide/bln.png"width="800">
      		</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Selesai Membaca</button>
      </div>
    </div>
  </div>
</div>

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
		