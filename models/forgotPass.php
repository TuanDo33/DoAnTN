<link rel="stylesheet" href="../CSS/ls_style.css">
<div class=login_padding>
   <form action="sign copy.php" method="post" class="login-table">
      <div class="UP">
         <div class="sign-in-page">
            Forgot Password !
         </div>
      </div>
      <div class="DOWN">
         <div class="space">

            <div class="form-outline mb-4">
               <p id="getPass" for="form2Example2">
                  Nhập tên tài khoản của bạn !
               </p>
               <input type="text" id="ip_tkmk" name="txtPhone" class="form-control2" />
            </div>
            <div class="form-outline mb-4">
            </div>
            <div class="form-outline mb-4">
            </div>
         </div>
         <div class="login-flex">
            <button type="submit" name="btnOke" class="btn btn-primary btn-block mb-4 login-button">
               Get Pass
            </button>
         </div>
         <div class="text-center">
            <p>Bạn đã nhớ ra :v ?
               <a href="login.php">
                  Trở lại trang chủ !
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
   $tk = $getdata->checkAccName($_POST['txtName']);
   $count = mysqli_num_rows($tk);
   if ($count == 1) {
      echo ("<script>
      alert('Mật khẩu của bạn là: " . mysqli_fetch_array($tk)[2] . "');    
      window.location = 'login.php';
      </script>");
   } else {
      echo '<script>alert("Tên tài khoản không tồn tại.");</script>';
   }
}
?>