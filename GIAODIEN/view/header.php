<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/Home2.css">
    <link rel="stylesheet" href="../../CSS/menu.css">
    <link rel="icon" href="../../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="box">
        <!-- haeder -->
        <header class="header navbar navbar-expand">
            <a href="" class="navbar-brand text-white" style="margin-left:5%;">
                <img src="../../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" alt="" style="width:65px; height:65px;"></a>
            <div class="navbar-nav" style="margin-left:10%;">
                <div class="box2" style="margin-bottom:30px;">
                    <div class="container-1">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <input type="search" id="search" placeholder="Search..." />
                    </div>
                </div>
            </div>
            <button type="button" class="btn  btn-lg navbar-nav" data-toggle="modal" data-target="#modelId"
                style="border: none;font-size: 16px; margin-left:25%; border:2px rgb(253, 253, 253) solid;margin-top:10px;">
                <!-- <img src="/Img/User.png" style="width:22px;height:22px;margin-left:10px;" alt=""> -->
                <a href="view/login1.php"
                    style="text-decoration: none;font-size:16px;font-weight: bold; color: rgb(10, 10, 10); margin-left:7px;">
                    <img src="../../Img/User.png" style="width:22px;height:22px;margin-left:10px;" alt="">
                    Đăng nhập</a>
            </button>
        </header>
        <!-- nav -->
        <nav class="nav n">
            <div class="navbar-nav navbar-expand-lg" style="margin-left: 14%;">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#home">Trang chủ</a></li>
                    <li class="nav-item"><a href="#home">TiVi</a></li>
                    <li class="nav-item"><a href="#home">Tủ Lạnh</a></li>
                    <li class="nav-item"><a href="#home">Máy Giặt</a></li>
                    <li class="nav-item"><a href="#home">Điều Hòa</a></li>
                    <li class="nav-item"><a href="#home">Gia Dụng</a></li>
                    <li class="nav-item"><a href="#home">Điện Thoại</a></li>
                    <!-- <li><a href="#news">Chia sẻ</a></li>  -->
                    <!-- <li class="nav-item dropdown">
                        <a class="dropbtn ">Học tập</a>
                        <ul class="dropdown-content">~
                            <a class="dropdown-item" href="#">HTML</a>
                            <a class="dropdown-item" href="#">CSS</a>
                            <a class="dropdown-item" href="#">Javascript</a>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a class="dropbtn dropdown-toggle">Danh sách sản phẩm</a>
                        <div class="dropdown-content">
                            <a href="#">TiVi</a>
                            <a href="#">Tủ lạnh</a>
                            <a href="#">Máy giặt</a>
                            <a href="#">Điều hòa</a>
                            <a href="#">Gia dụng</a>
                            <a href="#">Đồ cũ</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>

</html>