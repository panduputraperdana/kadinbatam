<?php include('../controller/akses.php'); ?>
 <?php
 $db = new mysqli('localhost', 'root', '', 'kadinbatam');
 if(isset($_POST['submit'])):
   extract($_POST);
    @$user_id = $_SESSION['user']['user_id'];
    $old_pwd=($_POST['old_password']);
    $pwd=($_POST['password']);
    $c_pwd=($_POST['confirm_pwd']);
    $hashed_password = password_hash($old_pwd, PASSWORD_DEFAULT);
    $newpw= password_hash($pwd, PASSWORD_DEFAULT);
    if($old_password!="" && $password!="" && $confirm_pwd!="") :
    if($pwd == $c_pwd) :
       if($pwd!=$old_pwd) :
        $sql=("SELECT * FROM user WHERE user_id='$user_id ' AND password ='$hashed_password'");
        $db_check=$db->query($sql);
        if(password_verify($hashed_password,$db_check->fetch_assoc()['old_password'])):
         $fetch=$db->query("UPDATE user SET password = '$pwd' WHERE user_id='$user_id'");
             $old_password=''; $password =''; $confirm_pwd = '';
             $msg_sucess = "Password Anda Berhasil Diubah";
          else:
            $error = "Kata sandi yang Anda berikan salah.";
          endif;
        else :
          $error = "Kata sandi lama dan kata sandi baru anda sama Silakan coba lagi.";
        endif;
    else:
      $error = "Kata sandi baru dan konfirmasi kata sandi tidak cocok";
    endif;
   else :
     $error = "Harap isi semua bidang";
   endif;   
 endif;
   ?>


 <html>

 <head>
     <title>Change password</title>
     <link rel="shortcut icon" href="kadinbatam.png">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <style type="text/css">
     .error {
         margin-top: 6px;
         display: table;
         margin-bottom: 0;
         color: #fff;
         background-color: #D65C4F;
         padding: 5px 8px;
         font-size: 11px;
         font-weight: 600;
         line-height: 14px;
     }

     .green {
         margin-top: 6px;
         margin-bottom: 0;
         color: #fff;
         background-color: green;
         display: table;
         padding: 5px 8px;
         font-size: 11px;
         font-weight: 600;
         line-height: 14px;
     }
     </style>

 <body>
     <div class="col-md-10">
     </div>
     <div class="modal-dialog">
         <div class="modal-content col-md-10">
             <div class="modal-header">
                 <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Change Password</h4>
             </div>
             <center><img src="../assets/img/kadinbatam.png" class="rounded mx-auto d-block" alt="" width="60%"></center>
             <form method="post" autocomplete="off" id="password_form">
                 <div class="modal-body with-padding">
                     <br />
                     <div class="form-group">
                         <div class="row">
                             <div class="col-sm-10">
                                 <label>Old Password</label>
                                 <input type="password" name="old_password" value="<?php echo @$old_pwd ?>"
                                     class="form-control">
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="row">
                             <div class="col-sm-10">
                                 <label>New Password</label>
                                 <input type="password" name="password" value="<?php echo @$pwd ?>"
                                     class="form-control">
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="row">
                             <div class="col-sm-10">
                                 <label>Confirm password</label>
                                 <input type="password" name="confirm_pwd" value="<?php echo @$c_pwd ?>"
                                     class="form-control">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
                     <?php echo @$error; ?><?php echo @$msg_sucess; ?>
                 </div>
                 <div class="modal-footer">
                     <input type="submit" id="btn-pwd" name="submit" value="Submit" class="btn btn-primary"
                         style="float: right;">
                     <a href="home.php" class="btn btn-primary" style="float: left;"></i>
                         Kembali</a>

                 </div>
             </form>
             <hr />
             <br />
             <p class="text-center text-small" style="margin-bottom: 40px;">Copyright &copy; 2020 - Powered By Ruang Kreasi
             </p>
         </div>
     </div>

 </body>

 </html>