<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header('location:../models/login.php');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang của quản trị viên</title>
</head>

<body>
   <?php
   include("view/header.php");
   if (isset($_GET['act'])) {
      switch ($_GET['act']) {
         case 'qltk':
            include('view/listAcc.php');
            break;
         case 'qlsp':
            include("view/listProduct.php");
            break;
         case 'qlbd':
            include("view/upProduct.php");
            break;
         case 'logout':
            session_start();
            if (isset($_SESSION['userName'])) {
               unset($_SESSION['userName']);
               header('location:../models/login.php');
            }
            break;
         default:
            include('view/listAcc.php');
            break;
      }
   } else {
      // include("home.php");
   }
   // include("view/footer.php");
   ?>
</body>

</html>