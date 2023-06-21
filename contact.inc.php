<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$mailFrom=$_POST['email'];
	$phone=$_POST['telephone'];
	$message=$_POST['message'];

	$mailTo="n0jm202@gmail.com";
	$headers = "From: ".$mailFrom;
	$text = "You have received email from ".$name.".\n\n".$message."\n there phone nember:\n".$phone;


	mail($mailTo,$subject,$text,$headers);
	header("Location:Contact.php?error=none");

}