<?php
include('control_pt.php');
$getdata = new data();
if(isset($_GET['del_product']))
{
    $delete=$getdata->delete_all('dangtin',$_GET['del_product']);
if($delete) echo"<script>alert('bạn đã xóa thành công !') 
window.location='../Admin/index.php?act=qlsp'</script>";
else echo"<script>alert('bạn không xóa được')</script>";
}
?>