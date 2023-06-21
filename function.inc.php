<?php
function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat ){
	$result;
	if(empty($name) || empty($email)|| empty($username)|| empty($pwd)|| empty($pwdRepeat)){
		$result= true;
	}
	else{
		$result= false;
	}
	return $result;
}
function invalidUid($username ){
	$result;
	if(!preg_match(("/^[a-zA-Z0-9]*$/"), $username)){
		$result= true;
	}
	else{
		$result= false;
	}
	return $result;
}

function invalidEmail($email ){
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result= true;
	}
	else{
		$result= false;
	}
	return $result;
}

function pwdMatch($pwd,$pwdRepeat){
	$result;
	if($pwd!== $pwdRepeat){
		$result= true;
	}
	else{
		$result= false;
	}
	return $result;
}

function uidExists($con,$username,$email){
	$sql= "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";// we asking for either userId or an Email 
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location:signup.php?eror=stmtfail");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "ss",$username,$email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);
	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);

}

function createUser($con,$name,$email,$username,$pwd){
	$sql= "INSERT INTO users (userName, userEmail, userUid, userPwd) VALUES (?, ?, ?, ?); ";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location:signup.php?erorr=stmtfail");
		exit();
	}
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);// I hashed to cover the passwords of the users

	mysqli_stmt_bind_param($stmt, "ssss",$name,$email,$username,$hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location:signup.php?error=none");
	exit();



}

// login fucntions

function emptyInputLogin($username,$pwd){
	$result;
	if( empty($username)|| empty($pwd)){
		$result= true;
	}
	else{
		$result= false;
	}
	return $result;
}

function loginUser($con,$username,$pwd ){
	$uidExists = uidExists($con,$username,$username); // so for login to use either the userID or the email

	if($uidExists===false){
		header("location:login.php?error=wronglogin");
		exit();
	}
	$pwdHashed=$uidExists["userPwd"];
	$chickPwd=password_verify($pwd,$pwdHashed); //ready function to chick the entered password 

	if($chickPwd===false){
		header("location:login.php?error=wronglogin");
		exit();
	}
	else if($chickPwd===true){
		session_start();
		$_SESSION["userid"] = $uidExists["userEmail"];
		$_SESSION["useruid"] = $uidExists["userUid"];

		header("location:index_cart.php");
		exit();

		}
}