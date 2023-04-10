<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($konek,"DELETE FROM db_kas WHERE kode='$id' ");
echo " <script>
 	alert('Data Telah Terhapus !!');
 	window.location='?page=masuk';
 </script>";
 ?>
