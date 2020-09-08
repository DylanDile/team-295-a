<?php
include_once('classes/Login.php');
$user  =  new Login();
if(isset($_GET['email']) && isset($_GET['password']))
{	
	$email = $_GET["email"];
	$password = $_GET['password'];
	echo $user->login($email, $password);
}
else
{
	echo '{ "error" : "Please provide you email and password" }';
}
?>