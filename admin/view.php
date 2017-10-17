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
          <h1 style="text-align:center;color:#E65100"> ຂໍ້ມູນນັກສືກສາ   </h1>
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
         <h3>ນັກສືກສາປະຣີນຍາຕີ</h3>
       </div>
     </div>

     <div class="col-md-6">
       <div class="well">
         <h4>
           <b>ຊື່ ແລະ ນາມສະກຸນ :</b> <?php echo $row["user_name"]; ?><br><br>
           <b>ລະຫັດນັກສືກສາ :</b> <?php echo $row["user_student"]; ?><br><br>
           <b>ອີເມວນັກສືກສາ :</b> <?php echo $row["user_email"]; ?><br><br>
           <b>ເບີໂທລະສັບ :</b> <?php echo $row["user_phone"]; ?><br><br>
           <b>ທີ່ຢູ່ :</b> <?php echo $row["user_ban"]; ?><br><br>
           <b></b><br><br><br><br>
           <center><b><a href="home.php"  class="btn btn-info">ກັບຄືນ</a></b></center>
         </h4>
       </div>
     </div>
   </div>
 </div>
</section>

  </body>
</html>
