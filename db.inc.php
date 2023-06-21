<?php



$serverName = "localhost";
$dBUsername = "root";
$dBPassword ="";
$dBName = "final_project";

$con = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if(!$con){
	die("connection failed: ".mysqli_connect_error());
}