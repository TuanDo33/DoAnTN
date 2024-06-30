<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/Home2.css">
    <link rel="stylesheet" href="../../CSS/menu.css">
    <!-- <link rel="stylesheet" href="../../javascrip/home.js"> -->
    <link rel="icon" href="../../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/fonts/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="box">
         <!-- haeder -->
         <header class="header navbar navbar-expand">
            <a href="" class="navbar-brand text-white" style="margin-left:5%;">
                <img src="../../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" alt=""
                    style="width:65px; height:65px;"></a>
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
                <a href="login1.php"
                    style="text-decoration: none;font-size:16px;font-weight: bold; color: rgb(10, 10, 10); margin-left:7px;">
                    <!-- <img src="../../Img/User.png" style="width:22px;height:22px;margin-left:10px;" alt=""> -->
                    <i class="fa-solid fa-user icon1"></i>
                    Đăng nhập</a>
            </button>
        </header>
        <!-- nav -->
        <nav class="nav n">
            <div class="navbar-nav navbar-expand-lg" style="margin-left: 14%;">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="trangchu.html"><i class="fa-solid fa-house" style="font-size:18px;"></i></a></li>
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
        <main class="main">
            <div style="margin-right:5%; margin-left:5%;">
                <div style="margin-bottom:2%;">
                    <div class="boloc">
                        <button style="width:60px;height:30px;border-radius:5px;background-color:#ffff;font-size:17px;">
                            Hãng
                        </button>
                        <div class="hãng1">
                            <div class="btnbox row">
                                <a href="" class="col"><img src="../../Img/brand/Aqua2002-b_36.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/casper-200x80-1.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Comfee2002-b_19.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Daikin2002-b_34.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/funi-124x48-1.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Gree2002-b_52.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/idea-200x80-1.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Untitled-3-min-200x80-3.png" alt=""
                                        class="brand"></a>
                            </div>
                            <div class="btnbox row">
                                <a href="" class="col"><img src="../../Img/brand/lg-61x80-61x80-12.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Panasonic2002-b.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Samsung2002-b_1.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Sharp2002-b_15.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/TCL2002-b_24.png" alt=""
                                        class="brand"></a>
                                <a href="" class="col"><img src="../../Img/brand/Toshiba2002-b_12.png" alt=""
                                        class="brand"></a>
                            </div>
                        </div>
                    </div>
                    <div class="boloc">
                        <button style="width:60px;height:30px;border-radius:5px;background-color:#ffff;font-size:17px;">
                            Giá
                        </button>
                        <div class="hãng1">
                            <div class="btnbox row">
                                <a href="" class="brand">dưới 5 triệu</a>
                                <a href="" class="brand">từ 5 đến 7 triệu</a>
                                <a href="" class="brand">từ 7 đến 10 triệu</a>
                                <a href="" class="brand">từ 10 đến 15 triệu</a>
                                <a href="" class="brand">từ 15 đến 30 triệu</a>
                            </div>
                            <div class="btnbox row">
                                <div class="boc_than_bl">
                                    <p style="font-weight: 600;">Khoảng Giá</p>
                                    <div class="khgia_home">
                                        <p><b>Từ 0 đến <span id="demo2"></span></b><b>&nbsp;triệu</b>
                                        </p>
                                        <input type="range" min="0" max="900" value="0" class="slider2" id="myRange2">

                                    </div>
                                </div>
                            </div>
                            <div style="margin-left:20%;margin-bottom:3%;margin-top:3%;">
                                <button style="width:90px;height:30px;background-color: #f05626;border-radius:7px;">bỏ chọn</button>
                                <button style="width:90px;height:30px;background-color: #f05626;border-radius:7px;">xem kết quả</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p style="font-size:30px;font-weight:500;">Danh sách sản phẩm</p>
                </div>
                <?php include '../view/connect2.php';
                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:8;
                $current_page = !empty($_GET['page'])?$_GET['page']:1; // trang hiện tại
                $offset = ($current_page -1) * $item_per_page;
                $product = mysqli_query($conn, "SELECT * FROM dangtin ORDER BY 'id' ASC limit ".$item_per_page." offset ".$offset." ");
                $totalRecords = mysqli_query($conn, "Select * from dangtin");
                $totalRecords = $totalRecords->num_rows;
                $totalPages = ceil($totalRecords / $item_per_page);
                
                ?>
                <div>
                    <div class="row gx-0" style="margin-left:4%;">
                        <?php while ($row = mysqli_fetch_array($product))
                        {?>
                        <div class="col-sm-3" style="margin-top:2%;">
                            <div class="card">
                                <img src="../../Img/img_product/<?=$row['anh']?>" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <!-- <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="row gx-0" style="margin-left:4%;margin-top:3%;">
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row gx-0" style="margin-left:4%;margin-top:3%;">
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="../../Img/63d4c026c181357e6c08ada62db59b8b.jpg" alt="image">
                                <div class="content">
                                    <div class="title">What is Lorem Ipsum?</div>
                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class="favorite">
                                        <i class="ri-heart-fill"></i>
                                        <span>3</span>
                                    </div>
                                    <div>
                                        <button class="mua"><a href="../user/giohang.html">mua ngay</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>  
                <!-- Chuyển trang "phân trang" -->
                <div style="margin-top:4%;margin-left:43%;">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <!-- <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li> -->
                            <?php 
                            if ($current_page > 3){
                                $first_page = 1;
                            ?> <li class="page-item"><a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$first_page?>">First</a></li>
                                <?php }
                                if ($current_page > 1) {
                                    $prew_page =$current_page -1;
                                ?>
                                <li class="page-item">
                                <a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$prew_page?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php }?>
                                <!--  -->
                            <?php for ($num = 1; $num <= $totalPages; $num++){?>
                                <?php if ($num != $current_page) {?>
                            <li class="page-item"><a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a></li>
                            <!-- <li class="page-item"><a class="page-link" href="?per_page=4&page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="?per_page=4&page=3">3</a></li> -->
                            <?php } else {?>
                                <strong class="page-link" style="background-color:#f05626;"><?=$num?></strong>
                                <?php }?>
                            <?php }?>
                            <!--  -->
                            <?php 
                            if ($current_page < $totalPages - 3){
                                $end_page = $totalPages;
                            ?> <li class="page-item"><a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$end_page_page?>">Last</a></li>
                                <?php }?>
                            <!-- <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
        <!-- footer -->
        <footer class="footer">
            <div class="row gx-0" style="width:1300px;">
                <div class="col" style="margin-top:1%;margin-left:10%;">
                    <div>
                        <div>
                            <a href="" class="navbar-brand text-white">
                                <img src="../../Img/_3e0757bb-eae4-4033-bb53-4e6b11d61967.jpg" alt=""
                                    style="width:65px; height:65px; margin-top: 2%;"></a>
                        </div>
                        <img src="../../Img/logo-bct.png" alt="" style="width:150px; height:55px;margin-top:15%;">
                    </div>
                </div>
                <div class="col" style="margin-top:2%;">
                    <div class="thongtin">
                        <p class="tieudefooter">Thông tin chung </p>
                        <p><a href="">giới thiệu về Tstore</a></p>
                        <p><a href="">tintức</a></p>
                        <p><a href="">hợp tác</a></p>
                    </div>
                </div>
                <div class="col" style="margin-top:2%;">
                    <div class="thongtin">
                        <p class="tieudefooter">Chính sách</p>
                        <p><a href="">bảo hành</a></p>
                        <p><a href="">mua hàng</a></p>
                        <p><a href="">giao hàng</a></p>
                        <p><a href="">bảo mật thông tin</a></p>
                    </div>
                </div>
                <div class="col" style="margin-top:2%;">
                    <div class="thongtin">
                        <p class="tieudefooter">Liên hệ & Địa chỉ</p>
                        <p class="lienhe">Hotline:0376017025</p>
                        <p class="lienhe">Email:Tstore@gmail.com</p>
                        <p>Địa chỉ:446 phù lưu tế mỹ đức hà nội</p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook" style="font-size:35px;"></i>
                            </a>
                            <a href="https://www.messenger.com/" target="_blank">
                                <i class="fa-brands fa-facebook-messenger" style="font-size:35px;"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram" style="font-size:35px;"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="fa-brands fa-youtube" style="font-size:35px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- <?php include('footer.php');?> -->
    </div>
    <script src="../../javascrip/home.js"></script>
</body>

</html>