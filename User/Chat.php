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

    <!-- Main-body start -->
    <div class="main-body chat-bg">
        <div class="page-wrapper">
            <div id="main-chat" class="container-fluid">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Chat </h4>
                    </div>
                    
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="chat-box">
                            <ul class="text-right boxs">
                                <li class="chat-single-box card-shadow bg-white active" data-id="1">
                                    <div class="had-container">
                                        <div class="chat-header p-10 bg-gray">
                                            <div class="user-info d-inline-block f-left">
                                                <div class="box-live-status bg-danger  d-inline-block m-r-10"></div>
                                                <a href="#">Josephin Doe</a>
                                            </div>
                                            <div class="box-tools d-inline-block">
                                                <a href="#" class="mini">
                                                    <i class="icofont icofont-minus f-20 m-r-10"></i>
                                                </a>
                                                <a class="close" href="#">
                                                    <i class="icofont icofont-close f-20"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="chat-body p-10">
                                            <div class="message-scrooler">
                                                <div class="messages">
                                                    <div class="message out no-avatar media">
                                                        <div class="body media-body text-right p-l-50">
                                                            <div class="content msg-reply f-12 bg-primary d-inline-block">Good morning..</div>
                                                            <div class="seen"><i class="icon-clock f-12 m-r-5 txt-muted d-inline-block"></i><span><p class="d-inline-block">a few seconds ago </p></span>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sender media-right friend-box">
                                                            <a href="javascript:void(0);" title="Me"><img src="assets/images/avatar-1.png" class="img-circle img-chat-profile" alt="Me"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-footer b-t-muted">
                                            <div class="input-group write-msg">
                                                <input type="text" class="form-control input-value" placeholder="Type a Message">
                                                <span class="input-group-btn">
                                                <button  id="paper-btn" class="btn btn-secondary" type="button">
                                                    <i class="icofont icofont-paper-plane"></i>
                                                </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- chat side bar -->
                            <div id="sidebar" class="users p-chat-user">
                                <div class="had-container">
                                    <div class="card card_main p-fixed users-main ">
                                        <div class="user-box">
                                            <div class="card-block">
                                                <div class="right-icon-control">
                                                    <input type="text" class="form-control  search-text" placeholder="Cari">
                                                    <div class="form-icon">
                                                        <i class="icofont icofont-search"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $sql = "SELECT kd_guru,nama,foto_profil FROM guru ";
                                            
                                            $result=mysqli_query($db,$sql);
                                            $a=1;
                                            while ($row=mysqli_fetch_array($result)){    
                                            ?>
                                            <div class="media userlist-box" data-id="<?= $row['kd_guru'];?>" data-status="online" data-username="<?= $row['nama'];?>" data-toggle="tooltip" data-placement="left" title="<?= $row['nama'];?>">
                                                <a class="media-left" href="#!">
                                                    <img class="media-object img-circle" src="file/user-profile/<?= $row['foto_profil']; ?>" alt="Generic placeholder image">
                                                    <div class="live-status bg-success"></div>
                                                </a>
                                                <div class="media-body">
                                                    <div class="f-13 chat-header"><?= $row['nama'];?></div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end chat side bar -->

                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
    </div>
    <?php
    $sql = "SELECT timestamp FROM chat ";
                                            
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result);
    ?>
    <!-- Main-body start -->
    <!-- Warning Section Starts -->
    
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
    <!-- chat js -->
    <script src="assets/pages/chat/js/mmc-common.js"></script>
    <script src="assets/pages/chat/js/mmc-chat.js"></script>
    <script type="text/javascript" src="assets/pages/chat/js/chat.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>
