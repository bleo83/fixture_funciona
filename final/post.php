<?php
session_start();	
$name = $_GET['nombre'];
$email = $_GET['correo'];
$message = $_GET['mensaje'];
$subject = 'New message via web form, from ' . $name;
if(strtolower($_REQUEST['code']) == strtolower($_SESSION['random_number']))
{
$TO = "bleo83@gmail.com";
$h = "From: " . $email;
$content = "$name ($email) sent you the following message :\n\n$message";
mail($TO, $subject, $content, $h);		
	echo 1;		
}	
else
{
	echo 0; // invalid code
}
?>