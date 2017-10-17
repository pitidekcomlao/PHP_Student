<?php   require '../config.php' ?>

<?php

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_student = $_POST['user_student'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];
$user_ban = $_POST['user_ban'];

$q = "UPDATE user SET user_name='$user_name', user_student='$user_student',
 user_email='$user_email',user_phone='$user_phone', user_ban='$user_ban' WHERE user_id='$user_id'";

$result = mysqli_query($conn, $q);
if ($result) {
  header( 'Location: ../sucsess.php' ) ;
}else {
  echo "ຜິດພາດ" .mysqli_error($conn);
}
mysqli_close($conn);



?>
