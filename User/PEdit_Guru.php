<?php
include "Config/Connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd = mysqli_real_escape_string($db, $_POST['kd']);
    $nip = mysqli_real_escape_string($db, $_POST['NIP']);
    $nama = mysqli_real_escape_string($db, $_POST['Nama']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $kdk = mysqli_real_escape_string($db, $_POST['Kelas']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
    $tmp = mysqli_real_escape_string($db, $_POST['tmp']);
    $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
    $birthdate = explode('/', $birthdate);
    $ekstensi_diperbolehkan = array(
        'jpg',
        'jpeg',
        'png',
    );
    $date = "$birthdate[2]-$birthdate[0]-$birthdate[1]";

    $file = $_FILES['file']['name'];
    $x = explode('.', $file);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 10485760) {
            move_uploaded_file($file_tmp, 'file/user-profile/' . $file);
            $sql = "UPDATE guru SET nip='$nip',pass='$pass',nama='$nama',status='$kdk',alamat='$alamat',tmp_lahir='$tmp',tgl_lahir='$date',jns_kelamin='$gender',foto_profil='$file' WHERE kd_guru= $kd";
            $jumlah = count($_POST['mapel']); //menghitung jumlah value yang di centang
            for ($i = 0; $i < $jumlah; $i++) {
                $kodeinput[$i] = $_POST['mapel'][$i];
            }
            $sqlmapel = "SELECT kd_gm,kd_guru, kd_mapel FROM guru_mapel WHERE kd_guru = $kd";
            $rmapel = mysqli_query($db, $sqlmapel);
            $a = 0;
            $kodemapel;
            while ($row = mysqli_fetch_array($rmapel)) {
                $kodemapel[$a] = $row['kd_mapel'];
                $a++;
            }

            foreach ($kodeinput as $value) {
                if (in_array($value, $kodemapel)) {

                } else {
                    $quri = "INSERT INTO guru_mapel(kd_guru, kd_mapel) VALUES ('$kd', '$value')";
                    mysqli_query($db, $quri);

                }
            }

            $result = mysqli_query($db, $sql);
            if ($result == 1) {
                echo "<script>alert('Berhasil di Simpan');history.go(-2);</script>";
            } else {
                echo $sql;
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo "<script>alert('FILE YANG DI UPLOAD HARUS BERFOMAT jpg,png ATAU jpeg');history.go(-1);</script>";
    }
}
