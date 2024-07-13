<link rel="stylesheet" href="../../CSS/cssAdmin.css">
<div class="box_acc">
   <form action="GET" class="form_list">
      <table class="table tb_listAcc">
         <thead>
            <tr>
               <th scope=" col">Mã Đơn đặt hàng</th>
               <th scope="col">Khách hàng</th>
               <!-- <th scope="col">Phone Number</th> -->
               <th scope="col">Ngày lập</th>
               <th scope="col">Hình thức thanh toán</th>
               <th scope="col">Tổng thành tiền</th>
               <th scope="col">Trạng thái thanh toán</th>
               <th scope="col">Edit</th>
               <th scope="col">Del</th>
            </tr>
         </thead>
         <tbody>
            <tr>
                <td>1</td>
                <td>nguyễn thị a</td>
                <td>06/07/2024</td>
                <td><span class="badge badge-primary">tiền mặt</span></td>
                <td>9.000.000.Đ</td>
                <td><span class="badge badge-danger">chưa thanh toán</span></td>
                <td><button type="button" class="btn btn-warning"> <a href="#">
                <span>Edit</span></a></button></td>
                <td><button type="button" class="btn btn-danger"><a href="#"
                                                onClick="return(confirm('bạn có chắc chắn muốn xóa'))">
                                            <span>Del</span></a></button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>nguyễn thị b</td>
                <td>06/07/2024</td>
                <td><span class="badge badge-primary">chuyển khoản</span></td>
                <td>12.000.000.Đ</td>
                <td><span class="badge badge-success">đã thanh toán</span></td>
                <td><button type="button" class="btn btn-warning"> <a href="#">
                <span>Edit</span></a></button></td>
                <td><button type="button" class="btn btn-danger"><a href="#"
                                                onClick="return(confirm('bạn có chắc chắn muốn xóa'))">
                                            <span>Del</span></a></button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>nguyễn thị c</td>
                <td>06/07/2024</td>
                <td><span class="badge badge-primary">tiền mặt</span></td>
                <td>3.000.000.Đ</td>
                <td><span class="badge badge-danger">chưa thanh toán</span></td>
                <td><button type="button" class="btn btn-warning"> <a href="#">
                <span>Edit</span></a></button></td>
                <td><button type="button" class="btn btn-danger"><a href="#"
                                                onClick="return(confirm('bạn có chắc chắn muốn xóa'))">
                                            <span>Del</span></a></button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>nguyễn thị d</td>
                <td>06/07/2024</td>
                <td><span class="badge badge-primary">chuyển khoản</span></td>
                <td>700.000.Đ</td>
                <td><span class="badge badge-danger">chưa thanh toán</span></td>
                <td><button type="button" class="btn btn-warning"> <a href="#">
                <span>Edit</span></a></button></td>
                <td><button type="button" class="btn btn-danger"><a href="#"
                                                onClick="return(confirm('bạn có chắc chắn muốn xóa'))">
                                            <span>Del</span></a></button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>nguyễn thị e</td>
                <td>06/07/2024</td>
                <td><span class="badge badge-primary">tiền mặt</span></td>
                <td>20.000.000.Đ</td>
                <td><span class="badge badge-danger">chưa thanh toán</span></td>
                <td><button type="button" class="btn btn-warning"> <a href="#">
                <span>Edit</span></a></button></td>
                <td><button type="button" class="btn btn-danger"><a href="#"
                                                onClick="return(confirm('bạn có chắc chắn muốn xóa'))">
                                            <span>Del</span></a></button></td>
            </tr>
         </tbody>
      </table>
   </form>
</div>
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>