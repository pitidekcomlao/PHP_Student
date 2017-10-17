<?php

	header('Content-type: application/json; charset=UTF-8');

	require '../config.php';

	$response = array();

	if ($_POST['delete']) {

		//require_once 'dbconfig.php';

		$pid = intval($_POST['delete']);
		$query = "DELETE FROM user WHERE user_id=:pid";
		// $stmt = $DBcon->prepare( $query );
		// $stmt->execute(array(':pid'=>$pid));
		$sql = " DELETE FROM user WHERE user_id = '$pid'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			$response['status']  = 'success';
			$response['message'] = 'ລົບລາຍຊື່ສຳເລັດຢ່າງສົມບູນແບບ 100%...';
		}
		else{
			$response['status']  = 'error';
		 	$response['message'] = 'ຍັງບໍ່ສາມາດລົບລາຍຊື່ໄດ້ ...';
		}

		mysqli_close($conn);
		echo json_encode($response);
	}
