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
    <title>SMA Kristen Kondo Sapata Makassar</title>
    <link rel="icon" href="User/assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    <header>
        <div class="container nav-menu">
            <div class="row">
                <!--<div class="col-md-12">
                    <a href="index.html"><img src="images/responsive-logo.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
                </div>-->
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
        <div class="slider_img">
            <div id="carousel" class="carousel slide" data-ride="carousel"> 
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" src="images/Depan1.jpg" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>SMA Kristen Kondo Sapata Makassar </h1>
                                <!-- <h4>Menjadi sekolah mandiri yang unggul, mewujudkan dan membentuk sember daya manusia sebagai pribadi yang beriman dan bertaqwa, berilmu pengetahuan dan teknologi berbasis nasional.<br></h4> -->
                                <div class="slider-btn">
                                    <!-- <a href="#" class="btn btn-default">SEE Programs</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--//END HEADER -->
    <!--============================= ABOUT =============================-->
    <section class="clearfix about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>SELAMAT DATANG</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Menjadi sekolah mandiri yang unggul, mewujudkan dan membentuk sember daya manusia sebagai pribadi yang beriman dan bertaqwa, berilmu pengetahuan dan teknologi berbasis nasional.</p>
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
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
    include "Footer.php";
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