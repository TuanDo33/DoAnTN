<?php
ob_start();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../fonts/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
   rel="stylesheet">
<link rel="stylesheet" href="../CSS/Home.css">
<div class="header">
   <div class="header_content">
      <div class="head_top">
         <a href="../Home.html" alt="Chợ xe">
            <img src="../img/logo_white.png" alt="" id="logo_header">
         </a>
         <a href="../Car-Audit.html">
            <img src="../img/car_check_white_19_19.png" alt="" id="icons_header">
            <p>Car Audit</p>
         </a>
         <a href="">
            <img src="../img/support_white_24_24.png" alt="" id="icons_header">
            <p>Thủ tục mua bán</p>
         </a>
         <a href="../tintuc.html" id="childe_news">
            <img src="../img/news_white_20_16.png" alt="" id="icons_header">
            <p>Tin Tức</p>
         </a>
      </div>

      <div class="head_search">
         <form class="sbox">
            <i class="fa-solid fa-magnifying-glass kl1"></i>
            <input type="text" class="stext" placeholder="Tìm kiếm trong chợ xe " id="usr" name="username">
            <!-- <i class="fa-solid fa-bars "></i> -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg fa-bars " data-toggle="modal"
               data-target="#modelId_list" style="background-color: #fff;border: none;">
               <i class="fa-solid fa-bars "></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modelId_list" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
               aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content " style=" width: 600px; ">
                     <div class="modal-header">
                        <h5 class="modal-title">Bộ lọc </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <div class="phanthan_bl">
                           <label class="dropdown" style="width: 100%;">
                              <label class="form-label" id="lb_bl" for="form2Example2">Tinh/ThanhPho
                              </label>
                              <div class="dd-button bt_bl" style="width: 100%;">
                                 <p>Toàn quốc</p>
                              </div>

                              <input type="checkbox" class="dd-input" id="test">

                              <div class="dd-menu" style="width: 100%;">
                                 <div style="margin-left:13px;margin-top:10px;height: 250px;">
                                    <div>
                                       <p style="font-size:16px;"> Dòng xe </p>
                                    </div>
                                    <!-- <div style="height:35px;"> -->
                                    <form class="sbox2" action="/search" method="get">
                                       <div class="input-group mb-4 " style="width:97%">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text"><i
                                                   class="fa-solid fa-magnifying-glass"></i></span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="Username">
                                       </div>
                                    </form>
                                    <!-- </div> -->
                                    <div>
                                       <select class="flatform" size="6">
                                          <option value="An Giang">An Giang
                                          <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                          <option value="Bắc Giang">Bắc Giang
                                          <option value="Bắc Kạn">Bắc Kạn
                                          <option value="Bạc Liêu">Bạc Liêu
                                          <option value="Bắc Ninh">Bắc Ninh
                                          <option value="Bến Tre">Bến Tre
                                          <option value="Bình Định">Bình Định
                                          <option value="Bình Dương">Bình Dương
                                          <option value="Bình Phước">Bình Phước
                                          <option value="Bình Thuận">Bình Thuận
                                          <option value="Bình Thuận">Bình Thuận
                                          <option value="Cà Mau">Cà Mau
                                          <option value="Cao Bằng">Cao Bằng
                                          <option value="Đắk Lắk">Đắk Lắk
                                          <option value="Đắk Nông">Đắk Nông
                                          <option value="Điện Biên">Điện Biên
                                          <option value="Đồng Nai">Đồng Nai
                                          <option value="Đồng Tháp">Đồng Tháp
                                          <option value="Đồng Tháp">Đồng Tháp
                                          <option value="Gia Lai">Gia Lai
                                          <option value="Hà Giang">Hà Giang
                                          <option value="Hà Nam">Hà Nam
                                          <option value="Hà Tĩnh">Hà Tĩnh
                                          <option value="Hải Dương">Hải Dương
                                          <option value="Hậu Giang">Hậu Giang
                                          <option value="Hòa Bình">Hòa Bình
                                          <option value="Hưng Yên">Hưng Yên
                                          <option value="Khánh Hòa">Khánh Hòa
                                          <option value="Kiên Giang">Kiên Giang
                                          <option value="Kon Tum">Kon Tum
                                          <option value="Lai Châu">Lai Châu
                                          <option value="Lâm Đồng">Lâm Đồng
                                          <option value="Lạng Sơn">Lạng Sơn
                                          <option value="Lào Cai">Lào Cai
                                          <option value="Long An">Long An
                                          <option value="Nam Định">Nam Định
                                          <option value="Nghệ An">Nghệ An
                                          <option value="Ninh Bình">Ninh Bình
                                          <option value="Ninh Thuận">Ninh Thuận
                                          <option value="Phú Thọ">Phú Thọ
                                          <option value="Quảng Bình">Quảng Bình
                                          <option value="Quảng Bình">Quảng Bình
                                          <option value="Quảng Ngãi">Quảng Ngãi
                                          <option value="Quảng Ninh">Quảng Ninh
                                          <option value="Quảng Trị">Quảng Trị
                                          <option value="Sóc Trăng">Sóc Trăng
                                          <option value="Sơn La">Sơn La
                                          <option value="Tây Ninh">Tây Ninh
                                          <option value="Thái Bình">Thái Bình
                                          <option value="Thái Nguyên">Thái Nguyên
                                          <option value="Thanh Hóa">Thanh Hóa
                                          <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                          <option value="Tiền Giang">Tiền Giang
                                          <option value="Trà Vinh">Trà Vinh
                                          <option value="Tuyên Quang">Tuyên Quang
                                          <option value="Vĩnh Long">Vĩnh Long
                                          <option value="Vĩnh Phúc">Vĩnh Phúc
                                          <option value="Yên Bái">Yên Bái
                                          <option value="Phú Yên">Phú Yên
                                          <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                          <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                          <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                          <option value="Tp.Hà Nội">Tp.Hà Nội
                                          <option value="TP  HCM">TP HCM
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </label>

                           <label class="dropdown" style="width: 100%;">
                              <label class="form-label" id="lb_bl" for="form2Example2">Hãng Xe
                              </label>
                              <div class="dd-button bt_bl" style="width: 100%;">
                                 <p>Tất cả</p>
                              </div>

                              <input type="checkbox" class="dd-input" id="test">

                              <div class="dd-menu" style="width: 100%;">
                                 <div style="margin-left:13px;margin-top:10px;height: 385px;">
                                    <div>
                                       <p style="font-size:16px;"> Dòng xe </p>
                                    </div>
                                    <!-- <div style="height:35px;"> -->
                                    <form class="sbox2" action="/search" method="get">
                                       <div class="input-group mb-4 " style="width:97%">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text"><i
                                                   class="fa-solid fa-magnifying-glass"></i></span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="Username">
                                       </div>
                                    </form>
                                    <!-- </div> -->
                                    <div>
                                       <!-- <select class="flatform" size="6"> -->
                                       <ul class="ndtabmenu">
                                          <li>
                                             <div style="width:100%;height:50px;">
                                                <div style="width:50%; float:left; margin-top:15px;">
                                                   <p style="font-size:18px; color:#F05626; font-weight: bold;">
                                                      Tất cả
                                                   </p>
                                                </div>
                                                <div style="width:50%; float: right; margin-top:15px;">
                                                   <img src="../img/Annotation 2023-07-05 213208.png" alt=""
                                                      style="margin-left:120px;">
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span><img src="img/Toyota.png" alt=""
                                                   style="width:24px; height:24px;"></span>
                                             <span>Toyota</span>
                                          </li>
                                          <li>
                                             <span><img src="img/Hyndy.png" alt=""
                                                   style="width:24px; height:24px;"></img></span>
                                             <span>Hyundai</span>
                                          </li>
                                          <li>
                                             <span><img src="img/Kia.png" alt=""
                                                   style="width:24px; height:24px;"></img></span>
                                             <span>KIA</span>
                                          </li>
                                          <li>
                                             <span><img src="img/vinfast.png" alt=""
                                                   style="width:24px; height:24px;"></span>
                                             <span>VinFast</span>
                                          </li>
                                          <li>
                                             <span><img src="img/mitsubishi.png" alt=""
                                                   style="width:24px; height:24px;"></img></span>
                                             <span>Misubishi</span>
                                          </li>
                                       </ul>
                                       <!-- </select> -->
                                    </div>
                                 </div>
                              </div>
                           </label>
                           <div class="form-group" style="width: 100%;">
                              <!-- <label class="form-label" id="lb_bl3" for="form2Example2">Dòng xe
                                                </label> -->
                              <select class="form-control" style="height: 40px;
                                                margin: 0 5px;" disabled>
                                 <option selected>Tất cả</option>
                                 <option></option>
                                 <option></option>
                              </select>
                           </div>
                           <!-- ---------Khoảng Giá---------- -->
                           <div class="boc_than_bl">
                              <p>Khoảng Giá</p>
                              <div class="khgia_home">
                                 <p><b>Từ 0 đến <span id="demo2"></span></b><b>&nbsp;triệu</b></p>
                                 <input type="range" min="0" max="900" value="0" class="slider2" id="myRange2">
                              </div>
                           </div>
                           <!-- ---------Tình trạng---------- -->
                           <div class="boc_than_bl">
                              <p>Tình trạng</p>
                              <div class="tt_xe_bl">
                                 <button>xe cũ</button>
                                 <button>xe mới</button>
                              </div>
                           </div>
                           <!-- ---------Năm sản xuất---------- -->
                           <div class="boc_than_bl">
                              <p>Năm sản xuất</p>
                              <div class="khgia_home">
                                 <p><b>Từ năm 2000 đến <span id="namsx"></span></b><b>&nbsp;năm</b>
                                 </p>
                                 <input type="range" min="2000" max="2023" value="0" class="sonam" id="myRange2">
                              </div>
                           </div>
                           <!-- ---------Hộp số---------- -->
                           <div class="boc_than_bl">
                              <p>Hộp số</p>
                              <div class="tt_xe_bl ">
                                 <button id="hs_bl">Số sàn</button>
                                 <button id="hs_bl">Tự động</button>
                                 <button id="hs_bl">Bán tự động</button>
                              </div>
                           </div>
                           <!-- ----------Nguyên liệu--------- -->
                           <div class="boc_than_bl">
                              <p>Nhiên Liệu</p>
                              <div class="nl_xe_bl">
                                 <button class="nl_bt">Xăng</button>
                                 <button class="nl_bt">Dầu</button>
                                 <button class="nl_bt">Điện</button>
                                 <button class="nl_bt">Hybrid</button>
                              </div>
                           </div>
                           <!-- --------------Kiểu dáng-------------- -->
                           <div class="boc_than_bl">
                              <p>Kiểu dáng</p>
                              <div class="kd_xe_bl">
                                 <button class="nl_bt">Sedan</button>
                                 <button class="nl_bt">Hatchback</button>
                                 <button class="nl_bt">SUV</button>
                                 <button class="nl_bt">Bán Tải</button>
                                 <button class="nl_bt">Xe Tải</button>
                                 <button class="nl_bt">MPV</button>
                                 <button class="nl_bt">Van/Minivan</button>
                                 <button class="nl_bt">Coupe</button>
                                 <button class="nl_bt">Mui trần</button>
                              </div>
                           </div>
                           <!-- /* --------------Số chỗ ngồi------------ -->
                           <div class="boc_than_bl">
                              <p>Số chỗ ngồi</p>
                              <div class="kd_xe_bl">
                                 <button class="scn  ">2</button>
                                 <button class="scn ">4</button>
                                 <button class="scn ">5</button>
                                 <button class="scn ">7</button>
                                 <button class="scn ">9</button>
                                 <button class="scn ">14</button>
                                 <button class="scn ">3</button>
                                 <button class="scn ">8</button>
                                 <button class="scn ">6</button>
                              </div>
                           </div>
                           <!-- ---------Xuất xứ---------- -->
                           <div class="boc_than_bl">
                              <p>Xuất xứ</p>
                              <div class="tt_xe_bl">
                                 <button>Nhập khẩu</button>
                                 <button>Lắp ráp trong nước</button>
                              </div>
                           </div>
                           <!-- ---------Kiểu dẫn động---------- -->
                           <div class="boc_than_bl">
                              <p>Kiểu dẫn động</p>
                              <div class="nl_xe_bl">
                                 <button class="nl_bt">FWD</button>
                                 <button class="nl_bt">RWD</button>
                                 <button class="nl_bt">AWD</button>
                                 <button class="nl_bt">4WD</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal_footer">
                        <button style="background-color:#fff;color: #F05626;border: 1px solid #F05626;" type="button"
                           class="btn btn-light">Bỏ chọn tất
                           cả</button>
                        <button style="background-color: #F05626;border: 1px solid #F05626;" type="button"
                           class="btn btn-primary">Xem kết quả</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <div class="buttom_login">
            <div class="but">
               <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId"
                  style="background-color: #f05626;border: none;font-size: 16px;">
                  <a href="login.php"><i class="fa-regular fa-user" id="login_header"></i>Đăng Nhập</a>
               </button>
               <!-- Modal -->
            </div>
            <div class="but2">
               <a target="_blank" href="login.php" id="dangtin">
                  Đăng Tin <img src="img/add_listing_white_16_18.png" alt="" id="login_dangtin"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- link javascrip -->
<script src="../javascrip/slider.js"></script>
<script src="../javascrip/content.js"></script>

<script src="../javascrip/slider.js"></script>
<script src="../javascrip/content.js"></script>
<script src="../javascrip/change_password.js"></script>

<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>