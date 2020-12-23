<?php

	header('Access-Control-Allow-Origin: *');
	include '../api_conf.php';
	require './send_confirmation.php';

	// data request from json
	$request = file_get_contents("php://input");
	$data    = json_decode($request);

	$id = rand(1000000,9999999);
	$enterpriser_email            = $data -> enterpriser_email;
	$enterpriser_password         = $data -> enterpriser_password;
	$enterpriser_link_referral    = $data -> enterpriser_link_referral;
	$enterpriser_link_referee     = $data -> enterpriser_link_referee;


	// email validation
	$email_exist = $dale->kueri("SELECT * FROM `enterpriser` WHERE `enterpriser_email` = '".$enterpriser_email."'");
	$email_exist = json_decode($email_exist);

	// email exist
	if(sizeof($email_exist) > 0){
		echo json_encode(array('error_code' => 'email_already_registered'));
	}

	// if email didn't exist
	else{

		$enterpriser_email_confirmation = md5(date('U') . $enterpriser_email);
		$data = $dale->kueri("INSERT INTO `enterpriser` 
							  SET enterpriser_id                 = '".$id."', 
							      enterpriser_email              = '".$enterpriser_email."',
							      enterpriser_password           = '".$enterpriser_password."',
							      enterpriser_link_referral      = '".$enterpriser_link_referral."',
							      enterpriser_link_referee       = '".$enterpriser_link_referee."',
							      enterpriser_email_confirmation = '".$enterpriser_email_confirmation."'
		 					    ON DUPLICATE KEY UPDATE
							      enterpriser_email              = '".$enterpriser_email."',
							      enterpriser_password           = '".$enterpriser_password."',
							      enterpriser_link_referral      = '".$enterpriser_link_referral."',
							      enterpriser_link_referee       = '".$enterpriser_link_referee."',
							      enterpriser_email_confirmation = '".$enterpriser_email_confirmation."'");
		
		echo json_encode(array('error_code' => 'success'));
	}
?>