<?php require 'control/login.php' ?>
<?php require 'common/header.php' ?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style type="text/css">
    body{
      background-image: url(wal.jpg);
    }
  </style>
</head>
<body>

  <div class="signin-form" style="margin-top: 200px">
  <div class="container">
       <form class="form-signin" method="post" id="login-form">

        <h2 class="form-signin-heading" style="text-align:center">ເຂົ້າສູ່ລະບົບ</h2><hr />

        <?php
    if(isset($msg)){
      echo $msg;
    }
    ?>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="ອີເມວ" name="email" required />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="ລະຫັດຜ່ານ" name="password" required />
        </div>

      <hr />
                <a href="register.php">.</a>
        <div class="form-group">
          <center>
            <button type="submit" class="btn btn-info" name="btn-login" id="btn-login">
              <span class="glyphicon glyphicon-log-in"></span> &nbsp; ເຂົ້າສູ່ລະບົບ
           </button>
          </center>
            <!-- <a href="register.php" class="btn btn-default" style="float:right;">Sign In</a> -->
        </div>
      </form>
    </div>
</div>

</body>
</html>


<?php require 'common/footer.php' ?>
