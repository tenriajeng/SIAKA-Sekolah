<?php
    session_start();
    include("User/Config/Connection.php");
    ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>About - Unisco - Education Website Template for University, College, School</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Simple Line Font -->
		<link rel="stylesheet" href="css/simple-line-icons.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<!-- Main CSS -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<!-- ========================= ABOUT IMAGE =========================-->
		<div class="about_bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="index.html"><img src="images/responsive-logo.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
							<span class="icon-menu"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNavDropdown">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="index.php">Halaman Depan</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="about.php">Tentang Kami<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="gallery.php">Galeri</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="User/">Login</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Tetang Kami</h1>
				</div>
			</div>
		</div>
		</div>
		<!--//END ABOUT IMAGE -->
		<!--============================= WELCOME TITLE =============================-->
		<section class="welcome_about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Visi dan Misi Sekolah</h2>
						<p>VISI :<br>
							Menjadi sekolah mandiri yang unggul,
							 mewujudkan dan membentuk sember daya 
							 manusia sebagai pribadi yang beriman dan
							  bertaqwa, berilmu pengetahuan dan teknologi berbasis nasional.

							<br>
							<br> MISI :<br>
								1.	Menghasilkan lulusan yang berakhlak mulia dan memiliki kompetensi akademik yang tinggi dan mampu berdaya saing.<br>
								2.	Memiliki 8 standar Nasional Pendidikan yang dapat diandalkan.<br>
								3.	Menyelenggarakan pelayanan pendidikan dan bimbingan yang professional sesuai dengan potensi dan kecepatan belajar peserta didik.<br>
								4.	Menanamkan semangat kebangsaan melalui kegiatan bela Negara dan seni budaya.<br>
								5.	Membudayakan lingkunan yang bersih, indah, dan sehat.<br>
							</p>
					</div>
					<!-- <div class="col-md-5">
						<img src="images/welcome-img.jpg" class="img-fluid" alt="#">
					</div> -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2>Profil Sekolah</h2>
					<p>
					Nama Sekolah		: SMA KRISTEN KONDO SAPATA MAKASSAR<br>
					Nomor Induk Sekolah	: 5.22.114008<br>
					Nomor Statistik		: 302196008053<br>
					Provinsi			: Sulawesi Selatan<br>
					Desa/Kelurahan		: Maradekaya Selatan<br>
					Kesamatan		: Makassar<br>
					Jalan dan Nomor	: Jl.Sungai Saddang II No. 5<br>
					Kode Pos		: 90141<br>
					Telepon		: (0411)-3631405<br>
					Daerah			: Perkotaan<br>
					Status Sekolah		: Swasta<br>
					Penerbit SK		: 1983<br>
					Tahun Berdiri		: 1984<br>

					</p>
					</div>
				</div>
			</div>
		</section>
		<!--//END WELCOME TITLE -->
		<!--============================= DETAILED CHART =============================-->
        <?php
        include "chart.php";
        ?>
		<!--//END DETAILED CHART -->
		<!--============================= OUR TEACHERS =============================-->
        <?php
        // include "teacher.php";
        ?>
		<!--//END OUR TEACHERS -->
        <!--============================= FOOTER =============================-->
        <?php
        include "footer.php";
        ?>
		<!--//END FOOTER -->
		<!-- jQuery, Bootstrap JS. -->
		<script src="js/jquery.min.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Plugins -->
		<script src="js/slick.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/counterup.min.js"></script>
		<script src="js/instafeed.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/tweetie.min.js"></script>
		<!-- Subscribe -->
		<script src="js/subscribe.js"></script>
		<!-- Script JS -->
		<script src="js/script.js"></script>
	</body>
</html>