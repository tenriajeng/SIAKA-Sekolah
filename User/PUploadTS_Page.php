<?php
include ("Config/Connection.php");

session_start();
$user = $_SESSION['kd'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ekstensi_diperbolehkan = array(
		'docx',
		'pdf'
	);
	$tugas = mysqli_real_escape_string($db, $_POST['nama']);
	$link = mysqli_real_escape_string($db, $_POST['link']);
	$kd = mysqli_real_escape_string($db, $_POST['kd']);
	$kdk = mysqli_real_escape_string($db, $_POST['kdk']);
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 10485760) {
			move_uploaded_file($file_tmp, 'file/' . $nama);
			$sql = "INSERT INTO jawaban(kd_siswa, kd_tugas, kd_kelas, link, nama_file) VALUES('$user','$kd','$kdk' ,'$link','$nama'   )";
			if ($db->query($sql) === TRUE) {
				header("location: Tugas_Page.php");
			}
			else {
				echo "Error: " . $sql . "<br />" . $conn->error;
			}
		}
		else {
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}
	else {
		echo "<script>alert('FILE YANG DI UPLOAD HARUS BERFOMAT PDF ATAU DOCX');history.go(-1);</script>";
	}
}

?>