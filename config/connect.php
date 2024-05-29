<?php
$conn = new mysqli("localhost", "root", "", "choxe");
// Check connection
if ($conn->connect_errno) {
   echo "Lỗi kết nối database : " . $conn->connect_error;
   exit();
}
$run = mysqli_query($conn, 'SET NAMES "UTF8"');
