<?php
include("Config/Connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mapel = mysqli_real_escape_string($db, $_POST['nama_mapel']);
    $kd = mysqli_real_escape_string($db, $_POST['kd']);
    $kelas = mysqli_real_escape_string($db, $_POST['Kelas']);
    
    
    $sql    = "UPDATE mapel SET nama_mapel = '$mapel',kd_kelas = '$kelas' WHERE kd_mapel = $kd";
    $result = mysqli_query($db, $sql);
    if ($result == 1) {
        echo "<script>alert('Berhasil di Simpan');history.go(-2);</script>";
    } else {
        echo $sql;
    }
}