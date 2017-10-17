<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'control/dbconnect.php';

if(isset($_POST['btn-signup'])) {

	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);

	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);

	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

	$check_email = $DBcon->query("SELECT email FROM admin WHERE email='$email'");
	$count=$check_email->num_rows;

	if ($count==0) {

		$query = "INSERT INTO admin(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}

	} else {


		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";

	}

	$DBcon->close();
}
?>
<?php require 'common/header.php' ?>
<div class="signin-form">

	<div class="container">


       <form class="form-signin" method="post" id="register-form">

        <h2 class="form-signin-heading" style="text-align:center">ລົງທະບຽນເຂົ້າສູ່ລະບົບ</h2><hr />

        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" required  />
        </div>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>

     	<hr />

        <div class="form-group">
            <button type="submit" class="btn btn-danger" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp;ລົງທະບຽນ
			</button>
            <a href="index.php" class="btn btn-info" style="float:right;">ເຂົ້າສູ່ລະບົບ</a>
        </div>

      </form>

    </div>

</div>

</body>
</html>
