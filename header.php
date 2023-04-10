<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location:login_adm.php');
}

include "koneksi.php";
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Halaman Admin APlikasi SPP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- Data tables -->
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">            	
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">	
				<!-- <center><img src="LAPORAN/LOGO.jpg" class="img-thumbnail" width="200"></center>	 -->			
					<ul class="nav" id="side-menu">
						<!-- <center>
							<iframe src="https://www.google.com/maps/embed?pb=!4v1524899894573!6m8!1m7!1s-ccsnvzIgF7f80DP1Ays2Q!2m2!1d0.2550509434559041!2d99.57496317540357!3f325.6008890840966!4f-5.229007100007522!5f1.1924812503605782" width="300" height="200" frameborder="0" style="border:2px solid silver; border-radius: 12px;" allowfullscreen></iframe>
						</center> -->
						

						<li>
							<a href="admin.php"><i class="fa fa-home nav_icon" style="font-size: 25px;color: #f50057;"></i>Dashboard</a>
						</li>
					<!-- 	<li>
							<a href="#"><i class="fa fa-cogs nav_icon" style="font-size: 25px;color: #f50057;"></i>Data Master <span class="nav-badge" style="background-color: red;">3</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="add_guru.php"> <span class="fa fa-plus-circle"></span> Input Guru</a>
								</li>
								<li>
									<a href="add_walikelas.php"> <span class="fa fa-plus-circle"></span> Input Wali Kelas</a>
								</li>
								<li>
									<a href="add_siswa.php"> <span class="fa fa-plus-circle"></span> Input Siswa</a>
								</li>
							</ul>
						</li> -->
						<li>
							<a href="#"><i class="fa fa-folder-open nav_icon" style="font-size: 25px;color: #f50057;"></i>Master Data <span class="nav-badge" style="background-color: red;">3</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="data_guru.php"> <span class="fa fa-folder-o" style="font-size: 20px;color: #f50057;"></span> Data Guru</a>
								</li>
								<li>
									<a href="data_walikelas.php"> <span class="fa fa-folder-o" style="font-size: 20px;color: #f50057;"></span> Data Wali Kelas</a>
								</li>
								<li>
									<a href="data_siswakelas.php"> <span class="fa fa-folder-o" style="font-size: 20px;color: #f50057;"></span> Data Siswa</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-folder-open-o nav_icon" style="font-size: 25px;color: #f50057;"></i> Kas Siswa <span class="nav-badge" style="background-color: red;">3</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="kas_masuk.php"> <span style="font-size: 20px;color: #f50057;" class="fa fa-folder-o"></span> Kas Masuk</a>
								</li>
								<li>
									<a href="kas_keluar.php"> <span style="font-size: 20px;color: #f50057;" class="fa fa-folder-o"></span> Kas Keluar</a>
								</li>
									<li>
									<a href="rekap-kas.php"> <span style="font-size: 20px;color: #f50057;" class="fa fa-folder-o"></span> Rekapitulasi Kas</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="transaksi.php"><i class="fa fa-edit nav_icon" style="font-size: 25px;color: #f50057;"></i>Pembayaran SPP <span class="nav-badge-btm" style="background-color: red;">Cek</span></a>
						</li>
						<li>
							<a href="data_admin.php"><i class="fa fa-gear nav_icon" style="font-size: 25px;color: #f50057;"></i>Pengaturan User </a>
						</li>
						<li>
							<a href="#"><i class="fa fa-print nav_icon" style="font-size: 25px;color: #f50057;"></i>Laporan <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">

								<li>
									<a href="l_guru.php"> <span class="fa fa-file" style="font-size: 25px;color: #448aff ;"></span> Master Data Guru</a>
								</li>
									<li>
									<a href="l_siswa.php"> <span class="fa fa-file" style="font-size: 25px;color: #448aff ;"></span> Master Data Siswa</a>
								</li>
									<li>
									<a href="laporan_persiswa.php"> <span class="fa fa-file" style="font-size: 25px;color:rgb(255,0,58);"></span> Laporan Persiswa</a>
								
								</li>						
								<li>
									<a href="pembayaran.php"> <span class="fa fa-file" style="font-size: 25px;color: rgb(255,0,58);"></span> Laporan Perperiode</a>
								</li>
								<li>
									<a href="laporan_perbulan-kelas.php"> <span class="fa fa-file" style="font-size: 25px;color:rgb(255,0,58);"></span> Laporan Perbulan & Kelas</a>
								</li>
								<li>
									<a href="laporan_pertahun.php"> <span class="fa fa-file" style="font-size: 25px;color:rgb(255,0,58);"></span> Laporan Pertahun</a>
								</li>
									<li>
									<a href="laporan-rekapkas.php"> <span class="fa fa-file" style="font-size: 25px;color:#fff;"></span> Rekapitulasi Kas Siswa</a>
								</li>
								<hr>							

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
if (@$_SESSION['login']) {
$sesi = @$_SESSION['id'];
}

$sql = mysqli_query($konek,"select * from admin where idadmin = '$sesi'") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);
?>


				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"> <img src="images/<?php echo $data['foto']; ?>" width="40"> </span> 
									<div class="user-name">
										<p style="color: white;"><?php echo $data['namalengkap']; ?></p>
										<span style="color: white;">Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>  -->
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