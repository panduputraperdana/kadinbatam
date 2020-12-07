<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>

    <link rel="shortcut icon" href="../assets/img/kadinbatam.png">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
<style>

p {
        font-weight: 100;
        font-size: 13.3px;
    }
</style>
</head>

<body>

<div class="container">
    <div class="card card-container" style="width: 40%; margin-top: 70px; height: 90vh;">
        <img src="../assets/img/kadinbatam.png" class="rounded mx-auto d-block" alt="" width="95%">
            <p id="profile-name" class="profile-name-card"></p>
            <form action="../controller/proses_login.php" method="POST" autocomplete="off">
            <div class="form-group">
                    <label> ID User</label>
                    <input type="text" class="form-control form-control-sm" name="user_no" />
                </div>
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control form-control-sm" name="password" />
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-sm btn-primary w-100" name="login">Login</button>
                </div>
                <a href="../index.php">Kembali</a>
                <p>Not a member?
        <a href="../page/register.php">Register</a>
    </p>
            </form>
            <br />
            <hr />
            <p class="text-sm-center">Copyright © 2020 - Powered By Ruang Kreasi</p>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/style.js"></script>
</body>

</html>