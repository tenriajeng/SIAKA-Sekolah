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
      <!-- Magnific Popup CSS -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Image Hover CSS -->
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/set2.css" />
      <!-- Masonry Gallery -->
      <!-- <link href="css/style3.css" rel="stylesheet" type="text/css" /> -->
      <link href="css/animated-masonry-gallery.css" rel="stylesheet" type="text/css" />
      <!-- Main CSS -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- ========================= ABOUT IMAGE =========================-->
      <div class="about_bg">
         <div class="container">
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
            <div class="row">
               <div class="col-md-12">
                  <h1>Galeri</h1>
               </div>
            </div>
         </div>
      </div>
      <!--//END ABOUT IMAGE -->
      <!--============================= Gallery =============================-->
      <div class="gallery-wrap">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
              
            <?php 
            $sql = "SELECT nama_foto FROM galeri";
            $result = mysqli_query($db,$sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
               <div class="col-md-4">
                  <a href="User/file/gallery/<?php echo $row['nama_foto'] ?>" class="grid image-link">
                     <figure class="effect-bubba gallery-img-wrap">
                        <img width="300" height="100" src="User/file/gallery/<?php echo $row['nama_foto'] ?>" class="img-fluid" alt="#">
                        <figcaption>
                           <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                        </figcaption>
                     </figure>
                  </a>
               </div>
               
            <?php } ?>
            </div>
            <br>
         </div>
      </div>
      <!--//End Gallery -->
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
      <script src="js/jquery-ui-1.10.4.min.js"></script>
      <script src="js/jquery.isotope.min.js"></script>
      <script src="js/animated-masonry-gallery.js"></script>
      <!-- Magnific popup JS -->
      <script src="js/jquery.magnific-popup.js"></script>
      <!-- Script JS -->
      <script src="js/script.js"></script>
   </body>
</html>