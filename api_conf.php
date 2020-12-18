<?php
	
	require 'dale.php';

	/*
	define("HOST", "127.0.0.1");
	define("DATABASE", "tv.net");
	define("USER", "root");
	define("PASSWORD", "");
	*/
	
	define("HOST", "127.0.0.1");
	define("DATABASE", "sehatque");
	define("USER", "root");
	define("PASSWORD", "");

	define("APP_DEFAULT_GATEWAY", "http://localhost:8080/#");
	define("ENDPOINT", 'http://127.0.0.1/netsq');

	$dale = new dale();
	$dale->konek_ke_database(HOST, DATABASE,USER,PASSWORD);

?>