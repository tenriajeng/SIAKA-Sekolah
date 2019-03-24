<?php
include("Config/Connection.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai                 = mysqli_real_escape_string($db, $_POST['nilai']);
    $kd = $_POST['kd'];

    $sql    = "UPDATE jawaban SET nilai_tugas = '$nilai' WHERE kd_jawaban = $kd;";
    $result = mysqli_query($db, $sql);
    if ($result == 1) {
        echo "<script>alert('Berhasil di Simpan');history.go(-2);</script>";
    } else {
        echo $sql;
    }
}


?>