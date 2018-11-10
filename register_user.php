<?php

//connect to the db
include "includes/dbconnect.php";
session_start();

//receive input from html

$name=$_POST['user_name'];
$email=$_POST['user_email'];
$pass=$_POST['user_password'];
echo "<br>";

$hpass=md5($pass);
//$hpass=password_hash($pwd,PASSWORD_DEFAULT);
//insert data
$query="INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES (NULL, '$name', '$email', '$pass')";

if(mysqli_query($conn,$query))
{
	//redirect
	$query1="SELECT * FROM `users` WHERE `user_email` LIKE '$email'";
	$row1=mysqli_query($conn,$query1);
	$result=mysqli_fetch_assoc($row1);
	$_SESSION['name']=$result['user_name'];
	//set name in second sessino variable
	//create session variable
	$_SESSION['is_logged_in']=1;
	$_SESSION['user_id']=$result['user_id'];
	header('location: index.php');

}

else{
	//incorrect
	print $_POST['user_name'] ." user already exists.<br>";
	echo "try again!";
}

?>