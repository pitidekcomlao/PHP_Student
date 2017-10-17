<?php require 'common/header.php' ?>
<?php require 'config.php' ?>

<?php

$user_id = $_GET['user_id'];
$query = "SELECT * FROM user WHERE user_id='$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC );

 ?>
    <section style="margin-top:30px">
      <div class="container">
        <div class="well">
          <h1 style="text-align:center;color:#E65100">  ແກ້ໄຂຂໍ້ມູນນັກສືກສາ   </h1>
        </div>
      </div>
    </section>

<section>
 <div class="container">
   <div class="row">
     <div class="col-md-6">
       <div class="well" style="text-align:center">
        <center>
         <img src="<?php echo "../img/uploads/".$row["user_img"]; ?>" alt="Responsive image" class="img-responsive">
        </center>
       </div>
       <div class="well" style="text-align:center">
         
       </div>
     </div>

     <div class="col-md-6">
       <div class="well">
         <form action="insert/user-update.php" method="post" >
           <div class="form-group">
             <label for="exampleInputEmail1">Name</label>
             <input type="text" class="form-control" name="user_name" value="<?php echo $row["user_name"]; ?>"   required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">ID Student</label>
             <input type="text" class="form-control" name="user_student" value="<?php echo $row["user_student"]; ?>"   required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">E-mail</label>
             <input type="email" class="form-control" name="user_email" value="<?php echo $row["user_email"]; ?> "  required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Phone</label>
             <input type="text" class="form-control" name="user_phone" value="<?php echo $row["user_phone"]; ?>"  required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Village</label>
             <input type="text" class="form-control" name="user_ban" value="<?php echo $row["user_ban"]; ?>"   required>
           </div>
           <center>
             <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
             <button type="submit" name="submit" class="btn btn-info">Update Data</button>
           </center>
         </form>
       </div>
     </div>
   </div>
 </div>
</section>

  </body>
</html>
