<link rel="stylesheet" href="../CSS/ls_style.css">
<div class="change-pass-padding">
    <form action="change_pass.php" method="post" class="change-pass-table">
        <div class="UP-tittle">
            <div class="change-pass-page">
                Trang Thay Đổi Mật Khẩu
            </div>
        </div>
        <div class="DOWN-tittle">
            <div class="change-pass">
                <div class="form-outline mb-4">
                    <label class="form-label ">
                        Mật khẩu hiện tại
                    </label>
                    <input type="password" id="ip_tkmk" name="txtUserName" class="form-control1" required="" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label h1">
                        Mật khẩu mới
                    </label>
                    <input type="password" id="ip_tkmk" name="txtUserName" class="form-control1" required="" />
                </div>
                <div class="form-outline mb-4 re-form-pass">
                    <label class="form-label h1" style="width: 8rem">
                        Nhập lại mật khẩu mới
                    </label>
                    <input type="password" id="ip_tkmk" name="txtUserName" class="form-control1" required="" />
                </div>
            </div>
            <div class="sub-change-button">Đồng Ý</div>
            <div class="back-to-admin">
                <a href="../Admin/index.php">
                    Quay lại trang admin
                </a>
            </div>
        </div>
    </form>
</div>