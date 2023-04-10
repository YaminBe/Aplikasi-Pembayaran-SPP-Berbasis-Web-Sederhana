<?php
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
	$hapus=mysqli_query($konek, "DELETE FROM walikelas WHERE kelas='$_GET[kls]'");
	
	if(!$hapus){
		echo "
		<script>
		alert('Hapus data gagal, data Wali digunakan di tabel wali kelas');
		window.location='data_walikelas.php';
		</script>";	
	}else{
		header('location:data_walikelas.php');
	}
}
?>