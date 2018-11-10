<?php

include "includes/dbconnect.php";


//receive input from html
$email=$_POST['admin_email'];
$pass=$_POST['admin_password'];
$num_rows=0;

echo "<br>";


include "includes/dbconnect.php";

//receive input from html

$email=$_POST['admin_email'];
$pass=$_POST['admin_password'];

echo "<br>";

//insert data
$query="SELECT * FROM `admin` WHERE `admin_email` LIKE '$email' AND `admin_password` LIKE '$pass'";
$row=mysqli_query($conn,$query);

$num_rows=mysqli_num_rows($row);

if($num_rows==1)
{	
	header('location:admin_profile');
}

else{
	//incorrect
	echo "Incorrect credentials!";
}

?>