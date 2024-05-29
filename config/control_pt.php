<?php
// include('connect.php');
include('connect.php');
class data
{
    //đăng tin nè
    function dangtin_tt($banxe, $tinhtrang, $anh, $hangxe, $dongxe, $namsanxuat, $phienban, $sokmdi, $hopso, $kieudandong, $nhienlieu, $giaban, $tieude, $mota, $kieudang, $socho, $xuatxu, $tenlienhe, $sdt, $tinhtp, $quanhuyen, $phuongxa, $diachi)
    {
        global $conn;
        $sql = "insert into dangtin(banxe,tinhtrang,anh,hangxe,dongxe,namsanxuat,phienban,sokmdi,hopso,kieudandong,nhienlieu,giaban,tieude,mota,kieudang,socho,xuatxu,tenlienhe,sdt,tinhtp,quanhuyen,phuongxa,diachi)
            values('$banxe','$tinhtrang','$anh','$hangxe','$dongxe','$namsanxuat','$phienban','$sokmdi','$hopso','$kieudandong','$nhienlieu','$giaban','$tieude','$mota','$kieudang','$socho','$xuatxu','$tenlienhe','$sdt','$tinhtp','$quanhuyen','$phuongxa','$diachi')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    //hiển thị trong admin nè
    function se_all($table)
    {
        global $conn;
        $sql="select * from $table";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    //delete nè
    function delete_all($table,$id)
    {
        global $conn;
        $sql="delete from $table where id=$id ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    //uupdate nè
    function se_all_id($table,$id)
    {
        global $conn;
        $sql="select * from $table where id=$id";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    function up_dangtin($banxe, $tinhtrang, $anh, $hangxe, $dongxe, $namsanxuat, $phienban, $sokmdi, $hopso, $kieudandong, $nhienlieu, $giaban, $tieude, $mota, $kieudang, $socho, $xuatxu, $tenlienhe, $sdt, $tinhtp, $quanhuyen, $phuongxa, $diachi,$id)
    {
        global $conn;
        $sql="update dangtin set banxe='$banxe',tinhtrang='$tinhtrang',anh='$anh',hangxe='$hangxe',dongxe='$dongxe',namsanxuat='$namsanxuat',phienban='$phienban',sokmdi='$sokmdi',hopso='$hopso',kieudandong='$kieudandong',nhienlieu='$nhienlieu',giaban='$giaban',tieude='$tieude',mota='$mota',kieudang='$kieudang',socho='$socho',xuatxu='$xuatxu',tenlienhe='$tenlienhe',sdt='$sdt',tinhtp='$tinhtp',quanhuyen='$quanhuyen',phuongxa='$phuongxa',diachi='$diachi' where id=$id";
    //echo $sql;
    $run=mysqli_query($conn,$sql);
    return $run;
    }
    //hiển thị theo id
    function select_id($table,$id)
    {
        global $conn;
        $sql="select * from $table where id=$id ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}
