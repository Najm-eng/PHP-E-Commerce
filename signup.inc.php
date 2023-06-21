<?php
// $user=$_POST['name'];
// $numb=$_POST['number'];
// $email=$_POST['email'];
// $pa=$_POST['pass'];


// $conn = mysqli_connect("localhost","root","","test_cisc");

	



// 	$sql = "INSERT INTO registration (user,num,email,password) VALUES ('$user','$numb','$email','$pa')";
// 	$res= mysqli_query($conn,$sql);
// if($res){
// 	echo"conract saved successfully";
// }
// else{
// 	die('connection Failed :' .$conn->connect_error);
// }

if(isset($_POST["submit"])){ //to makesure to access the page with only properl way
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	require_once 'db.inc.php';
	require_once 'function.inc.php';

	if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat ) !==false){
		header("location:signup.php?error=emptyinput");
		exit();
	}
	if(invalidUid($username ) !==false){
		header("location:signup.php?error=invaliduid");
		exit();
	}
	if(invalidEmail($email ) !==false){
		header("location:signup.php?error=invalidemail");
		exit();
	}
	if(pwdMatch($pwd,$pwdRepeat) !==false){
		header("location:signup.php?error=passworddontmatch");
		exit();
	}
	if(uidExists($con,$username,$email) !==false){
		header("location:signup.php?error=usernametaken");
		exit();
	}




createUser($con,$name,$email,$username,$pwd);
}
else{
	header("location:signup.php");
	exit();
}

