<?php 
	$email = $_GET["email"];
	$message = $_GET["content"];

	$fb_array = array ("email"=>$email,"message"=>$message);

	file_put_contents("../feedbacks/".$email.strtotime("now")."json", json_encode($fb_array));
?>	