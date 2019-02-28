<?php
include ("Config/Connection.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ekstensi_diperbolehkan = array(
		'jpg',
		'png'
	);
	// $tugas = mysqli_real_escape_string($db, $_POST['judul']);
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 10485760) {
			move_uploaded_file($file_tmp, 'file/gallery/' . $nama);
			$sql = "INSERT INTO galeri (nama_foto) VALUES( '$nama')";
			$result = mysqli_query($db,$sql);
			if($result==1){
				echo "<script>alert('Berhasil di Simpan');history.go(-2);</script>";
		}
		else{
				echo $sql;
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