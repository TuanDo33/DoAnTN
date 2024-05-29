<?php
include('control.php');
$getdata = new data();
 if(isset($_GET['del_acc']))
{
    $delete=$getdata->delete_acc('accounts',$_GET['del_acc']);
if($delete) echo"<script>alert('bạn đã xóa thành công !') 
window.location='../Admin/index.php?act=qltk'</script>";
else echo"<script>alert('bạn không xóa được')</script>";
}
?>