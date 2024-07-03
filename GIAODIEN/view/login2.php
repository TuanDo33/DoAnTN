<?php 
    if(!empty($_SESSION['email'])){
        header('Location: trangchu.php');
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <link rel="stylesheet" href="../../CSS/LoginRegister.css">
    <link rel="stylesheet" href="/../fonts/css/all.min.css">
    <link rel="icon" href="../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- BOOTSTRAP STYLES-->
    <!-- <link href="/Ninom/Advance Admin/advance-admin/ad-admin/assets/css/bootstrap.css" rel="stylesheet" /> -->
    <!-- FONTAWESOME STYLES-->
    <!-- <link href="/Ninom/Advance Admin/advance-admin/ad-admin/assets/css/font-awesome.css" rel="stylesheet" /> -->
    <!-- GOOGLE FONTS-->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->

</head>
<body class="box">
    <form role="form" method="post">
    <div class="login">
                           
                            <div style="margin-top:10%;margin-bottom:10%;">
                                
                                    
                            <div style="margin-left:40%;">
                            <img src="../../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" alt="" style="width:70px;height:70px;">
                            </div>
                        <p style="font-size:40px;margin-left:35%;margin-top:3%;color: #264143;font-weight: 800;">
                        Login</p>
                                     <div class="form_group">
                                            <!-- <span class="input-group-addon"><i class="fa fa-tag"  ></i></span> -->
                                            <label class="sub_title row" for="name">Name</label>
                                            <input type="text" class="form_style row" placeholder="Your Username " name="txtusername"/>
                                        </div>
                                            <div class="form-group input-group">
                                            <!-- <span class="input-group-addon"><i class="fa fa-lock"  ></i></span> -->
                                            <label class="sub_title row" for="password">Password</label>
                                            <input type="password" class="form_style row"  placeholder="Your Password" name="txtpass"/>
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                    <button class="btn btn-primary" name="txtsub" type="submit">
                                     Login Now
                                    </button >
                                    <hr />
                                    Not register ? <a href="register.php" >click here </a> or go to <a href="/Ninom/User web/index.php">Home</a>

                                    <?php 
                                         include('control_user.php');
                                         if(isset($_POST['txtsub'])){
                                             $getdata = new data();
                                             $contact = $getdata->select_pass(
                                                $_POST['txtusername'],
                                                $_POST['txtpass']
                                            );
                                             $row = mysqli_fetch_assoc($contact); //sẽ tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp.
                                             if (empty($_POST['txtusername']) || empty($_POST['txtpass'])) {
                                                 echo '<script>alert("Bạn chưa nhập mật khẩu or tên tài khoản")</script>';
                                             }else{
                                                // echo json_encode($row);
                                                if(mysqli_num_rows($contact) > 0){ //Một int đại diện cho số hàng được tìm nạp. Trả về 0ở chế độ không có bộ đệm trừ khi tất cả các hàng đã được tìm nạp từ máy chủ.
                                                    if($_POST['txtpass'] == $row['password']){
                                                        $_SESSION['login'] = true;
                                                        $_SESSION['ID'] = $row['ID'];
                                                        header('location:trangchu.php');
                                                    }
                                                }
                                             }
                                        }
                                    ?>
                                    
                            </div>
    </div>
</form>
</body>
</html>
