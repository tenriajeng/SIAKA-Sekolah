<?php
session_start();
include ("Config/Connection.php");
$user = $_SESSION['kd'];
$_SESSION['login_user'];
if($_SESSION['login_user']=='')
    header("location: index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMA Kristen Kondo Sapata Makassar</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/dashboard/horizontal-timeline/css/style.css">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/dashboard/amchart/css/amchart.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
</head>

<body class="menu-static">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <?php
    include "header.php";
    ?>
    <!-- Menu header end -->
    <!-- Menu aside start -->
    <?php
    include "menu.php";
    ?>
    <!-- Menu aside end -->

    <!-- Main-body start-->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Dashboard</h4>
                </div>
                
            </div>
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <!-- table card start -->
                        <div class="card table-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-eye-alt text-success"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5> 
                                                    <?php
                                                    $sql = "SELECT COUNT(kd_mapel) FROM mapel";
                                                    $result = mysqli_query($db,$sql);
                                                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                    echo $row['COUNT(kd_mapel)'];
                                                    ?>
                                                </h5>
                                                <span>Total MaPel</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-ui-music text-danger"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5><?php
                                                $sql = "SELECT COUNT(kd_siswa) FROM siswa";
                                                $result = mysqli_query($db,$sql);
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                echo $row['COUNT(kd_siswa)'];
                                                ?></h5>
                                                <span>Total Siswa</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- table card end -->
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <!-- table card start -->
                        <div class="card table-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div id="barchart" style="height:40px;width:40px;"></div>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>
                                                <?php
                                                $sql = "SELECT COUNT(kd_tugas) FROM tugas";
                                                $result = mysqli_query($db,$sql);
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                echo $row['COUNT(kd_tugas)'];
                                                ?>
                                                </h5>
                                                <span>Total Tugas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-network text-primary"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5><?php
                                                $sql = "SELECT COUNT(kd_jawaban) FROM jawaban";
                                                $result = mysqli_query($db,$sql);
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                echo $row['COUNT(kd_jawaban)'];
                                                ?></h5>
                                                <span>Jawaban Tugas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table card end -->
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <!-- table card start -->
                        <div class="card table-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-ui-music text-danger"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5><?php
                                                $sql = "SELECT COUNT(kd_guru) FROM guru";
                                                $result = mysqli_query($db,$sql);
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                echo $row['COUNT(kd_guru)'];
                                                ?></h5>
                                                <span>Total Guru</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-network text-primary"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5><?php
                                                $sql = "SELECT COUNT(kd_materi) FROM materi";
                                                $result = mysqli_query($db,$sql);
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                echo $row['COUNT(kd_materi)'];
                                                ?></h5>
                                                <span>Total Materi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <!-- table card end -->
                    </div>
                    <?php
                    $sql = "SELECT guru_mapel.kd_gm,mapel.kd_mapel, mapel.nama_mapel FROM guru_mapel 
                    INNER JOIN mapel ON mapel.kd_mapel = guru_mapel.kd_mapel
                    WHERE guru_mapel.kd_guru = $user";

                    $result=mysqli_query($db,$sql);
                    
                    while ($row=mysqli_fetch_array($result)){    
                    ?>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <a href="Nilai_siswaG.php?id=<?=$row['kd_mapel'];?>">
                            <div class="card-block-big primary">
                                <h3><?=$row['nama_mapel']?></h3>
                                <!-- <span class="m-t-10"></span> -->
                                <!-- <i class="icofont icofont-social-facebook"></i> -->
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-body end-->

    <!-- Required Jqurey -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="bower_components/classie/classie.js"></script>
    <!-- Rickshow Chart js -->
    <script src="bower_components/d3/d3.js"></script>
    <script src="bower_components/rickshaw/rickshaw.js"></script>
    <!-- Morris Chart js -->
    <script src="bower_components/raphael/raphael.min.js"></script>
    <script src="bower_components/morris.js/morris.js"></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/amcharts.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/serial.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/light.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>