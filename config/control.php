<?php
// include('connect.php');
include('connect.php');
class data
{
    function login($userName, $pass)
    {
        global $conn;
        $sql = "SELECT * FROM accounts WHERE name_acc ='" . $userName . "' AND pass_acc = '" . $pass . "' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function signIn($name, $phone, $email, $pass, $level)
    {
        global $conn;
        $sql = "INSERT INTO accounts(name_acc,pass_acc,email_acc,level,phone) 
                            value ('$name','$pass','$email','$level','$phone')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function checkAccName($name)
    {
        global $conn;
        $sql = "SELECT* FROM accounts WHERE name_acc = '$name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function checkLevel($level)
    {
        global $conn;
        $sql = "SELECT* FROM accounts WHERE level = '$level'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function se_acc($table)
    {
        global $conn;
        $sql="select * from $table";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    function delete_acc($table,$id)
    {
        global $conn;
        $sql="delete from $table where id=$id ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    function se_acc_id($table,$id)
    {
        global $conn;
        $sql="select * from $table where id=$id";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    function up_acc($name, $phone, $email, $pass,$id)
    {
        global $conn;
        $sql="update dangtin set name_acc='$name',phone='$phone',email_acc='$email',pass_acc='$pass' where id=$id";
    //echo $sql;
    $run=mysqli_query($conn,$sql);
    return $run;
    }
}
