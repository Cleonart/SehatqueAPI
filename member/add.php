<?php

	header('Access-Control-Allow-Origin: *');
	include '../api_conf.php';

	// data request from json
	$request = file_get_contents("php://input");
	$data    = json_decode($request);

	$id = rand(1000000,9999999);
	$enterpriser_name             = $data -> enterpriser_name;
	$enterpriser_email            = $data -> enterpriser_email;
	$enterpriser_password         = $data -> enterpriser_password;
	$enterpriser_telephone_number = $data -> enterpriser_telephone_number;
	$enterpriser_link_referral    = $data -> enterpriser_link_referral;
	$enterpriser_link_referee     = $data -> enterpriser_link_referee;

	$data = $dale->kueri("INSERT INTO `enterpriser` 
						  SET enterpriser_id               = '".$id."', 
							  enterpriser_name             = '".$enterpriser_name."', 
						      enterpriser_email            = '".$enterpriser_email."',
						      enterpriser_password         = '".$enterpriser_password."',
						      enterpriser_telephone_number = '".$enterpriser_telephone_number."',
						      enterpriser_link_referral    = '".$enterpriser_link_referral."',
						      enterpriser_link_referee     = '".$enterpriser_link_referee."'
	 					    ON DUPLICATE KEY UPDATE
	 					      enterpriser_name             = '".$enterpriser_name."', 
						      enterpriser_email            = '".$enterpriser_email."',
						      enterpriser_password         = '".$enterpriser_password."',
						      enterpriser_telephone_number = '".$enterpriser_telephone_number."',
						      enterpriser_link_referral    = '".$enterpriser_link_referral."',
						      enterpriser_link_referee     = '".$enterpriser_link_referee."'");
	echo json_encode($data);
?>