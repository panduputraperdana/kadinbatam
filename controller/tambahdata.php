<?php 
    include 'config.php';
        @$id_user = $_POST["id"];
        @$nama_lengkap                   = $_POST['nama_lengkap'];
        @$no_anggota                     = $_POST['no_anggota'];
        @$jenis_kelamin                  = $_POST['jenis_kelamin'];
        @$alamat                         = $_POST['alamat'];
        @$email                          = $_POST['email'];
        @$nama_usaha                     = $_POST['nama_usaha'];
        @$nama_penanggungjawab           = $_POST['nama_penanggungjawab'];
        @$tahun_berdiri                  = $_POST['tahun_berdiri'];
        @$kondisi_usaha                  = $_POST['kondisi_usaha'];
        @$alamat_usaha                   = $_POST['alamat_usaha'];
        @$npwp                           = $_POST['npwp'];
        @$no_hp                          = $_POST['no_hp'];
        @$email_perusahaan               = $_POST['email_perusahaan'];
        @$website_perusahaan             = $_POST['website_perusahaan'];
        @$account_facebook               = $_POST['account_facebook'];
        @$account_instagram              = $_POST['account_instagram'];
        @$badan_usaha                    = $_POST['badan_usaha'];
        @$kategori_produk                = $_POST['kategori_produk'];
        @$simpan                          = $_POST['simpan']; 

        if ( count($_POST) ) { 
        
        $mysqli = "INSERT INTO data_usaha (id_user ,nama_lengkap, no_anggota, jenis_kelamin, alamat, email, nama_usaha, nama_penanggungjawab, tahun_berdiri, kondisi_usaha, alamat_usaha, npwp, no_hp, email_perusahaan, website_perusahaan, account_facebook, account_instagram, badan_usaha, kategori_produk)  VALUES ('$id_user','$nama_lengkap','$no_anggota','$jenis_kelamin','$alamat','$email','$nama_usaha','$nama_penanggungjawab','$tahun_berdiri','$kondisi_usaha','$alamat_usaha','$npwp','$no_hp','$email_perusahaan','$website_perusahaan','$account_facebook','$account_instagram','$badan_usaha','$kategori_produk')";
        $result  = mysqli_query($con, $mysqli) or die(mysqli_error($con)); 
        if ($result) {
            echo "<script>alert('Data berhasil di tambahkan!');
            window.location.href = '../page/datausaha.php';</script>";
        } else {
            echo 'gagal';
           // echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
        }
        mysqli_close($con);
        }
?>