<?php 
    include('control_user.php');
    session_unset();
    session_destroy();
    header('location:trangchu.php');
?>