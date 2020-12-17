<?php
	
	include '../api_conf.php';

	$data = $dale -> kueri("SELECT * FROM `enterpriser`");
	$data = json_decode($data);
    $json_data;

    for($i = 0; $i < sizeof($data); $i++){

		$json_data[$i][0]['data']  = $data[$i] -> enterpriser_id;
		$json_data[$i][0]['type']  = "id";

		// nama layanan
		$json_data[$i][1]['data']  = $data[$i] -> enterpriser_name;
		$json_data[$i][1]['type']  = "text";
		$json_data[$i][1]['class'] = "";

		// harga layanan
		$json_data[$i][2]['data']  = '#'.$data[$i] -> enterpriser_link_referral;
		$json_data[$i][2]['type']  = "text";
		$json_data[$i][2]['class'] = "";
	}
	// table header
	$json_header = [];
	$json_header[0] = "ID";
	$json_header[1] = "Nama Enterpriser";
	$json_header[2] = "Link Referral";
	$json_settings = array('search_index' => 1);

		$output = array('raw_data'     => $json_data, 
						'table_header' => $json_header,
						'settings'     => $json_settings);
		echo json_encode($output);
	
?>