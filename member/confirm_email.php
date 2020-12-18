<?php
		
	require '../api_conf.php';

	function kueri_get_user_by_confirmation_code($auth_code){
		$kry  = "SELECT `enterpriser_id` ";
		$kry .= "FROM `enterpriser` ";
		$kry .= "WHERE `enterpriser_email_confirmation` = '".$auth_code."'";
		return $kry;
	}

	function kueri_update_confirmation_to_active($enterpriser_id){
		$kry  = "UPDATE `enterpriser` ";
		$kry .= "SET `enterpriser_email_confirmation` = 'active' ";
		$kry .= "WHERE `enterpriser_id` = '".$enterpriser_id."'";
		return $kry;
	}

	if(isset($_GET['auth_code']) && $_GET['auth_code'] != 'active'){

		// mengambil dan mengecek data berdasarkan kode otentikasi [auth_code]
		$auth_code_exist = $dale -> kueri(kueri_get_user_by_confirmation_code($_GET['auth_code']));
		$auth_code_exist = json_decode($auth_code_exist);

		// jika terdapat data yang terdaftar [besarnya array > 0]
		if(sizeof($auth_code_exist) > 0 ){

			$auth_code_exist = $auth_code_exist[0];

			// mengupdate field [enterpriser_email_confirmation]
			$confirm_email = $dale -> kueri(kueri_update_confirmation_to_active($auth_code_exist -> enterpriser_id));

			// memberikan tanda pesan sukses
			echo json_encode(array('error_code' => 'success'));
		}
		else{
			echo json_encode(array('error_code' => 'link_expired'));
		}

	}

?>