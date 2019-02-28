<?php
include("Config/Connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $kd = mysqli_real_escape_string($db, $_GET['id']);
    
    
    $sql    = "DELETE FROM nilai_siswa WHERE kd_nilai = '$kd'";
    $result = mysqli_query($db, $sql);
    if ($result == 1) {
        echo "<script>alert('Berhasil di Dihapus');history.go(-1);</script>";
    } else {
        echo $sql;
    }
}