<link rel="stylesheet" href="../CSS/ls_style.css">
<div class=login_padding>
   <form action="sign.php" method="post" class="login-table">
      <div class="UP">
         <div class="sign-in-page">
            Trang Đăng Ký
         </div>
      </div>
      <div class="DOWN">
         <div class="space">
            <div class="form-outline mb-4">
               <label class="form-label" id="lb_tkmk" for="form2Example2">
                  Tài khoản
               </label>
               <input type="text" id="ip_tkmk" name="txtName" class="form-control2" />
            </div>
            <div class="form-outline mb-4">
               <label class="form-label" id="lb_tkmk" for="form2Example2">
                  Số điện thoại
               </label>
               <input type="text" id="ip_tkmk" name="txtPhone" class="form-control2" />
            </div>
            <div class="form-outline mb-4">
               <label class="form-label" id="lb_tkmk" for="form2Example2">
                  Email
               </label>
               <input type="email" id="ip_tkmk" name="txtEmail" class="form-control2" />
            </div>
            <div class="form-outline mb-4">
               <label class="form-label" id="lb_tkmk" for="form2Example2">
                  Mật khẩu
               </label>
               <input type="password" id="ip_tkmk" name="txtPass" class="form-control2" />
            </div>
         </div>
         <div class="login-flex">
            <button type="submit" name="btnOke" class="btn btn-primary btn-block mb-4 login-button">
               Đăng Ký
            </button>
         </div>
         <div class="text-center">
            <p>Bạn đã có tài khoản?
               <a href="login.php">
                  Đăng nhập ngay!
               </a>
            </p>
         </div>
      </div>
   </form>
</div>

<?php
include('../config/control.php');
if (isset($_POST['btnOke'])) {
   $getdata = new data();
   $lk = $getdata->checkAccName($_POST['txtName']);
   $check = mysqli_num_rows($lk);
   if ($check == 0) {
      $register = $getdata->signIn(
         $_POST['txtName'],
         $_POST['txtPhone'],
         $_POST['txtEmail'],
         $_POST['txtPass'],
         $level = '0',
      );
      echo '<script>alert("Bạn đã đăng ký thành công.");</script>';
      header('location:login.php');
   } else {
      echo '<script>alert("Tài khoản đã tồn tại.");</script>';
   }
}
?>