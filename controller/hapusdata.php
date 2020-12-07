<?php
  // defenisikan koneksi
  require('config.php');
  // cek apakah ada parameter ID dikirim
  if (isset($_GET['id'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['id'];
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql    = "DELETE from data_usaha WHERE id='".$id."'";
    // hapus data pada database
    $query  = mysqli_query($con,$sql);
    if($query){ //jika berhasil
      echo "<script>alert('Data Berhasil Dihapus!');document.location='../page/datausaha.php'</script>";
  }else{  //jika gagal
      echo "<script>alert('Data Gagal Dihapus!');document.location='../page/datausaha.php'</script>";
  }
  }
 ?>