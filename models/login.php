<?php
include('../config/control.php');
ob_start();
// if (!isset($_SESSION['userName'])) {
//    unset($_SESSION['userName']);
// }
?>
<link rel="stylesheet" href="../CSS/ls_style.css">
<div class=login_padding>
   <form action="login.php" method="post" class="login-table">
      <div class="UP">
         <div class="sign-in-page">
            Trang Đăng Nhập
         </div>
      </div>
      <div class="DOWN">
         <div class="uName-pWord">
            <div class="form-outline mb-4">
               <label class="form-label user-name" id="lb_tkmk" for="form2Example2">
                  Tên tài khoản
               </label>
               <input type="text" id="ip_tkmk" name="txtUserName" class="form-control" required="" />
            </div>
            <div class="form-outline mb-4">
               <label class="form-label" id="lb_tkmk" for="form2Example2">
                  Mật khẩu
               </label>
               <input type="password" id="ip_tkmk" name="txtPass" required="" class="form-control" />
            </div>
         </div>
         <div class="rPassword-lButton">
            <div class="row mb-4">
               <div class="col d-flex">
                  <div class="form-check">
                     <input class="form-check-input" name="btnLuu" type="checkbox" value="" id="form2Example31"
                        checked />
                     <label class="form-check-label" for="form2Example31">
                        Lưu mật khẩu
                     </label>
                  </div>
               </div>
            </div>
            <div class="login-flex">
               <button type="submit" name="sub" class="btn btn-primary btn-block mb-4 login-button">Đăng Nhập
               </button>
            </div>
            <div class="col center">
               <a href="forgotPass.php">Quên mật khẩu?</a>
            </div>
         </div>
         <div class="text-center">
            <p>Bạn chưa có tài khoản?
               <a onclick="eventclickshow()" id="change_login" href="sign.php">
                  Đăng ký ngay!
               </a>
            </p>
         </div>
      </div>
   </form>
</div>
<?php
if (isset($_POST['sub'])) {
   session_start();
   $getdata = new data();
   $pass = $_POST['txtPass'];
   $tk = $getdata->login($_POST['txtUserName'], $pass);
   $check = mysqli_num_rows($tk);
   $lv = mysqli_fetch_array($tk)[4];
   if ($check > 0) {
      $_SESSION['userName'] = $_POST['txtUserName'];
      if (strtolower($_POST['btnLuu']) === 'on') {
         setcookie($_POST['txtUserName'], $_POST['txtPass'], time() + (86400 * 30), "/");
      } else {
         setcookie($_POST['txtUserName'], "", time() + (86400 * 30), "/");
      }
      // $lv = $getdata->checkLevel($level);
      if ($lv == 1) {
         header('location:../Admin/index.php');
      } else {
         header('location:../User/ttnd.php');
      }
   } else {
   }
}
?>