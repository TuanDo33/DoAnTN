<link rel="stylesheet" href="../../CSS/cssAdmin.css">
<div class="box_acc">
   <form action="GET" class="form_list">
      <table class="table tb_listAcc">
         <thead>
            <tr>
               <th scope=" col">#</th>
               <th scope="col">Name</th>
               <!-- <th scope="col">Phone Number</th> -->
               <th scope="col">Email</th>
               <th scope="col">Password</th>
               <th scope="col">Edit</th>
               <th scope="col">Del</th>
            </tr>
         </thead>
         <tbody>
         <?php
               include('../GIAODIEN/view/control_user.php');
               $get_data=new data();
               $select_all=$get_data->se_acc('accounts_user');
               foreach ($select_all as $se_acc)
               {
               ?>
            <tr></tr>
            <tr>
               <th scope="row"><?php echo $se_acc['id']?></th>
               <td><?php echo $se_acc['username']?></td>
               <td><?php echo $se_acc['email']?></td>
               <td><?php echo $se_acc['password']?></td>
               <td><button type="button" class="btn btn-warning"><a href="<?php echo $se_acc['id']?>">
                                                <span>Edit</span></a></button></td>
               <td><button type="button" class="btn btn-danger"><a href="../config/delete_acc2.php?del_acc2=<?php echo $se_acc['id']?>"
                                                onClick="return(confirm('bạn có chắc chắn muốn xóa'))">
                                            <span>Del</span></a></button></td>
            </tr>
            <?php }?>
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