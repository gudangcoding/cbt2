<?php
session_start();
ob_start();

//Mengatur batas login
$timeout = $_SESSION['timeout'];
if(time() < $timeout) {
	$_SESSION['timeout'] = time()+5000;
}else{
	$_SESSION['login'] = 0;
}

//mengecek status login
if(empty($_SESSION['username']) OR empty($_SESSION['password']) OR $_SESSION['login'] == 0) {
	header('location:login.php');
}
?>
<!-- <!DOCTYPE html> -->
<html>
<head>
	<title>Halaman Administrator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- memanggil semua file CSS yang diperlukan  -->
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/dataTables/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">

	<!-- memanggil library jQuery -->
	<script type="text/javascript" src="../assets/jquery/jquery-2.0.2.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<?php include "menu.php"; ?>
		</div>
	</nav>

	<!-- bagian konten -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12" id="content"></div>
			</div>
		</div>
	</section>

	<!-- Bagian footer -->
	<footer>
		<div class="container">
			<p class="text-center">Copyright &copy; Resal Ramdahadi. All right reserved.</p>
		</div>
	</footer>

	<!-- memanggil file-file javascript yang dibutuhkan -->
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/dataTables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../assets/dataTables/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>