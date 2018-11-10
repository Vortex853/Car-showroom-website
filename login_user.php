<?php

include "includes/dbconnect.php";
session_start();

//receive input from html

$email=$_POST['user_email'];
$pass=$_POST['user_password'];

$hpass=md5($pass);
echo "<br>";

//insert data
$query="SELECT * FROM `users` WHERE `user_email` LIKE '$email' AND `user_password` LIKE '$pass'";
$row=mysqli_query($conn,$query);

$num_rows=mysqli_num_rows($row);

if($num_rows==1)
{	//retrieve name from the db
	$query1="SELECT * FROM `users` WHERE `user_email` LIKE '$email'";
	$row1=mysqli_query($conn,$query1);
	$result=mysqli_fetch_assoc($row1);
	$_SESSION['name']=$result['user_name'];
	//set name in second sessino variable
	//create session variable
	$_SESSION['is_logged_in']=1;
	$_SESSION['user_id']=$result['user_id'];
	header('location:index.php');
}

else{
	//incorrect
	echo "Incorrect credentials!";
}

?>