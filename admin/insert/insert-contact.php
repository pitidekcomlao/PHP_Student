<?php

require '../control/dbconnect.php';

$user_name = html_entity_decode($_POST["name"]);
$user_student = $_POST["student"];
$user_email = $_POST["email"];
$user_phone = $_POST["phone"];
$user_ban = $_POST["ban"];

$target_dir = "../../img/uploads/";
$user_img = md5(basename($_FILES["img_menu"]["name"]).microtime()).basename($_FILES["img_menu"]["name"]);
$target_file = $target_dir.$user_img;
$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img_menu"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if($uploadOk == 1){
	if (move_uploaded_file($_FILES["img_menu"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img_menu"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

	$query = "INSERT INTO `user` (`user_id`, `user_name`, `user_student`, `user_email`,`user_phone`,`user_ban`,`user_img`) VALUES (NULL, '"
   . $user_name ."','$user_student','$user_email','$user_phone','$user_ban','$user_img')";

	$result = mysqli_query($DBcon, $query);

	if ($result) {
		echo "ເພືີ່ມສຳເລັດ";
		header('Location: ../../sucsess.php');
		exit();
	}
	else{
		echo "ເພີ່ມບໍ່ໄດ້". mysqli_error($DBcon);
	}

}

?>
