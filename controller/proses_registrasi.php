<?php
  require_once("config.php");
  $user_no = $_POST['user_no'];
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $konfirmasi_password = $_POST['konfirmasi_password'];
  
  if($password !== $konfirmasi_password){
    echo "<script>alert('password tidak sama!'); window.location.href = '../page/register.php';</script>";
  }

  if(!$user_no || !$nama || !$password) {
    echo "<script>alert('Ada field yang kosong!');
        window.location.href = '../page/login.php';</script>";
  } else {
    $userNo = "SELECT * FROM user WHERE user_no = '$user_no'";
    $query = $con->query($userNo);
    if($query->num_rows !== 0) {
      echo "<script>alert('ID Sudah Terdaftar'); window.location.href = '../page/register.php';</script>";
    } else {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $insertData = "INSERT INTO user (user_no, nama, password) VALUES ('$user_no', '$nama', '$hashed_password')";
      if (mysqli_query($con, $insertData)) {
        echo "<script>alert('Registrasi Berhasil');
        window.location.href = '../page/login.php';</script>";
      } else {
        echo "<div align='center'>Proses Gagal!</div>";
      } 
    }
  }
?>