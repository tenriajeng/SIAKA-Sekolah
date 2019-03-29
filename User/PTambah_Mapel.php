<?php
include("Config/Connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mapel = mysqli_real_escape_string($db, $_POST['nama_mapel']);
    $kelas = mysqli_real_escape_string($db, $_POST['Kelas']);
    
    
    $sql    = "INSERT INTO mapel (kd_kelas,nama_mapel) VALUES ('$kelas','$mapel')";
    $result = mysqli_query($db, $sql);
    if ($result == 1) {
        echo "<script>alert('Berhasil di Simpan');history.go(-2);</script>";
    } else {
        echo $sql;
    }
}