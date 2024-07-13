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
    function ed_dangtin($banxe, $tinhtrang, $anh, $hangxe, $dongxe,   $giaban, $tieude, $mota, $id)
    {
        global $conn;
        $sql="update dangtin set banxe='$banxe',tinhtrang='$tinhtrang',anh='$anh',hangxe='$hangxe',dongxe='$dongxe',giaban='$giaban',tieude='$tieude',mota='$mota' where id=$id";
    //echo $sql;
    $run=mysqli_query($conn,$sql);
    return $run;
    }
    // function ed_dangtin($banxe, $tinhtrang, $anh, $hangxe, $dongxe, $giaban, $tieude, $mota, $id)
    // {
    //     global $conn;
    //     $sql="UPDATE dangtin set anxe='$banxe',tinhtrang='$tinhtrang',anh='$anh',hangxe='$hangxe',dongxe='$dongxe',giaban='$giaban',tieude='$tieude',mota='$mota'  where id=$id";
    //     $run=mysqli_query($conn,$sql);
    //     return $run;
    // }
    //hiển thị theo id
    function select_id($table,$id)
    {
        global $conn;
        $sql="select * from $table where id=$id ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}
