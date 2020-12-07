<?php include('../controller/akses.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadin Kota Batam</title>
    <link rel="shortcut icon" href="../assets/img/kadinbatam.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>


<body id="page-top">

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-light fixed-top  info-color">
        <a class="navbar-brand" href="#page-top"><img src="../assets/img/kadinbatam.png" alt="" width="20%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#contact"
                        style="font-weight: bold; color: green; font-family: 'Sansita Swashed', cursive;">
                        Hubungi Kami
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../page/datausaha.php"
                        style="font-weight: bold; color: green; font-family: 'Sansita Swashed', cursive;">
                        Data Usaha</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        style="font-weight: bold; color: green; font-family: 'Sansita Swashed', cursive;;">
                        <?php echo  $_SESSION['user']['nama']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="../page/change_password.php"
                            style="font-weight: bold; color: green; font-family: 'Sansita Swashed', cursive;">Change
                            Password</a>
                        <a class="dropdown-item" href="../controller/logout.php"
                            style="font-weight: bold; color: green; font-family: 'Sansita Swashed', cursive;;">Log
                            out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    <div class="jumbotron card card-image" style="background-color: whitesmoke; height: 120vh;">
        <div class="text-dark text-center py-3 px-4">
            <div>
                <img src="../assets/img/kadinbatam.png" alt="" width="30%" style="opacity: unset; margin-top: 50px;">
                <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"
                    style="margin-top: 50px; font-family: 'Times New Roman', Times, serif; "><strong>DATABASE USAHA
                        ANGGOTA KADIN BATAM</strong></h2>
                <p class="mx-5 mb-5" style="font-weight: bold; color: black; font-size: medium; opacity: unset;"> Kadin
                    Batam atau yang disebut Kamar Dagang dan Industri Batam yang beralamat di Graha Kadin Blok A Lt. II,
                    Jl. Engku Putri Batam Center Batam, Kepulauan Riau Indonesia 29443
                </p>
                <p class="mx-3 mb-3"
                    style="font-weight: bold; color: black; font-family: Verdana, Geneva, Tahoma, sans-serif;">Silahkan
                    daftar Usaha Anda</p>
                <a class="btn btn-primary btn-xl" href="../page/daftar.php">Daftarkan Usaha/Industri Anda</a>
            </div>
        </div>
    </div>

    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Hubungi Kami</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Silahkan kirim pesan ke kami jika ada yang ingin ditanyakan</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <img src="../assets/img/tel1.png" alt="" width="30%">
                    <div>
                        <a href="tel:0778468181" class="elementor-button-link elementor-button elementor-size-sm"
                            role="button">
                            Telp:0778 - 468181
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <img src="../assets/img/gmail.png" alt="" width="30%">
                    <a class="d-block" href="mailto:kadinbatam2014@gmail.com">kadinbatam2014@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Powered By Ruang Kreasi</div>
        </div>
    </footer>
</body>

</html>