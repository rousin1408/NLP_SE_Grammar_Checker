<?php
	// require 'autoload.php';

	// $host = $_ENV['DB_HOST'];
	// $user = $_ENV['DB_USERNAME'];
	// $pass = $_ENV['DB_PASSWORD'];
	// $db = $_ENV['DB_DATABASE'];

	// $koneksi = mysqli_connect($host, $user, $pass, $db);
	$koneksi = new mysqli('localhost', 'root', '', 'grammar_checker');

	if(!$koneksi) {
		die("Koneksi gagal : " . mysqli_connect_error());
	}
?>