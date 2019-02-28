<?php
    session_start();
    $user = $_SESSION['kd'];
    include "Config/Connection.php";
    
    if($_SESSION['login_user']=='')
    header("location: index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMA Kristen Kondo Sapata Makassar</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
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

    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap-daterangepicker/daterangepicker.css" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="bower_components/datedropper/datedropper.min.css" />
    <!-- Color Picker css -->
    <link rel="stylesheet" type="text/css" href="bower_components/spectrum/spectrum.css" />
    <!-- Mini-color css -->
    <link rel="stylesheet" type="text/css" href="bower_components/jquery-minicolors/jquery.minicolors.css" />
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
    <?php
        include "header.php";
        include "menu.php";
    ?>
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Tambah Guru</h4>
                </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5></h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                </div>
                            </div>
                            <div class="card-block">
                               
                                <form method="POST" action="PTambah_Guru.php" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">NIP </label>
                                        <div class="col-sm-10">
                                            <input type="text" required  name="NIP" class="form-control" placeholder="NIP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama </label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="Nama" class="form-control" placeholder="Nama ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Wali Kelas </label>
                                        <div class="col-sm-10">
                                            <select name="Kelas" class="form-control">
                                                <option value="opt1">Pilih Kelas</option>
                                                <option value="7">Bukan Wali Kelas</option>
                                                <?php
                                                $sql = "SELECT kd_kelas,nama_kelas FROM kelas ORDER BY nama_kelas ASC";
                                                $result = mysqli_query($db,$sql);
                                                while($row=mysqli_fetch_array($result)){?>
                                                    <option value="<?php echo $row['kd_kelas'];?>"><?php echo $row['nama_kelas'];?></option>
                                                    <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Jenis Kelamin </label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender-1" value="LAKI-LAKI"> LAKI-LAKI
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender-2" value="PEREMPUAN"> PEREMPUAN
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alamat </label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="alamat" class="form-control" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tempat Lahir </label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="tmp" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Lahir </label>
                                        <div class="col-sm-10">
                                        
                                            <input type="text" name="birthdate" class="form-control" value="10/24/2000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <input type="file" required  name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <input type="submit" class="btn btn-primary" value="Simpan">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
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
    <!-- Color picker js -->
    <script type="text/javascript" src="bower_components/spectrum/spectrum.js"></script>
    <script type="text/javascript" src="bower_components/jscolor/jscolor.js"></script>
    <!-- Mini-color js -->
    <script type="text/javascript" src="bower_components/jquery-minicolors/jquery.minicolors.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/pages/advance-elements/custom-picker.js"></script>
</body>

</html>
