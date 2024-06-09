<?php
include('connect2.php');
class Data{
    function insert_tt($username,$email,$password){
        global $conn;
        $sql = "INSERT INTO accounts_user(username,email,password)
            values('$username','$email','$password')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_username(){
        global $conn;
        $sql = "SELECT * FROM accounts_user";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_pass($username, $password){
        global $conn;
        $sql = "SELECT * FROM accounts_user WHERE username = '$username' AND password = '$password'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
