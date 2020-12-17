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

	$dale = new dale();
	$dale->konek_ke_database(HOST, DATABASE,USER,PASSWORD);

?>