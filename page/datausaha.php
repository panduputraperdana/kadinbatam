<?php include('../controller/akses.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="kadinbatam.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/datatables/datatables.css">
    <link rel="stylesheet" href="../assets/datatables/datatables.min.css">
    <link rel="stylesheet" href="../assets/datatables/dataTables.boostrap4.min.css">
    <title>Data Usaha</title>
</head>

<body>
    <img src="../assets/img/kadinbatam.png" alt="" width="25%">
    

    <h2 style="text-align: center;">Data Usaha Anggota Kadin Batam</h2>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-22">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-left" style="float: left; margin-top: 10px;">Data Usaha</h5> <a href="home.php"
                            class="btn btn-warning waves-effect waves-themed" style="float: right;"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <a href="../page/daftar.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <form action="index.php" method="get">
                       <input type="submit" value="Cari" style="float: right;">
                        <input type="text" name="cari" style="float: right;">
                        </form>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th width= scope="col">NO.</th>
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
                                    <th scope="col">Npwp</th>
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
                      include('../controller/config.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM data_usaha");
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
                                    <td class="text-left">

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

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="...">
  <ul class="pagination" style="float: right; margin-right: 14px;">
    <li class="page-item">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
                </div>
            </div>
                                        </div>
        <footer class="bg-light py-4">
            <div class="container">
                <div class="small text-center text-muted" style="text-align: center;">Copyright © 2020 - Powered By
                    Ruang Kreasi</div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/datatables/datatables.js"></script>
    <script src="../assets/datatables/datatables.min.js"></script>
    <script src="../assets/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>
</body>

</html