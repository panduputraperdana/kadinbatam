<?php
include ("config.php");

@$id=$_POST ['id'];
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
 
//Disini query untuk mengupdate
$mysqli= "UPDATE data_usaha SET nama_lengkap='$nama_lengkap', no_anggota='$no_anggota', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email', nama_usaha='$nama_usaha', nama_penanggungjawab='$nama_penanggungjawab', tahun_berdiri='$tahun_berdiri', kondisi_usaha='$kondisi_usaha', alamat_usaha='$alamat_usaha', npwp='$npwp', no_hp='$no_hp', email_perusahaan='$email_perusahaan', website_perusahaan='$website_perusahaan', account_facebook='$account_facebook', account_instagram='$account_instagram', badan_usaha='$badan_usaha', kategori_produk='$kategori_produk' where id='$id'";
$result=mysqli_query($con,$mysqli);
 

if ($result){
    echo "<script>alert('Update Berhasil!')
    location.replace('../page/datausaha.php')</script>";
}else{
    echo "<script>alert('Update Gagal!')
    location.replace('../page/datausaha.php')</script>";
}
?>