<?php
 
session_start();
if (isset($_SESSION['usuario']))
{

    require "conexion.php";
	include "partidos.php";
	echo $_POST['user_id'];
	//Seleccion de usuario
		
	 //Combo de Usuarios ?>
	
	<form  method="POST" >
	<select name="user_id" onchange="submit()" >
	
	<?php

		$sql="SELECT id,user  FROM user";
		$rec=mysqli_query($link,$sql); // ejecuto la consulta sql
		while ($fila=mysqli_fetch_assoc ($rec))
		{
	
		echo "<option value='".$fila['id']."'";
		if($_POST['user_id']==$fila['id'])
		echo " SELECTED ";
		echo ">";
		echo $fila['user'];
		echo "</option>";

	}  
	?>

	</select>
	</form>

<?php
}
?>