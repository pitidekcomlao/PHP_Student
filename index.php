<?php require 'header.php' ?>

    <section style="margin-top:30px">
      <div class="container">
        <div class="well">
          <h1 style="text-align:center;color:#E65100">  ລະບົບລົງທະບຽນນັກສືກສາຫ້ອງ2ຄອມພີວເຕີ     </h1>
        </div>
      </div>
    </section>

    <div id="loader"></div>

<section>
 <div class="container">
   <div class="row">
     <div class="col-md-6">
       <div class="well" style="text-align:center">
         <a href="#">
         <img src="img/pic.png"></a>
       </div>
       <div class="well" style="text-align:center">
         <div class="progress">
           <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
  40%
  </div>
</div>
       </div>
     </div>

     <div class="col-md-6">
       <div class="well">
         <form action="admin/insert/insert-contact.php" method="post" enctype="multipart/form-data">
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

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
  </body>
</html>
