<?php
include "../controller/config.php";
$id = $_GET['id'];
$query = mysqli_query($con,"SELECT * FROM data_usaha where id='$id'") or die (mysqli_error($con)) ;
$no =1;
while($row = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="shortcut icon" href="../assets/img/kadinbatam.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron card card-image" style="background-image: url(../assets/img/cek.jpg);" style=" opacity: 30%;">
        <img src="../assets/img/kadinbatam.png" alt="" width="20%" style="margin-left: 50px;">
        <div class="col-md-10 offset-md-1 mt-2">
            <div class="card card-body">
                <div class="card-header">
                    <h5 class="text-left" style="float: left; margin-top: 10px;">Form Edit Data Pelaku Usaha UMKM</h5>
                    <a href="../page/home.php" class="btn btn-warning waves-effect waves-themed" style="float: right;"></i>
                        Kembali</a>
                </div>
                <div class="card-body">
                    <p class="card-text">Silahkan lengkapi data anda dengan baik dan benar</p>
                </div>
                <div class="card card-body">
                    <form action="../controller/update.php" method="POST">
                        <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                        <div class="card-header">
                            <h5>DATA DIRI</h5>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="">Nama Lengkap<small class="font-italic help-block">(wajib
                                        diisi)</small></label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    value="<?php echo $row['nama_lengkap'];?>" required="required"
                                    placeholder="Nama Lengkap">
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="">Nomor Anggota<small class="font-italic help-block">(wajib
                                        diisi)</small></label>
                                <input type="number" class="form-control" id="no_anggota" name="no_anggota"
                                    value="<?php echo $row['no_anggota'];?>" required="required"
                                    placeholder="Nomor Anggota">
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="">Jenis Kelamin <small class="font-italic help-block">(wajib
                                        dipilih)</small></label>
                                <div class="frame-wrap">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" required="required"
                                            id="defaultUnchecked" name="jenis_kelamin" value="Laki-Laki"
                                            <?php if($row['jenis_kelamin']=='Laki-Laki') echo 'checked'?>>
                                        <label class="custom-control-label" for="defaultUnchecked">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" required="required"
                                            id="defaultIndeterminate" name="jenis_kelamin" value="Perempuan"
                                            <?php if($row['jenis_kelamin']=='Perempuan') echo 'checked'?>>
                                        <label class="custom-control-label" for="defaultIndeterminate">Perempuan</label>
                                        </divabel class="custom-control-label" for="defaultIndeterminate">
                                        </label>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Alamat<small class="font-italic help-block">(wajib
                                                diisi</small></label>
                                        <textarea class="form-control" id="alamat" name="alamat" required="required"
                                            rows="3"><?php echo $row['alamat'];?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email<small class="font-italic help-block">(wajib
                                                diisi)</small></label>
                                        <input type="" class="form-control" id="email" name="email"
                                            value="<?php echo $row['email'];?>" required="required" placeholder="Email">
                                    </div>
                                </div>

                            </div>
                            <div class="card card-body">
                                <div class="card-header">
                                    <h5>Data Brand Usaha/Industri</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Nama atau Brand Usaha/Industri<small
                                                class="font-italic help-block">(wajib
                                                diisi)</small></label>
                                        <input type="text" class="form-control" id="nama_usaha" name="nama_usaha"
                                            value="<?php echo $row['nama_usaha'];?>" required="required"
                                            placeholder="Nama Brand">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">Nama Penanggung Jawab Perusahaan<small
                                                class="font-italic help-block">(wajib diisi)</small></label>
                                        <input type="text" class="form-control" id="nama_penanggungjawab"
                                            name="nama_penanggungjawab"
                                            value="<?php echo $row['nama_penanggungjawab'];?>" required="required"
                                            placeholder="Nama Penanggung Jawab">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">Tahun Berdiri<small class="font-italic help-block">(wajib
                                                diisi)</small></label>
                                        <input type="number" class="form-control" id="tahun_berdiri"
                                            name="tahun_berdiri" value="<?php echo $row['tahun_berdiri'];?>"
                                            required="required" placeholder="Mulai Mendirikan Usaha Sejak">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">Kondisi Usaha/Industri Saat Ini <small
                                                class="font-italic help-block">(wajib dipilih)</small></label>
                                        <div class="frame-wrap">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="kondisi_usaha1"
                                                    name="kondisi_usaha" value="Masih Berjalan"
                                                    <?php if($row['kondisi_usaha']=='Masih Berjalan') echo 'checked'?>>
                                                <label class="custom-control-label" for="kondisi_usaha1">Masih
                                                    Berjalan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="kondisi_usaha2"
                                                    name="kondisi_usaha" value="Sudah Tutup"
                                                    <?php if($row['kondisi_usaha']=='Sudah Tutup') echo 'checked'?>>
                                                <label class="custom-control-label" for="kondisi_usaha2">Sudah
                                                    Tutup</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">Alamat<small class="font-italic help-block">(wajib
                                                diisi</small></label>
                                        <textarea class="form-control" id="alamat_usaha" name="alamat_usaha"
                                            required="required" rows="3"><?php echo $row['alamat_usaha'];?></textarea>
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">Npwp Perusahaan<small class="font-italic help-block">(wajib
                                                diisi)</small></label>
                                        <input type="number" class="form-control" id="npwp" name="npwp"
                                            value="<?php echo $row['npwp'];?>" required="required"
                                            placeholder="Nomor Hp/Wa">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">No Hp atau No Wa<small class="font-italic help-block">(wajib
                                                diisi)</small></label>
                                        <input type="number" class="form-control" id="no_hp" name="no_hp"
                                            value="<?php echo $row['no_hp'];?>" required="required"
                                            placeholder="Nomor Hp/Wa">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">Alamat Email</label>
                                        <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan"
                                            value="<?php echo $row['email_perusahaan'];?>" required="required"
                                            placeholder="Alamat Email">
                                        <i>pastikan email yang diinputkan masih aktif dan digunakan</i>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat website</label>
                                        <input type="text" class="form-control" id="website_perusahaan"
                                            name="website_perusahaan" value="<?php echo $row['website_perusahaan'];?>"
                                            required="required" placeholder="Alamat Website">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Akun facebook</label>
                                        <input type="text" class="form-control" id="account_facebook" name="account_facebook"
                                            value="<?php echo $row['account_facebook'];?>" required="required"
                                            placeholder="Akun Facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Akun Instagram</label>
                                        <input type="text" class="form-control" id="account_instagram" name="account_instagram"
                                            value="<?php echo $row['account_instagram'];?>" required="required"
                                            placeholder="Akun Instagram">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="">Badan usaha/Legalitas usaha <small
                                                class="font-italic help-block">(wajib dipilih)</small></label>
                                        <div class="frame-wrap">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="badan_usaha1"
                                                    name="badan_usaha" value="Belum ada"
                                                    <?php if($row['badan_usaha']=='Belum ada') echo 'checked'?>>
                                                <label class="custom-control-label" for="badan_usaha1">Belum Ada
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="badan_usaha2"
                                                    name="badan_usaha" value="Koperasi"
                                                    <?php if($row['badan_usaha']=='Koperasi') echo 'checked'?>>
                                                <label class="custom-control-label" for="badan_usaha2">Koperasi
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="badan_usaha3"
                                                    name="badan_usaha" value="CV"
                                                    <?php if($row['badan_usaha']=='CV') echo 'checked'?>>
                                                <label class="custom-control-label" for="badan_usaha3">CV
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="badan_usaha4"
                                                    name="badan_usaha" value="PT"
                                                    <?php if($row['badan_usaha']=='PT') echo 'checked'?>>
                                                <label class="custom-control-label" for="badan_usaha4">PT
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="badan_usaha5"
                                                    name="badan_usaha" value="Yayasan"
                                                    <?php if($row['badan_usaha']=='Yayasan') echo 'checked'?>>
                                                <label class="custom-control-label" for="badan_usaha5">
                                                    Yayasan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="badan_usaha6"
                                                    name="badan_usaha" value="Perseorangan"
                                                    <?php if($row['badan_usaha']=='Perseorangan') echo 'checked'?>>
                                                <label class="custom-control-label" for="badan_usaha6">Perseorangan
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <br />
                                    <div class="form-group">
                                        <label for="produk">Kategori produk<small class="font-italic help-block">(wajib
                                                dipilih)</small></label>
                                        <select class="form-control" id="kategori_produk" name="kategori_produk">
                                            <option selected>--Pilih Kategori Produk--</option>
                                            <option value="Kerajinan"
                                                <?php if($row['kategori_produk'] == 'Kerajinan'){ echo 'selected'; } ?>>
                                                Kerajinan </option>
                                            <option value="Konveksi dan Busana"
                                                <?php if($row['kategori_produk'] == 'Konveksi dan busana'){ echo 'selected'; } ?>>
                                                Konveksi dan busana</option>
                                            <option value="Olahan Makanan/Minuman"
                                                <?php if($row['kategori_produk'] == 'Olahan Makanan/Minuman'){ echo 'selected'; } ?>>
                                                Olahan Makanan/Minuman</option>
                                            <option value="Perikanan"
                                                <?php if($row['kategori_produk'] == 'Perikanan'){ echo 'selected'; } ?>>
                                                Perikanan</option>
                                            <option value="Pertanian,perkebunan,kehutanan"
                                                <?php if($row['kategori_produk'] == 'Pertanian,perkebunan,kehutanan'){ echo 'selected'; } ?>>
                                                Pertanian,perkebunan,kehutanan</option>
                                            <option value="Pertenakan"
                                                <?php if($row['kategori_produk'] == 'Pertenakan'){ echo 'selected'; } ?>>
                                                Pertenakan</option>
                                            <option value="Perdagangan"
                                                <?php if($row['kategori_produk'] == 'Perdagangan'){ echo 'selected'; } ?>>
                                                Perdagangan</option>
                                            <option value="Jasa"
                                                <?php if($row['kategori_produk'] == 'Jasa'){ echo 'selected'; } ?>>Jasa</option>
                                            <option value="Inovatif dan Kreatif"
                                                <?php if($row['kategori_produk'] == 'Inovatif dan Kreatif'){ echo 'selected'; } ?>>
                                                Inovatif dan Kreatif</option>
                                            <option value="Teknologi"
                                                <?php if($row['kategori_produk'] == 'Teknologi'){ echo 'selected'; } ?>>Teknologi
                                            </option>
                                            <option value="Otomotif"
                                                <?php if($row['kategori_produk'] == 'Otomotif'){ echo 'selected'; } ?>>Otomotif
                                            </option>
                                            <option value="Event Organizer"
                                                <?php if($row['kategori_produk'] == 'Event Organizer'){ echo 'selected'; } ?>>Event Organizer
                                            </option>
                                            <option value="Tour & Travel"
                                                <?php if($row['kategori_produk'] == 'Tour & Travel'){ echo 'selected'; } ?>>Tour & Travel
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-header">
                            <p>Demikian jawaban, data, dan informasi beserta seluruh dokumen yang Saya berikan dalam
                                form di
                                atas adalah benar dan dapat dipertanggungjawabkan.
                            </p>
                            <button class="btn btn-secondary" type="submit"
                                onclick="return confirm('Apakah Anda Yakin Ingin Mengupdate Data Ini?')"
                                value="update">Kirim Data</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>



            <footer class="bg-light py-5">
                <div class="container">
                    <div class="small text-center text-muted">Copyright © 2020 - Powered By Ruang Kreasi</div>
                </div>
            </footer>

        </div>
</body>

</html>