<link rel="stylesheet" href="../../CSS/cssAdmin.css">
<link rel="stylesheet" href="../../CSS/Home2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<div class="list_product">
   <form action = "GET" class= "form_list">
      <table class= "table tb_listAcc">
      <form method="GET">
                <div class="box2" style="margin-bottom:30px;">
                    <div class="container-1">
                        <span class="icon"><i class="fa fa-search" style="font-size:22px;"></i></span>
                        <input type="search" id="search" placeholder="Search..." name="txtsearch" style="border:1px solid #000;"/>
                    </div>
                </div>
               
            </form>
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">trademark</th>
               <th scope="col">status</th>
               <th scope="col">Price</th>
               <th scope="col">Image</th>
               <th scope="col">Edit</th>
               <th scope="col">Del</th>
            </tr>
         </thead>
         <tbody>
         <?php
               include('../config/control_pt.php');
               $get_data=new data();
               $select_all=$get_data->se_all('dangtin');
               foreach ($select_all as $se_product)
               {
               ?>
            <tr>
               <td scope="row"><?php echo $se_product['id']?></td>
               <td><?php echo $se_product['hangxe']?></td>  
               <td><?php echo $se_product['tinhtrang']?></td>
               <td style="color: #d63232;;"><?php echo $se_product['giaban']?>.Đ</td>
               <td>
                  <img src="../Img/img_product/<?php echo $se_product['anh']?>" style="height:200px; width: 300px; object-fit: cover" alt="">
               </td>
               <td><button type="button" class="btn btn-warning"> <a href="../Admin/view/edProduct.php?id=<?php echo $se_product['id']?>">
                                                <span>Edit</span></a></button></td>
              
               <td><button type="button" class="btn btn-danger"><a href="../config/delete_all.php?del_product=<?php echo $se_product['id']?>"
                                                onClick="return(confirm('bạn có chắc chắn muốn xóa'))">
                                            <span>Del</span></a></button></td>
            </tr>
            <?php }?>


            <!-- <tr>
               <th scope="row">2</th>
               <td>Mitsubishi Triton</td>
               <td>Đỗ Văn Tuấn</td>
               <td>420.000.000 VNĐ</td>
               <td>
                  <img src="../img/Oto_2/1.jpg" style="height:200px; width:300px; object-fit: cover">
               </td>
               <td><button type="button" class="btn btn-warning">Edit</button></td>
               <td><button type="button" class="btn btn-danger">Del</button></td>
            </tr>
            <tr>
               <th scope="row">2</th>
               <td>Alltis</td>
               <td>Đinh Đức Anh</td>
               <td>350.000.000 VNĐ</td>
               <td>
                  <img src="../img/Oto_3/1.jpg" style="height:200px; width:300px; object-fit: cover">
               </td>
               <td><button type="button" class="btn btn-warning">Edit</button></td>
               <td><button type="button" class="btn btn-danger">Del</button></td>
            </tr> -->
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