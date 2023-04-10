<?php
session_start();
 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login Administrator</title>
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
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body>



	
		<!-- main content start-->
		<!-- bg lama : style="background-color: #f50057;" -->
		<div id="page-wrapper" style="background-image: url(images/bg1.jpg);">	
		<center><img src="LAPORAN/LOGO.jpg" width="100" height="100" style="border-radius: 15px;"> 	</center>	
			<div class="main-page login-page" style="background-color:rgba(0,0,0,0.6); border-radius: 20px;">
				<h3 class="title1" style="color: #fff; padding-top: 20px;">Administrator <br><small style="color: #fff;">Login Aplikasi</small></h3>
				<div class="widget-shadow" style="background-color: #42a5f5;">
					<!-- <div class="login-top">
						<h4>APLIKASI PEMBAYARAN SPP </h4>
					</div> -->
					<div class="login-body" style="background-color: #f50057;">
						<form action="" method="post">
							<input type="text" class="user" name="username" placeholder="Username" required="" style="border-radius: 20px;">
							<input type="password" name="password" class="lock" placeholder="password" style="border-radius: 20px; ">
							<input type="submit" name="Sign In" value="Log In" style="border-radius: 20px; background-color: #212121;">							
						</form>
						<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel untuk menyimpan kiriman dari form
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user=='' || $pass==''){
		echo "Form belum lengkap!!";
	}else{
		include "koneksi.php";
		$sqlLogin = mysqli_query($konek, "SELECT * FROM admin 
						WHERE username='$user' AND password='$pass'");
		$jml = mysqli_num_rows($sqlLogin);
		$d=mysqli_fetch_array($sqlLogin);
		if($jml > 0){

			$_SESSION['login']	= true;
			$_SESSION['id']		= $d['idadmin'];
			$_SESSION['username']=$d['username'];
			echo "<script>
	alert('Login .. Sukses !!');
	window.location='admin.php';
</script>";
			
			// header('location:./admin.php');
		}else{
			       echo" <br> <br> <br><div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4 class='text-center'><i class='glyphicon glyphicon-ban-circle'></i> Gagal Login !!</h4>
                <p class='text-center'>Username / Password Tidak Valid !!</p>
              </div>
        ";
		}
	}
}
?>

					</div>
				</div>
			</div>
		</div>



		<!--footer-->
		<div class="footer" style="background-color: #212121;">
		   <p>&copy; 2018 Aplikasi Pembayaran Uang SPP | Design by <a href="#" target="_blank">Anggi</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
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
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>