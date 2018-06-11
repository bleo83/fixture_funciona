<?php
 
session_start();
if (isset($_SESSION['usuario']))
{

    require "conexion.php";
	include "partidos.php";
	echo $_POST['user_id'];
	//Seleccion de usuario
		
	 //Combo de Usuarios ?>
	
	<form  method="post" >
	<select name="user_id" id="user_id" >
	
	<?php

		$sql="SELECT id,user  FROM user";
		$rec=mysqli_query($link,$sql); // ejecuto la consulta sql
		while ($fila=mysqli_fetch_assoc ($rec))
		{
	?>	
		<option selected="<?php echo "selected"; ?>" value="<?php echo $fila['id']; ?>"><?php echo $fila['user']; ?></option>
	<?php
	}  
	?>

	</select>
	</form>

<?php
}
?>