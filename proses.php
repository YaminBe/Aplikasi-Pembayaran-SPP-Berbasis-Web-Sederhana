<?php
include 'koneksi.php';

if (isset($_POST['simpan_user'])) {
		$idadmin = @$_POST['idadmin'];
		$username = @$_POST['username'];
		$password = @$_POST['password']; 
		$namalengkap = @$_POST['namalengkap'];

		$sumber = @$_FILES['foto']['tmp_name'];
		$target = 'images/';
		$nama_gambar = @$_FILES['foto']['name'];

		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

		if ($pindah) {

		mysqli_query($konek,"INSERT INTO admin VALUES ('$idadmin','$username','$password','$namalengkap','$nama_gambar')") or die (mysqli_error($konek));

		?>

		<script type="text/javascript">
		alert(" Sukses !!!"); 
		window.location.href="data_admin.php";     
		</script>
		<?php

		} else{


		?>
		<script type="text/javascript">

		alert("gambar gagal disimpan  !!");
		window.location.href="add_user.php"; 
		</script>         

		<?php
		}

 }elseif (isset($_POST['simpan_guru'])) {
		$namaguru = @$_POST['namaguru'];
		$user = @$_POST['user'];
		$pass = @$_POST['pass'];
		$mapel = @$_POST['mapel']; 
		$jabatan = @$_POST['jabatan'];

		$sumber = @$_FILES['foto']['tmp_name'];
		$target = 'images/';
		$nama_gambar = @$_FILES['foto']['name'];

		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

		if ($pindah) {

		mysqli_query($konek,"INSERT INTO guru(namaguru,username,password,mapel,jabatan,foto) VALUES ('$namaguru','$user','$pass','$mapel','$jabatan','$nama_gambar')") or die (mysqli_error($konek));

		?>

		<script type="text/javascript">
		alert(" Sukses !!!"); 
		window.location.href="data_guru.php";     
		</script>
		<?php

		} else{


		?>
		<script type="text/javascript">

		alert("gambar gagal disimpan  !!");
		window.location.href="add_guru.php"; 
		</script>         

		<?php
	}
}
?>