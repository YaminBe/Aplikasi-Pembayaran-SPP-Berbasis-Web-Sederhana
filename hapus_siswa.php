<?php
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
	$hapus = mysqli_query($konek, "DELETE FROM siswa WHERE idsiswa='$_GET[id]'");
	
	if($hapus){
		header('location:data_siswa.php');
	}else{
		echo "
		<script>
		alert('Hapus data gagal,......');
		window.location='data_siswa.php';
		</script>";
	}
}else{
	echo "Anda tidak memiliki akses ke halaman ini!!!";
}
?>