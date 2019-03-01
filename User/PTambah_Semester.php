<?php

$kd = $_GET['id'];
include "Config/Connection.php";
$sql = "SELECT MAX(kd_semester) FROM nilai_siswa WHERE kd_siswa = $kd";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$sms= $row['MAX(kd_semester)'];
$sms++;
for($kdm=0;$kdm<=18;$kdm++){
    $sql = "INSERT INTO nilai_siswa(kd_siswa, kd_mapel, nilai, kd_semester) VALUES ('$kd',$kdm,'0','$sms')";
    $result = mysqli_query($db, $sql);
    
    
}
echo "<script>alert('Berhasil di Tambahkan');history.go(-1);</script>";
?>