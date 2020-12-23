<?php
	
	include '../api_conf.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = $dale -> kueri("SELECT `enterpriser_first_name`,`enterpriser_last_name`,`enterpriser_link_referral` FROM `enterpriser` WHERE `enterpriser_link_referral` = '".$id."' AND `enterpriser_email_confirmation` = 'active'");
		$data = json_decode($data);

		if($data != null){
			echo json_encode($data[0]);
		}

		else{
			echo json_encode(null);
		}
	}
	
	
?>