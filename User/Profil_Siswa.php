<?php
    session_start();
    $user = $_SESSION['kd'];
    include "Config/Connection.php";
    if($_SESSION['login_user']=='')
    header("location: index.php");

    $kd=$_GET['id'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>SMA Kristen Kondo Sapata Makassar</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Phoenixcoded">
        <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="Phoenixcoded">
        <!-- Favicon icon -->

        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Date-time picker css -->
        <link rel="stylesheet" type="text/css" href="assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
        <!-- Date-range picker css  -->
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap-daterangepicker/daterangepicker.css" />
        <!-- Date-Dropper css -->
        <link rel="stylesheet" type="text/css" href="bower_components/datedropper/datedropper.min.css" />
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
        <!-- flag icon framework css -->
        <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
        <!-- Menu-Search css -->
        <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
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
            include "menu.php";
        ?>
        <!-- Menu aside end -->

        <!-- Main body start -->
        <div class="main-body user-profile">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Profil Siswa</h4>
                    </div>
                    
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <!--profile cover start-->
                    <?php
                        $sql= "SELECT nis,nama,foto_profil,kd_kelas FROM siswa WHERE kd_siswa = $kd";
                        $result=mysqli_query($db,$sql);
                        $a=1;
                        $row=mysqli_fetch_array($result);
                        $kelas = $row['kd_kelas'];

                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cover-profile">
                                <div class="profile-bg-img">
                                    <img class="profile-bg-img img-fluid" src="assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                    <div class="card-block user-info">
                                        <div class="col-md-12">
                                            <div class="media-body row">
                                                <a href="#" class="profile-image">
                                                    <img class="user-img img-square" width="204" height="204"src="file/user-profile/<?php echo $row['foto_profil']; ?>" alt="user-img">
                                                </a>
                                            </div>
                                            <div class="media-body row">
                                                <div class="col-lg-12">
                                                    <div class="user-title">
                                                        <h2><mark><?php echo $row['nama']; ?></mark></h2>
                                                        <span class="text-white"><mark><?php echo $row['nis']; ?></mark></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--profile cover end-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- tab header start -->
                            <div class="tab-header">
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                    <li class="col-lg-6 nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#nilai" role="tab">Nilai</a>
                                    </li>
                                    <li class="col-lg-6 nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#personal" role="tab">Biodata</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- tab header end -->
                            <!-- tab content start -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="nilai" role="tabpanel">
                                    <div class="row">
                                    
                                        <div class="col-lg-12">
                                        <?php
                                        $smt = "SELECT MAX(nilai_siswa.kd_semester) 
                                        FROM nilai_siswa 
                                        INNER JOIN siswa ON siswa.kd_siswa = nilai_siswa.kd_siswa
                                        WHERE siswa.kd_siswa = $kd";

                                        $jml = 0;
                                        $r=mysqli_query($db,$smt);

                                        while ($rr=mysqli_fetch_array($r)){
                                            $jml = $rr['MAX(nilai_siswa.kd_semester)'];

                                        }
                                        if( ($jml<6)){
                                        ?>
                                        <a href='PTambah_Semester.php?id=<?=$kd?>'>
                                            <button class="btn btn-info btn-info col-lg-12">
                                                <i class="icofont icofont-add"></i>TAMBAH SEMESTER
                                            </button>
                                        </a>
                                        <?php
                                        }
                                        ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- contact data table card start -->
                                                    <?php
                                                    
                                                    
                                                    for(  ;$jml >=1;$jml--){
                                                    ?>
                                                    <div class="card">
                                                        <div class="card-header">
                                                        
                                                            <h5>Daftar Nilai Semester <?php echo $jml; ?></h5>
                                                            <div class="card-header-right">
                                                                <a href="Input_Nilai.php">
                                                                    <button class="btn btn-primary ">
                                                                        <i class="icofont icofont-upload"> Input Nilai </i>
                                                                    </button>
                                                                </a>
                                                                <i class="icofont icofont-rounded-down"></i>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="card-block contact-details">
                                                            <div class="data_table_main table-responsive dt-responsive">
                                                                <table class="table  table-striped table-bordered nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Mata Pelajaran</th>
                                                                            <th>Nilai</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                            <?php 
                                                                            
                                                                            $sql= "SELECT nilai_siswa.kd_nilai,siswa.kd_siswa,mapel.nama_mapel,nilai_siswa.nilai,semester.nm_semester
                                                                            FROM siswa 
                                                                            INNER JOIN nilai_siswa ON nilai_siswa.kd_siswa = siswa.kd_siswa 
                                                                            INNER JOIN mapel ON mapel.kd_mapel = nilai_siswa.kd_mapel 
                                                                            INNER JOIN semester ON semester.kd_semester = nilai_siswa.kd_semester
                                                                            WHERE siswa.kd_siswa = $kd AND semester.nm_semester = $jml AND mapel.kd_kelas = $kelas ORDER BY mapel.nama_mapel ASC";
                                                                            $result=mysqli_query($db,$sql);
                                                                            $a=1;
                                                                            while($row=mysqli_fetch_array($result)){
                                                    

                                                                            ?>
                                                                            <tr>
                                                                            <td>
                                                                                <?php echo $row['nama_mapel']; ?>

                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row['nilai']; ?>
                                                                            </td>

                                                                            <td>
                                                                                
                                                                                <a href='EditNilai_Siswa.php?id=<?php echo $row['kd_nilai'];?>'>
                                                                                    <button class="btn btn-warning btn-warning  waves-effect waves-light f-left">
                                                                                        <i class="icofont icofont-ui-edit"></i>Edit
                                                                                    </button>
                                                                                </a>
                                                                                <a href='HapusNilai_Siswa.php?id=<?php echo $row['kd_nilai'];?>'>
                                                                                    <button class="btn btn-danger btn-danger  waves-effect waves-light f-left">
                                                                                        <i class="icofont icofont-trash"></i>Hapus
                                                                                    </button>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php 
                                                                            }
                                                                            ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- contact data table card end -->
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane " id="personal" role="tabpanel">
                                    <!-- personal card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">Biodata</h5>
                                            <div class="card-header-right">
                                                <i class="icofont icofont-rounded-down"></i>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="general-info">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <table class="table m-0">
                                                                    <?php
                                                                        $sql= "SELECT kd_kelas, nis, nama, alamat, tmp_lahir, tgl_lahir, jns_kelamin, foto_profil FROM siswa WHERE kd_siswa=$kd";
                                                                        $result=mysqli_query($db,$sql);
                                                                        $a=1;
                                                                        $row=mysqli_fetch_array($result);
                                                                    ?>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">Nama Lengkap</th>
                                                                                <td><?=$row['nama']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Nomor Induk</th>
                                                                                <td><?=$row['nis'];?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Jenis Kelamin</th>
                                                                                <td><?=$row['jns_kelamin']?></td>
                                                                            </tr>
                                                                            
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!-- end of table col-lg-6 -->
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">Tanggal Lahir</th>
                                                                                <td><?=$row['tgl_lahir']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Alamat</th>
                                                                                <td><?=$row['alamat']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Tempat Lahir</th>
                                                                                <td><?=$row['tmp_lahir']?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!-- end of table col-lg-6 -->
                                                            </div>
                                                            <!-- end of row -->
                                                        </div>
                                                        <!-- end of general info -->
                                                    </div>
                                                    <!-- end of col-lg-12 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                    <!-- personal card end-->
                                </div>
                                
                            </div>
                            <!-- tab content end -->
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main body end -->
        
        <!-- Required Jquery -->
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="bower_components/tether/dist/js/tether.min.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="bower_components/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
        <!-- classie js -->
        <script type="text/javascript" src="bower_components/classie/classie.js"></script>
        <!-- Bootstrap date-time-picker js -->
        <script type="text/javascript" src="assets/pages/advance-elements/moment-with-locales.min.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
        <!-- Date-range picker js -->
        <script type="text/javascript" src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- Date-dropper js -->
        <script type="text/javascript" src="bower_components/datedropper/datedropper.min.js"></script>
        <!-- data-table js -->
        <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <!-- ck editor -->
        <script src="bower_components/ckeditor/ckeditor.js"></script>
        <!-- echart js -->
        <script src="assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>
        <!-- i18next.min.js -->
        <script type="text/javascript" src="bower_components/i18next/i18next.min.js"></script>
        <script type="text/javascript" src="bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="bower_components/jquery-i18next/jquery-i18next.min.js"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="assets/js/script.js"></script>
        <script src="assets/pages/user-profile.js"></script>
    </body>

    </html>