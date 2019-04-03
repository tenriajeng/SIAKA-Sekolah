<?php
include("Config/Connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mapel = mysqli_real_escape_string($db, $_POST['nama_mapel']);
    $kelas = mysqli_real_escape_string($db, $_POST['Kelas']);
    $s = "SELECT nama_kelas FROM kelas WHERE kd_kelas = $kelas";
    $r = mysqli_query($db, $s);
    while($row=mysqli_fetch_array($r)){
        $nama_mapel = $mapel ." ". $row['nama_kelas'];
    }

    
    $sql    = "INSERT INTO mapel (kd_kelas,nama_mapel) VALUES ('$kelas','$nama_mapel')";
    $result = mysqli_query($db, $sql);
    if ($result == 1) {
        echo "<script>alert('Berhasil di Simpan');history.go(-2);</script>";
    } else {
        echo $sql;
    }
}