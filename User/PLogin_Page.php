<?php
   include("Config/Connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $mylevel    = mysqli_real_escape_string($db,$_POST['level']);
      if($mylevel=="siswa"){
         $sql = "SELECT kd_siswa,foto_profil,kd_kelas FROM $mylevel WHERE nama = '$myusername' and nis = '$mypassword'";
      }
      elseif($mylevel=="guru"){
         $sql = "SELECT kd_guru,nip,nama,foto_profil,status FROM $mylevel WHERE nip = '$myusername' and pass = '$mypassword'";
      }
      elseif($mylevel=="admin"){
         $sql = "SELECT kd_admin,foto_profil FROM $mylevel WHERE username = '$myusername' and pass = '$mypassword'";
      }
      
      $result = mysqli_query($db,$sql);
      if($result==null){
         echo "<script>alert('Data Yang Dimasukkan Salah');history.go(-1);</script>";
      }
      else{
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $kd = $row['kd_siswa'];
         $f = $row['foto_profil'];
         $kdk="";
         if($mylevel=="siswa"){
            $kdk = $row['kd_kelas'];
            $kd = $row['kd_siswa'];
         }
         else if($mylevel=="guru"){
            $kdk = $row['status'];
            $myusername = $row['nama'];
            $kd = $row['kd_guru'];
            $mypassword = $row['nip'];
         }
         else {
            $kdk = "0";
         }
         $count = mysqli_num_rows($result);
      
         if($count == 1) {
            $_SESSION['foto'] = $f;
            $_SESSION['pass'] = $mypassword;
            $_SESSION['login_user'] = $myusername;
            $_SESSION['level_user'] = $mylevel;
            $_SESSION['kd'] = $kd;
            $_SESSION['kdk'] = $kdk;
            if($mylevel=="admin"){
               header("location: Dashboard.php");
            }
            if($mylevel=="guru"){
               header("location: Nilai_siswaG.php");
            }
            if($mylevel=="siswa"){
               header("location: Nilai_siswa.php");

            }
         }else {
            // echo "<script>alert('Data Yang Dimasukkan Salah');history.go(-1);</script>";
            echo  $myusername;
         }
      }
      
   }
?>