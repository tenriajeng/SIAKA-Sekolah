<?php
include("Config/Connection.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ekstensi_diperbolehkan = array(
        'docx',
        'pdf'
    );
    $tugas                 = mysqli_real_escape_string($db, $_POST['judul']);
    $kelas                 = mysqli_real_escape_string($db, $_POST['Kelas']);
    $mapel                 = mysqli_real_escape_string($db, $_POST['mapel']);
    $nama                   = $_FILES['file']['name'];
    $x                      = explode('.', $nama);
    $ekstensi               = strtolower(end($x));
    $ukuran                 = $_FILES['file']['size'];
    $file_tmp               = $_FILES['file']['tmp_name'];
    $kd = $_POST['kd'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 3044070) {
            move_uploaded_file($file_tmp, 'file/' . $nama);
            $sql = "UPDATE tugas SET nama_tugas = '$tugas',kd_kelas = '$kelas',kd_mapel = '$mapel',nama_file = '$nama' WHERE kd_tugas = $kd;";

            if ($db->query($sql) === TRUE) {
                echo "<script>alert('Berhasil Di Simpan');history.go(-1);</script>"; 

            } else {
                echo "Error: " . $sql . "<br>" . $db->error;
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD HARUS BERFOMAT PDF ATAU DOCX');history.go(-1);</script>"; 
    }
}


?>