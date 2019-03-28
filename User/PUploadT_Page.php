<?php
include ("Config/Connection.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ekstensi_diperbolehkan = array(
		'docx',
		'pdf',
		'mp4',
		'xlsx',
		'rar',
		'zip'
	);
	$tugas = mysqli_real_escape_string($db, $_POST['judul']);
	$kelas = mysqli_real_escape_string($db, $_POST['Kelas']);
	$mapel = mysqli_real_escape_string($db, $_POST['mapel']);
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 10485760) {
			move_uploaded_file($file_tmp, 'file/' . $nama);
			$sql = "INSERT INTO tugas (nama_tugas, nama_file, kd_kelas, kd_mapel) VALUES('$tugas', '$nama', '$kelas', '$mapel')";
			if ($db->query($sql) === TRUE) {
				echo "<script>alert('Berhasil Di Upload');history.go(-2);</script>";
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
		echo "<script>alert('FILE YANG DI UPLOAD HARUS BERFOMAT PDF,DOCX,MP4,XLSX,RAR ATAU ZIP');history.go(-1);</script>";
	}
}

?>