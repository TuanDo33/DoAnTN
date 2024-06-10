<?php
if (!empty($_SESSION['email'])) {
    header('Location: trangchu.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/LoginRegister.css">
    <link rel="stylesheet" href="/../fonts/css/all.min.css">
    <link rel="icon" href="../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
</head>

<body class="box">
    <form role="form" method="post">
        <div>
            <div class="login">
                <div style="margin-top:10%;margin-bottom:10%;">
                    <form role="form" method="post">
                        <p style="font-size:40px;margin-left:35%;margin-top:3%;color: #264143;font-weight: 800;">
                            Login</p>
                        <div style="margin-left:14%;margin-top:7%;">

                            <div class="form_group">
                                <label class="sub_title row" for="name">Name</label>
                                <input type="text" class="form_style row" placeholder="Your Username "
                                    name="txtusername" />
                            </div>
                            <div class="form_group">
                                <label class="sub_title row" for="password">Password</label>
                                <input type="password" class="form_style row" placeholder="Your Password"
                                    name="txtpass" />
                            </div>
                        </div>
                        <div>
                            <div style="margin-left:12%;margin-top:4%;" class="row">
                                <div class="form-check col">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lưu mật khẩu
                                    </label>
                                </div>
                                <p class="col"><a href="" style="text-decoration: none;color:#e4c82a;">quên mật khẩu
                                        ?</a></p>
                            </div>
                        </div>
                        <div style="margin-left:17%;margin-top:3%; width:100%;" class="row gx-0">
                            <div class="col"><button class="btn btn-outline-danger btn2"
                                style="width:100px;" name="txtsub" type="submit">
                                Login Now
                                </button></div>
                            <div class="col" style="margin-left:-20%;"><button type="button" class="btn btn-danger btn2"
                                    style="width:100px;"><a href="register1.php"
                                        style="text-decoration: none; color: #ffff;">Đăng ký</a></button></div>
                        </div>
                        <!-- <div class="row gx-0" style="margin-left:23%;margin-top:3%;width:100%;">
                    <p class="col">Bạn chưa có tài khoản ?</p>
                    <p class="col" style="margin-left:-13%;"><a href=""
                            style="text-decoration: none;color: #e4c82a;">Đăng ký</a></p>
                </div> -->
                    </form>
                </div>
            </div>
        </div>
        <?php
        include ('control_user.php');
        if (isset($_POST['txtsub'])) {
            $getdata = new data();
            $contact = $getdata->select_pass(
                $_POST['txtusername'],
                $_POST['txtpass']
            );
            $row = mysqli_fetch_assoc($contact); //sẽ tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp.
            if (empty($_POST['txtusername']) || empty($_POST['txtpass'])) {
                echo '<script>alert("Bạn chưa nhập mật khẩu or tên tài khoản")</script>';
            } else {
                // echo json_encode($row);
                if (mysqli_num_rows($contact) > 0) { //Một int đại diện cho số hàng được tìm nạp. Trả về 0ở chế độ không có bộ đệm trừ khi tất cả các hàng đã được tìm nạp từ máy chủ.
                    if ($_POST['txtpass'] == $row['password']) {
                        $_SESSION['login'] = true;
                        $_SESSION['id'] = $row['id'];
                        header('location:trangchu.html');
                    }
                }
            }
        }
        ?>
    </form>
</body>

</html>