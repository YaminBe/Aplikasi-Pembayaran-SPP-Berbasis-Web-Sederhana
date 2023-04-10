<?php 
include '../koneksi.php';

if (isset($_POST['save_kas'])) {
	$idguru = $_POST['idguru'];
	$namasiswa = $_POST['namasiswa'];
	$kelas = $_POST['kelas'];
	$keterangan = $_POST['keterangan'];
	$tgl = $_POST['tgl'];
	$jumlah = $_POST['jumlah'];


	 // Proses Simpan
	mysqli_query($konek,"INSERT INTO db_kas (kode,idguru,namasiswa,kelas,keterangan,tgl,jumlah,jenis,keluar)
	 VALUES(NULL,'$idguru','$namasiswa','$kelas','$keterangan','$tgl','$jumlah','masuk','0') ") or die(mysqli_error($konek));
	echo "<script>
	alert('Data Kas Telah Berhasil Ditambahkan !!');
	window.location='?page=masuk';

	</script>";
}elseif(isset($_POST['save_kaskeluar'])) {
	$idguru = $_POST['idguru'];
	// $namasiswa = $_POST['namasiswa'];
	$kelas = $_POST['kelas'];
	$keterangan = $_POST['keterangan'];
	$tgl = $_POST['tgl'];
	$jumlah = $_POST['jumlah'];

	 // Proses Simpan
	mysqli_query($konek,"INSERT INTO db_kas (kode,idguru,namasiswa,kelas,keterangan,tgl,jumlah,jenis,keluar)
	 VALUES(NULL,'$idguru','','$kelas','$keterangan','$tgl','0','keluar','$jumlah') ") or die(mysqli_error($konek));
	echo "<script>
	alert('Data Kas Telah Berhasil Ditambahkan !!');
	window.location='?page=keluar';

	</script>";
}elseif (isset($_POST['update_kas'])) {
	   $id = $_POST['id'];
       $namasiswa = trim(mysqli_real_escape_string($konek, $_POST['namasiswa']));
       $tgl = trim(mysqli_real_escape_string($konek, $_POST['tgl']));
       $kelas = trim(mysqli_real_escape_string($konek, $_POST['kelas']));
       $jumlah = trim(mysqli_real_escape_string($konek, $_POST['jumlah']));
       $keterangan = trim(mysqli_real_escape_string($konek, $_POST['keterangan']));
       mysqli_query($konek,"UPDATE db_kas SET namasiswa='$namasiswa',tgl='$tgl',kelas='$kelas',jumlah='$jumlah',keterangan='$keterangan' WHERE kode='$id' ");
       echo " <script>
 	alert('Data Telah Diubah !!');
 	window.location='?page=masuk';
 </script>";
}elseif (isset($_POST['update_kasklr'])) {
	   $id = $_POST['id'];
       $tgl = trim(mysqli_real_escape_string($konek, $_POST['tgl']));
       $jumlah = trim(mysqli_real_escape_string($konek, $_POST['jumlah']));
       $keterangan = trim(mysqli_real_escape_string($konek, $_POST['keterangan']));
       mysqli_query($konek,"UPDATE db_kas SET keterangan='$keterangan',tgl='$tgl',keluar='$jumlah' WHERE kode='$id' ");
       echo " <script>
 	alert('Data Telah Diubah !!');
 	window.location='?page=keluar';
 </script>";
}elseif (isset($_POST['ganti'])) {
	   $id = $_POST['id'];
       $username = trim(mysqli_real_escape_string($konek, $_POST['username']));
       $password = trim(mysqli_real_escape_string($konek, $_POST['password']));
       $nama = trim(mysqli_real_escape_string($konek, $_POST['nama']));
       mysqli_query($konek,"UPDATE guru SET username='$username',password='$password',namaguru='$nama' WHERE idguru='$id' ");
       echo " <script>
 	alert('Data Telah Diubah !!');
 	window.location='?page=user';
 </script>";
}


 ?>
