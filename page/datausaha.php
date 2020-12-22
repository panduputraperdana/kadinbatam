<?php include('../controller/akses.php'); ?>

<?php include('../controller/config.php'); ?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/img/kadinbatam.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <title>Data Usaha</title>
</head>

<body>
    <img src="../assets/img/kadinbatam.png" alt="" width="25%">
    

    <h2 style="text-align: center;">Data Usaha Anggota Kadin Batam</h2>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-lg-32">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-left" style="float: left; margin-top: 10px;">Data Usaha</h5> <a href="home.php"
                            class="btn btn-warning waves-effect waves-themed" style="float: right;"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <a href="../page/daftar.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <form action="datausaha.php" method="get" style="float: right;" autocomplete="off">
	                    <label>Cari :</label>
	                    <input type="text" name="cari">
	                    <input type="submit" value="Cari">
                         </form>

                         <?php 
                        if(isset($_GET['cari'])){
	                    $cari = $_GET['cari'];
                        }
                        ?>
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                          
                                    <th scope="col">NO.</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">No Anggota</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nama Usaha</th>
                                    <th scope="col">Nama Penanggung Jawab</th>
                                    <th scope="col">Tahun Berdiri</th>
                                    <th scope="col">Kondisi Usaha</th>
                                    <th scope="col">Alamat Usaha</th>
                                    <th scope="col">NPWP</th>
                                    <th width="45%" scope="col">No Hp</th>
                                    <th scope="col">Alamat Email</th>
                                    <th scope="col">Alamat Website</th>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Instagram</th>
                                    <th scope="col">Badan Usaha</th>
                                    <th scope="col">Produk</th>
                                    <th colspan="2" scope="colgroup" style="text-align: center;">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            
                            <?php 
	                       if(isset($_GET['cari'])){
		                    $cari = $_GET['cari'];
		                    $query = mysqli_query($con,"SELECT * FROM data_usaha where nama_lengkap like '%".$cari."%'");			
	                        }else{
                            $query = mysqli_query($con,"SELECT * FROM data_usaha");		
	                        }
	                        $no = 1;
	                         while($row = mysqli_fetch_array($query)){
                            ?>
                            
                            <?php
    
    $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
    
    // Jumlah data per halaman
    $limit = 15;

    $limitStart = ($page - 1) * $limit;
              
    $query = mysqli_query($con, "SELECT * FROM data_usaha LIMIT ".$limitStart.",".$limit);
    
    $no = $limitStart + 1;
    
    while($row = mysqli_fetch_array($query)){ 
    ?>


                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nama_lengkap'] ?></td>
                                    <td><?php echo $row['no_anggota'] ?></td>
                                    <td><?php echo $row['jenis_kelamin'] ?></td>
                                    <td><?php echo $row['alamat'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['nama_usaha'] ?></td>
                                    <td><?php echo $row['nama_penanggungjawab'] ?></td>
                                    <td><?php echo $row['tahun_berdiri'] ?></td>
                                    <td><?php echo $row['kondisi_usaha'] ?></td>
                                    <td><?php echo $row['alamat_usaha'] ?></td>
                                    <td><?php echo $row['npwp'] ?></td>
                                    <td><?php echo $row['no_hp'] ?></td>
                                    <td><?php echo $row['email_perusahaan'] ?></td>
                                    <td><?php echo $row['website_perusahaan'] ?></td>
                                    <td><?php echo $row['account_facebook'] ?></td>
                                    <td><?php echo $row['account_instagram'] ?></td>
                                    <td><?php echo $row['badan_usaha'] ?></td>
                                    <td><?php echo $row['kategori_produk'] ?></td>
                                    <td class=text-left">
                                        <?php if($_SESSION["user"]["id"] === $row['id_user'])   {?> 
                                        <a href="editdata.php?id=<?php echo $row['id'] ?>"
                                            class="btn btn-sm btn-primary">EDIT</a></td>
                                            <td class="text-right">
                                        <a href="../controller/hapusdata.php?id=<?php echo $row['id'] ?>"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                                             HAPUS</td>
                                        <?php };?>
                                </tr>
                                <?php  
                }
            ?>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                        <hr>
  <ul class="pagination">
    <?php
    if($page == 1){ 
    ?>        
      <li class="disabled"><a class="page-link" href="#">Previous</a></li>
    <?php
    }
    else{ 
      $LinkPrev = ($page > 1)? $page - 1 : 1;
    ?>
      <li class="page-item"><a class="page-link" href="datausaha.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
    <?php
      }
    ?>
    <?php
    $query = mysqli_query($con, "SELECT * FROM data_usaha");        
    $JumlahData = mysqli_num_rows($query);
    $jumlahPage = ceil($JumlahData/$limit); 
    $jumlahNumber = 1; 
    $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
    $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
    for($i = $startNumber; $i <= $endNumber; $i++){
      $linkActive = ($page == $i)? ' class="active"' : '';
    ?>
      <li class="page-item"?php echo $linkActive; ?><a class="page-link" href="datausaha.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php
      }
    ?>
    
    <?php       
    if($page == $jumlahPage){ 
    ?>
      <li class="disabled"><a class="page-link" href="#">Next</a></li>
    <?php
    }
    else{
      $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
    ?>
      <li class="page-item"><a class="page-link" href="datausaha.php?page=<?php echo $linkNext; ?>">Next</a></li>
    <?php
    }
    ?>
  </ul>
                    </div>
                </div>
            </div>
</div>

<footer class="bg-light py-4">
            <div class="container">
                <div class="small text-center text-muted" style="text-align: center;">Copyright © 2020 - Powered By
                    Ruang Kreasi</div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-1.7.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>

