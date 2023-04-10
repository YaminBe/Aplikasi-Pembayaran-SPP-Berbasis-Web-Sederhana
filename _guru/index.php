
<?PHP error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
$konek = new mysqli("localhost","root","","sppsekolah");

if ($_SESSION['guru']) {

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Halaman Guru APlikasi SPP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<!-- Data tables -->
	<script type="text/javascript" src="../assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/DataTables/media/js/jquery.dataTables.js"></script>

	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/dataTables.bootstrap.css">
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">            	
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">					
					<ul class="nav" id="side-menu">
						<!-- <center>
							<iframe src="https://www.google.com/maps/embed?pb=!4v1524899894573!6m8!1m7!1s-ccsnvzIgF7f80DP1Ays2Q!2m2!1d0.2550509434559041!2d99.57496317540357!3f325.6008890840966!4f-5.229007100007522!5f1.1924812503605782" width="300" height="200" frameborder="0" style="border:2px solid silver; border-radius: 12px;" allowfullscreen></iframe>
						</center> -->
						
						<li>
							<a href="index.php"><i class="fa fa-home nav_icon" style="font-size: 25px;color: #f50057;"></i>Dashboard</a>
						</li>

						<!-- <li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i>Data Master<span class="nav-badge" style="background-color: black;">3</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="add_guru.php"> <span class="fa fa-plus"></span> Daftarkan Siswa</a>
								</li>
								<li>
									<a href="add_walikelas.php"> <span class="fa fa-plus"></span> Input Wali Kelas</a>
								</li>
								<li>
									<a href="add_siswa.php"> <span class="fa fa-plus"></span> Input Siswa</a>
								</li>
							</ul>
						</li> -->
							<li>
							<a href="?page=pembyaran"><i class="fa fa-edit nav_icon" style="font-size: 25px;color: #f50057;"></i> Pembayaran</a>
						</li>				
						<li>
							<a href="?page=masuk"><i class="fa  fa-folder-open-o nav_icon" style="font-size: 25px;color: #f50057;"></i>Kas Masuk <span class="nav-badge-btm" style="background-color: #ff1744;">Cek</span></a>
						</li>
						<li>
							<a href="?page=keluar"><i class="fa fa-folder-o nav_icon" style="font-size: 25px;color: #f50057;"></i>Kas Keluar <span class="nav-badge-btm" style="background-color: #ff1744;">Cek</span></a>
						</li>
							<li>
							<a href="?page=rekap"><i class="fa  fa-clipboard nav_icon" style="font-size: 25px;color: #f50057;"></i>Rekapitulasi Kas <span class="nav-badge-btm" style="background-color: #ff1744;">Cek</span></a>
						</li>
						<!-- <li>
							<a href="?page=rekap"><i class="fa fa-print nav_icon"></i>Rekapitulasi Kas <span class="nav-badge-btm" style="background-color: black;">Cek</span></a>
						</li> -->
						<li>
							<a href="#"><i class="fa fa-print nav_icon" style="font-size: 25px;color: #f50057;"></i>Laporan Kas <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="?page=rekap-masuk"> <span class="fa fa-file" style="font-size: 25px;color: #f50057;"></span> Laporan Kas Masuk</a>
								</li>
									<li>
									<a href="?page=rekap-keluar"> <span class="fa fa-file" style="font-size: 25px;color: #f50057;"></span> Laporan Kas Keluar</a>
								</li>
								<li>
									<a href="?page=rekap-all"> <span class="fa fa-file" style="font-size: 25px;color: #f50057;"></span> Laporan Rekapitulasi</a>
								</li>
								<hr>
								<!-- <li>
									<a href="l_pembayaran.php"> <span class="fa fa-print"></span> Laporan Pembayaran</a>
								</li> -->
							</ul>
							<!-- /nav-second-level -->
						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section" style="background-color:#f50057;">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-th-list"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo" style="background-color: #f50057;">
					<a href="admin.php">
						<h1>APLIKASI</h1>
						<span>Pembayaran SPP</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<b style="color: white;">SMAN 1 LEMBAH MELINTAG</b>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
<?php

include '../koneksi.php';
// $jml =mysqli_num_rows(mysqli_query($konek,"SELECT * FROM tb_siswa"));
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($konek,"
	SELECT * FROM guru p INNER JOIN walikelas b ON p.idguru=b.idguru WHERE p.idguru='$sesi' ") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);

?>
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="../images/<?php echo $data['foto']; ?>" width="40"> </span> 
									<div class="user-name">
										<p style="color: white;"><?php echo $data['namaguru']; ?></p>
										<span style="color: white;">Guru</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="?page=user"><i class="fa fa-cog"></i> Ganti Password</a> </li> 
							<!-- 	<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>  -->
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>




				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- Batas Header -->
		<!-- KONTEN -->

				<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">

		<?php 
		error_reporting();
		$page= @$_GET['page'];
		if ($page=="act") {
			include 'proses.php';
		}elseif ($page=="masuk") {
			include 'kas_masuk.php';
		}elseif ($page=="keluar") {
			include 'kas_keluar.php';
		}elseif ($page=="pembyaran") {
			include 'PembayaranKas.php';
		}elseif ($page=="pembyarank") {
			include 'PembayaranKasKeluar.php';
		}elseif ($page=="e_kas") {
			include 'kas_edit.php';
		}elseif ($page=="d_kas") {
			include 'kas_hapus.php';
		}elseif ($page=="e_kasklr") {
			include 'kas_editklr.php';
		}elseif ($page=="rekap") {
			include 'rekap_all.php';
		}elseif ($page=="rekap-masuk") {
			include 'rekap-masuk.php';
		}elseif ($page=="rekap-keluar") {
			include 'rekap-keluar.php';

		}elseif ($page=="rekap-all") {
			include 'rekapitulasi.php';
		}elseif ($page=="user") {
			include 'ganti-password.php';
		}elseif ($page=="") {
			include 'home_guru.php';
		}else{
			echo "Not Found";
		}


		 ?>


</div>
</div>
		
        <!-- END KONTEN -->
		<!-- INI FOOTER -->
		<!--footer-->
		<div class="footer" style="background-color: #212121;">
		   <p>&copy; 2018 Aplikasi Pembayaran SPP | by <a href="#" target="_blank">Anggi Tamara</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="../js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!-- data -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.js"> </script>
</body>
</html>




<?php
} else{
echo "<script> window.location='../login_gru.php';</script>";

}