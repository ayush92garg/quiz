<?php 
	$email = $_GET["email"];
	$message = $_GET["content"];
	$feedback_directory_path = "../feedback";
	$fb_array = array ("email"=>$email,"message"=>$message);

	file_put_contents($feedback_directory_path.$email.strtotime("now")."json", json_encode($fb_array));
?>	