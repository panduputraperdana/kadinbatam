<?php
   session_start();
   if(isset($_SESSION['id_user'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>

<link rel="shortcut icon" href="../assets/img/kadinbatam.png">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">


<style>
p {
        font-weight: 100;
        font-size: 13.3px;
    }
</style>

<div class="container">
        <div class="card card-container" style="width: 50%; margin-top: 60px;">
        <img src="../assets/img/kadinbatam.png" alt="" width="95%">
            <p id="profile-name" class="profile-name-card"></p>
            <form action="../controller/proses_registrasi.php" method="POST" autocomplete="off">
            <div class="form-group">
                    <label> ID User</label>
                    <input type="text" class="form-control form-control-sm" name="user_no" />
                </div>
                <div class="form-group">
                <label> Nama </label>
                <input type="text" class="form-control form-control-sm" name="nama" />
            </div>
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control form-control-sm" name="password" />
                </div>
                <div class="form-group">
                <label> Konfirmasi Password </label>
                <input type="password" class="form-control form-control-sm" name="konfirmasi_password" />
            </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-sm btn-primary w-100" name="login">Register</button>
                </div>
                <a href="../index.php">Kembali</a>
                <p>Already have an account?
        <a href="../page/login.php">Login</a>
    </p>
            </form>
            <br />
            <hr />
            <p class="text-sm-center">Copyright &copy 2020 - Powered By Ruang Kreasi</p>
        </div>
<script src="..assets/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../assets/js/style.js"></script>
</div>