<?php
    
	session_start();
	$conn = mysql_connect("localhost", "admzonarg", "catarojo1") or die ("que no hay conexion");
	
	if ($_POST['email_log']){
		$email=$_POST['email_log'];
		$password=$_POST['password_log'];
		if ($password==NULL){
			echo "La contraseña no fue ingresada";
		}else{
			$query=mysqli_query("SELECT email,password FROM user WHERE email='$email'") or die (mysqli_error());
			$data = mysqli_fetch_array($query);
			if ($data['password']!=$password){
				echo "Login Incorrecto";
			}else{
				$query= mysqli_query("SELECT email,password FROM user WHERE email ='$email'") or 
				die(mysqli_error());
				$_SESSION["s_email"] = $row ['email'];
				echo "Has sido logueado correctamente".$_SESSION['s_email']."y puedes acceder a grupos.php";
			}
		}
	
	}
	
?>