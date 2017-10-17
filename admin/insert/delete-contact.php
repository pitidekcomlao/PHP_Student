<?php
require '../config.php';

$user_id = $_GET ['user_id'];

$sql = " DELETE FROM user WHERE user_id = '$user_id'";
$query = "SELECT * FROM `user` WHERE user_id = '$user_id'" ;
$res = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($res);
if($data['user_img'] != ''){
	try{
		unlink($data['user_img']);
	} catch (Exception $e) {
       echo 'Caught exception in drink delete image: ' . $e->getMessage();
	}
}
$result = mysqli_query($con, $sql);

if ($result) {

	header("location: ../home.php");
}
else{

	echo "ລົບບໍ່ໄດ້". mysqli_error($con);
}

mysqli_close($con);

 ?>
