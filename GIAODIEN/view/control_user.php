<?php
include ('connect2.php');
class Data
{
    function insert_tt($username, $email, $password)
    {
        global $conn;
        $sql = "INSERT INTO accounts_user(username,email,password)
            values('$username','$email','$password')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_username()
    {
        global $conn;
        $sql = "SELECT * FROM accounts_user";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_pass($username, $password)
    {
        global $conn;
        $sql = "SELECT * FROM accounts_user WHERE username = '$username' AND password = '$password'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function logout($username)
    {
        global $conn;
        $sql = "SELECT * FROM accounts_user WHERE username = '$username'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    // function getuserinfo($username, $password)
    // {
    //     global $conn;
    //     $sql = "SELECT * FROM accounts_user WHERE username ='" . $username . "' AND password = '" . $password . "' ";
    //     $run = mysqli_query($conn, $sql);
    //     $kq = $run;
    //     return $kq;
    // }
    function checkAccName($username)
    {
        global $conn;
        $sql = "SELECT* FROM accounts_user WHERE username = '$username'";
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
    function delete_acc2($table,$id)
    {
        global $conn;
        $sql="delete from $table where id=$id ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}
