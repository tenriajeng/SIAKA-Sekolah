<?php 
$username = $_SESSION['login_user'];
$ni = $_SESSION['pass'];
$foto = $_SESSION['foto'];
?>
<div class="main-menu">
    <div class="main-menu-header">
        <img class="img-50 img-circle" height="60" width="60" src="file/user-profile/<?php echo $foto; ?>" alt="User-Profile-Image">
        <div class="user-details">
            <span><?php echo $username; ?></span>
            <?php if(!($_SESSION['level_user']=="admin")){?>
            <span><?php echo $ni; ?></span>
            <?php } ?>
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="main-navigation">

            <li class="nav-title" data-i18n="nav.category.navigation">
                <i class="ti-line-dashed"></i>
                <span>Navigasi</span>
            </li>
            
            <?php 
                if($_SESSION['level_user']=="siswa"){
                    ?>
               
                <li class="nav-item single-item">
                    <a href="Nilai_siswa.php">
                        <i class="ti-archive"></i>
                        <span data-i18n="nav.form-select.main">Nilai </span>
                    </a>
                </li>

                <li class="nav-item single-item">
                    <a href="Materi_Page.php">
                        <i class="ti-book"></i>
                        <span data-i18n="nav.form-select.main">Materi </span>
                    </a>
                </li>

                <li class="nav-item single-item">
                    <a href="Tugas_Page.php">
                        <i class="ti-briefcase"></i>
                        <span data-i18n="nav.form-select.main">Tugas </span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="Chat.php">
                    <i class="ti-comments"></i>
                        <span data-i18n="nav.form-select.main">Chat </span>
                    </a>
                </li>
                <?php
                } 
            ?>
            <?php
            if($_SESSION['level_user']=="admin"){
                ?>
                <li class="nav-item single-item">
                    <a href="Dashboard.php">
                        <i class="ti-home"></i>
                        <span data-i18n="nav.form-select.main">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item single-item">
                    <a href="Daftar_SiswaA.php">
                        <i class="ti-archive"></i>
                            <span data-i18n="nav.form-select.main">Daftar Siswa </span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="Daftar_GuruA.php">
                        <i class="ti-archive"></i>
                            <span data-i18n="nav.form-select.main">Daftar Guru </span>
                    </a>
                </li>
                <li class="nav-item single-item">
                        <a href="MateriA_Page.php">
                            <i class="ti-book"></i>
                            <span data-i18n="nav.form-select.main">Materi </span>
                         </a>
                    </li>
                    <li class="nav-item single-item">
                        <a href="TugasG_Page.php">
                            <i class="ti-briefcase"></i>
                            <span data-i18n="nav.form-select.main">Tugas </span>
                         </a>
                    </li>
                    <li class="nav-item single-item">
                        <a href="Mata_Pelajaran.php">
                            <i class="ti-receipt"></i>
                            <span data-i18n="nav.form-select.main">Mata Pelajaran</span>
                        </a>
                    </li>
                    <li class="nav-item single-item">
                        <a href="Gallery.php">
                            <i class="ti-gallery"></i>
                            <span data-i18n="nav.form-select.main">Galeri</span>
                        </a>
                    </li>
                    
                <li class="nav-item single-item">
                    <a href="Chat.php">
                        <i class="ti-comments"></i>
                        <span data-i18n="nav.form-select.main">Chat </span>
                    </a>
                </li>
                <?php
                }
            ?>
            
            <?php 
                if($_SESSION['level_user']=="guru"){
                    ?>
                    <li class="nav-item single-item">
                        <a href="Nilai_siswaG.php">
                            <i class="ti-archive"></i>
                                <span data-i18n="nav.form-select.main">Daftar Siswa </span>
                        </a>
                    </li>
                    
                   
                    <li class="nav-item single-item">
                        <a href="MateriG_Page.php">
                            <i class="ti-book"></i>
                            <span data-i18n="nav.form-select.main">Materi </span>
                         </a>
                    </li>
                    <li class="nav-item single-item">
                        <a href="TugasG_Page.php">
                            <i class="ti-briefcase"></i>
                            <span data-i18n="nav.form-select.main">Tugas </span>
                         </a>
                    </li>
                    
                <li class="nav-item single-item">
                    <a href="Chat.php">
                    <i class="ti-comments"></i>
                        <span data-i18n="nav.form-select.main">Chat </span>
                    </a>
                </li>
                    <?php
                }
            ?>

            
        </ul>
    </div>
</div>