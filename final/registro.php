<?php


$user = $email = $password = $repassword = $name = $lastname = "";
 
$invalidField=array(); 

$user = $_POST["user"];  
$email = $_POST["mail"]; 
$password = $_POST["pass"];
$repassword = $_POST["repass"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$country= "Argentina";
$company= 1;
$idface = "";
$victoriaOK=0;
$DifGolOK=0;
$GolesOK=0;
$GolesPenalOK=0;
$Clasi8voOK=0;
$Clasi4toOK=0;
$ClasiSemiOK=0;
$ClasiTercerOK=0;
$ClasiFinalOK=0;
$CampeonOK=0;
$foto="";
$fixture_completo=0;

require 'conexion.php';
	$sql ="INSERT INTO user VALUES (NULL,'".$user."',
											  '".$email."',
											  '".$password."',
											  '".$name."',
											  '".$lastname."',
											  '".$country."',
											  ".$company.",
											  NULL,
											  ".$victoriaOK.",
											  ".$DifGolOK.",
											  ".$GolesOK.",
											  ".$GolesPenalOK.",
											  ".$Clasi8voOK.",
											  ".$Clasi4toOK.",
											  ".$ClasiSemiOK.",
											  ".$ClasiFinalOK.",
											  ".$CampeonOK.",
											  ".$ClasiTercerOK.",
											  '".$foto."',
											  ".$fixture_completo.")";	

$sqlz="SELECT user FROM user WHERE user='".$user."'";	
$usr=mysqli_query($link,$sqlz);
$registros=mysqli_num_rows($usr);


$sqle="SELECT email FROM user WHERE email='".$email."'";	
$email1=mysqli_query($link,$sqle);
$registrose=mysqli_num_rows($email1);	

if (empty($user) || $registros>0 || $registrose>0) {
	
	if (empty($user)){		
	 $invalidField['6'] = "* El campo 'Usuario' es obligatorio."; 
	}else{
		if ($registros>0){
			$invalidField['6'] = "* El 'Usuario' ya existe."; 
		}else{
			$invalidField['6'] = "* El 'Email' es ya existe."; 
		}
		
	}



}
else {
if (empty($email)) { 
      $invalidField['1'] = "* El campo 'E-Mail' es obligatorio."; }
else{
     if( !preg_match('/^[^@]+@[a-zA-Z0-9._-]+.[a-zA-Z]+$/', $email ) ){ 
            $invalidField['1'] = "* El campo 'E-Mail' es invalido."; 
        }else{
        	if (empty($password)) { 
       $invalidField['2'] = "* El campo 'Contraseña' es obligatorio.";  }
else{
       if (empty($repassword)) { 
           $invalidField['3'] = "* El campo 'Repetir Contraseña' es obligatorio."; }
       else{
              if ($password != $repassword){
                    $invalidField['3'] = "* La 'Contraseña' debe coincidir con el campo 'Repetir Password";
              }
        }
}
if (($password == $repassword)&& (!empty($email)) && (!empty($password))){
if (empty($name)) { $invalidField['4'] = "* El campo 'Name' es obligatorio."; }
			else{
					if (empty($lastname)) {$invalidField['5'] = "* El campo 'Last Name' es obligatorio."; }
				}
}
				}			
}


}
$count=0;
$count = count($invalidField);
  foreach($invalidField as $v)
  {
   echo "$v";
   echo "<br>";
  }
 echo "<br>";

if  ($count>0){
     return;
}else{
		mysqli_query($link,$sql);
					$check = mysqli_affected_rows($link);				
					echo $check;
					if ($check>0){
						echo '<script>location.href = "usuario.php"</script>';
					}
	
}







