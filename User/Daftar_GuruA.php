<?php
    session_start();
    $user = $_SESSION['kd'];
    include "Config/Connection.php";
    if($_SESSION['login_user']=='')
    header("location: index.php");

    if (isset($_GET['id'])) {
        $kd = $_GET['id'];
        $sql = "DELETE FROM guru WHERE kd_duru = $kd";
        $result = mysqli_query($db, $sql);
        echo "<script>alert('Data Berhasil Dihapus');</script>";
    }
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
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
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
    
    <?php
        include "header.php";
        include "menu.php";
    ?>

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Daftar Guru</h4>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5></h5>
                                <div class="card-header-right">
                                <a href="Tambah_Guru.php">
                                    <button class="btn btn-info btn-info">
                                        <i class="icofont icofont-ui-add"></i>Tambah Guru
                                    </button>
                                </a>
                                    <i class="icofont icofont-rounded-down"></i>
                                    <br>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Wali Kelas</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT guru.kd_guru, guru.nip,kelas.nama_kelas, guru.nama, guru.alamat,guru.jns_kelamin FROM guru
                                            INNER JOIN kelas ON kelas.kd_kelas = guru.status";
                                            
                                            $result=mysqli_query($db,$sql);
                                            $a=1;
                                            while ($row=mysqli_fetch_array($result)){    
                                            ?>
                                            <tr>
                                                <td><?php echo $a++;?></td>
                                                <td><?php echo $row['nip'];?></td>
                                                <td><?php echo $row['nama'];?></td>
                                                <td><?php echo $row['nama_kelas'];?></td>
                                                <td><?php echo $row['alamat'];?></td>
                                                <td><?php echo $row['jns_kelamin'];?></td>
                                                <td>
                                                <a href="Profil_Siswa.php?id=<?php echo $row['kd_siswa'];?>">
                                                    <button class="btn btn-primary btn-primary">
                                                        <i class="icofont icofont-folder-open"></i>Detail
                                                    </button>
                                                </a>
                                                <a href="Daftar_SiswaA.php?id=<?php echo $row['kd_siswa'];?>">
                                                    <button class="btn btn-primary btn-danger">
                                                        <i class="icofont icofont-trash"></i>Hapus
                                                    </button>
                                                </a>
                                                </td>
                                            </tr>                                            
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Wali Kelas</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Zero config.table end -->
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body start -->
   
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
    <!-- data-table js -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/pages/data-table/js/jszip.min.js"></script>
    <script src="assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="assets/pages/data-table/js/data-table-custom.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
