<?php
session_start();
ob_start();
if (!isset($_SESSION['userName'])) {
   header('location:../models/login.php');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
</head>

<body>
   <?php
   include("header.php");

   include("tknn.php");

   include("tdmn.php");

   include("slot.php");

   include("bgx.php");

   include("footer.php");
   ?>

</body>

</html>