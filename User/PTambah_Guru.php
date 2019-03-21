<?php
     include("Config/Connection.php");
     session_start();
     
     if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nip = mysqli_real_escape_string($db,$_POST['NIP']);
        $nama = mysqli_real_escape_string($db,$_POST['Nama']);
        $kdk = mysqli_real_escape_string($db,$_POST['Kelas']);
        $gender = mysqli_real_escape_string($db,$_POST['gender']);
        $alamat = mysqli_real_escape_string($db,$_POST['alamat']);
        $tmp = mysqli_real_escape_string($db,$_POST['tmp']);
        $birthdate = mysqli_real_escape_string($db,$_POST['birthdate']);
        $birthdate = explode('/',$birthdate);
        $ekstensi_diperbolehkan = array(
		'jpg',
		'jpeg'
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
			$sql = "INSERT INTO guru(status, nip, nama, alamat, jns_kelamin, tmp_lahir,tgl_lahir,foto_profil) 
                                VALUES ('$kdk','$nip','$nama','$alamat','$gender','$tmp','$date','$file')";
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
		echo "<script>alert('FILE YANG DI UPLOAD HARUS BERFOMAT jpg ATAU jpeg');history.go(-1);</script>";
        }
}
        
?>