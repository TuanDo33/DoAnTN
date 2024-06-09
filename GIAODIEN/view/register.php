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
    <div>
    <form role="form" method="post">
            <div class="container">
                <div class="form_area">
                    <div style="margin-top:10%;margin-bottom:10%;">
                        <p class="title">SIGN UP</p>
                        <form action="">
                            <div class="form_group">
                                <label class="sub_title row" for="name">Name</label>
                                <input placeholder="Enter your full name" class="form_style row" type="text"
                                name="txtusername"/>
                            </div>
                            <div class="form_group">
                                <label class="sub_title row" for="email">Email</label>
                                <input placeholder="Enter your email" id="email" class="form_style row" type="email"
                                name="txtemail"/>
                            </div>
                            <div class="form_group">
                                <label class="sub_title row" for="password">Password</label>
                                <input placeholder="Enter your password" id="password" class="form_style row"
                                    type="password" name="txtpass"/>
                            </div>
                            <div style="margin-top:7%;">
                                <button type="button" name="txtsub" class="btn btn-danger button1">SIGN UP</button>
                                <p style="margin-top:3%;">Have an Account? <a class="link" href="login.php">Login
                                        Herel</a></p><a class="link" href="">
                                </a>
                            </div><a class="link" href="">
                            </a>
                        </form>
                    </div>
                </div><a class="link" href="">
                </a>
            </div>
            <?php
                                include('control_user.php');
                                if(isset($_POST['txtsub'])){
                                    $getdata = new data();
                                    if (empty($_POST['txtusername']) || empty($_POST['txtpass'] || empty($_POST['txtemail']))) {
                                        echo '<script>alert("Bạn chưa nhập đủ Thông tin")</script>';
                                    } else {
                                        if ($_POST['txtpass'] != $_POST['txtrepass']) {
                                            echo '<script>alert("Bạn nhập sai mật khẩu")</script>';
                                        } else {
                                            $checkusername = $getdata -> select_username();
                                            foreach ($checkusername as $check) {
                                                if($check['username'] == $_POST['txtusername']) {
                                                    echo '<script>alert("Tài khoản đã tồn tại hãy chọn tài khoản khác")</script>';
                                                    return;
                                                }
                                            }
                                            $contact = $getdata->insert_tt(
                                                $_POST['txtusername'],
                                                $_POST['txtemail'],
                                                $_POST['txtpass']
                                            );
                                            $name = $_POST['txtusername'];
                                            if ($contact) {
                                                echo '<script>alert("Cảm ơn bạn ' . $name . ' đã đăng ký thành công!")</script>'; 
                                            } else {
                                                echo '<script>alert("Tài khoản đã có vui lòng đăng ký lại!")</script>';
                                            }
                                        }
                                    }
                                }
                                ?> 
                                    </form>
    </div>
</body>

</html>