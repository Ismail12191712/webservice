<?php
	$connection = mysqli_connect ("localhost", "root", "", "pelanggan")
	or die("Error". mysqli_error($connection));
	
	$customers = [
		"Id pelanggan " => "001", 
		"Nama pelanggan" => "Anisa",
		"Alamat" => [
			"Alamat" => "Jakarta",
			"No telepon" => "083263862386",
			"Email" => "Anisa123@gggg.com"
			],
		];
	$output = json_encode ($customers);
	echo $output;
?>