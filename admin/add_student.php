<?php require 'control/admin.php' ?>
<?php require 'common/header.php' ?>
<?php require 'control/dbconnect.php' ?>

<section style="margin-top: 30px">
 <div class="container">
  <a href="home.php" class="btn btn-info" style="margin-bottom: 5px; padding-left: 15px;padding-right: 15px"><h4><i class="glyphicon glyphicon-arrow-left">   Back</i></h4></a>
   <div class="row">
     <div class="col-md-6">
       <div class="well" style="text-align:center">
         <a href="#"><h1><i class="fa fa-picture-o" aria-hidden="true"></i></h1>
         <img src="../img/pic.png">
        </a>
       </div>
       <div class="well" style="text-align:center">
         <a href="#"><h1><i class="fa fa-folder" aria-hidden="true"></i></h1>
         <p>Upload CV</p></a>
       </div>
     </div>

     <div class="col-md-6">
       <div class="well">
         <form action="insert/insert-contact.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label for="exampleInputEmail1">Name</label>
             <input type="text" class="form-control" name="name"  placeholder="ຊື່ ແລະ ນາມສະກຸນ" required>
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Photo</label>
             <input type="file" class="form-control" name="img_menu" id="src_img"  placeholder="ຊື່ ແລະ ນາມສະກຸນ" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">ID Student</label>
             <input type="text" class="form-control" name="student"  placeholder="ລະຫັດນັກສືກສາ" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">E-mail</label>
             <input type="email" class="form-control" name="email"  placeholder="ອີເມວ" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Phone</label>
             <input type="text" class="form-control" name="phone"  placeholder="ເບີໂທລະສັບ" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Village</label>
             <input type="text" class="form-control" name="ban"  placeholder="ທີ່ຢູ່" required>
           </div>
           <center>
             <button type="submit" class="btn btn-info">ລົງທະບຽນ</button>
           </center>
         </form>
       </div>
     </div>
   </div>
 </div>
</section>