<?php
include('../GIAODIEN/view/control_user.php');
$getdata = new data();
 if(isset($_GET['del_acc2']))
{
    $delete=$getdata->delete_acc2('accounts_user',$_GET['del_acc2']);
if($delete) echo"<script>alert('bạn đã xóa thành công !') 
window.location='../Admin/index.php?act=qltk2'</script>";
else echo"<script>alert('bạn không xóa được')</script>";
}
?>