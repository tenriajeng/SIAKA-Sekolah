<?php
include("Config/Connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $mapel = mysqli_real_escape_string($db, $_POST['mapel']);
    $nilai = mysqli_real_escape_string($db, $_POST['nilai']);
    $kd = mysqli_real_escape_string($db, $_POST['kd']);
    
    
    $sql    = "UPDATE nilai_siswa SET nilai='$nilai' WHERE kd_nilai = $kd";
    $result = mysqli_query($db, $sql);
    if ($result == 1) {
        echo "<script>alert('Berhasil di Simpan');history.go(-2);</script>";
    } else {
        echo $sql;
    }
}