<?php
 
session_start();
if (isset($_SESSION['usuario']))
{

    require "conexion.php";
	include "partidos.php";
	
	//Seleccion de usuario
	$user = $_SESSION['usuario'];

	$sql="SELECT user  FROM user";
	$resultado=mysqli_query($link,$sql); // ejecuto la consulta sql

	
	 //Combo de Usuarios ?>
	
	<form action="editar-producto.php" method="post" >
	<select name="user_id" id="user_id">
		<?php 
			while ($fila=mysqli_fetch_assoc ($resultado)){
								
				if($fila['user'] == $user){
					$selected="selected";
				}else{
					$selected="";
				} ?>

					<option selected="<?php echo $selected; ?>" value="<?php echo $fila['user']; ?>"><?php echo $fila['user']; ?></option>

		<?php } ?>
						</select>
						</td>
		
	</form>
 <?php
}
?>