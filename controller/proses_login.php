<?php
    require_once("config.php");
    
    $user_no = $_POST['user_no'];
    $password = $_POST['password'];

    if(!$user_no || !$password){
        echo "<script> alert('Ada field yang kosong!!');</script>";
    } else{
        $query = "SELECT password FROM user WHERE user_no = '$user_no'";
        $result = $con->query($query)->fetch_assoc();
        $getPassword = $result["password"];
        $checking_password = password_verify($password, $getPassword);

        if(!$checking_password){
            echo "<script> alert('Invalid user/password'); window.location.href = 'page/login.php';</script>";
        } else { 
            $getUserData = $con->query("SELECT id, user_no, nama FROM `user` WHERE user_no = '$user_no'")->fetch_assoc();
    
            if(!$getUserData) {
                echo " <script> alert('Tidak ada user dengan nomor tersebut!'); </script>";
            } else {
                session_start();
                $_SESSION['user']['id'] = $getUserData['id'];
                $_SESSION['user']['user_no'] = $getUserData['user_no'];
                $_SESSION['user']['nama'] = $getUserData['nama'];    
                echo "<script> alert('Login berhasil'); window.location.href = '../page/home.php'; </script>";
            }
        }
    } 
?>