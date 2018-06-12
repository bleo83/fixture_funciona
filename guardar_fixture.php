<?php
session_start();
if (isset($_SESSION['usuario'])){

    require "conexion.php";
	include "partidos.php";
	
	$user = $_SESSION['usuario'];
	
	
	$sqluser ="SELECT id FROM user WHERE user ='$user' ";
	
	$resultado = mysqli_query($link,$sqluser);
	$resultado2 = mysqlI_fetch_assoc ($resultado);
	
	$userlogin = $resultado2 ['id'];
	
	
	
	
	
	for ($l=0; $l <8 ; $l++){
		$k=0;
		for ($i=0; $i<6; $i++){
				$k++;
				$name=$gname[$l].$k;
				$letra=$gname[$l];
				$goll= "gol".$name."l";
				$golv= "gol".$name."v";
				${"group$letra"}[$i][3]= $_POST [$goll];
				${"group$letra"}[$i][4]= $_POST [$golv];
					$sql ="INSERT INTO pronostico VALUES (NULL,".$userlogin.",
											  ".${"group$letra"}[$i][0].",
											  '".${"group$letra"}[$i][1]."',
											  '".${"group$letra"}[$i][2]."',
											  '".${"group$letra"}[$i][5]."',
											  ".${"group$letra"}[$i][3].",
											  ".${"group$letra"}[$i][4].",0,0)";
					mysqli_query($link,$sql);
					$check = mysqli_affected_rows($link);				
					
					
		}
	}
	
	$ko=0;
		for ($bo=0; $bo<8; $bo++){
			$ko++;
			$name = $gname[$bo].$ko;
			$letra = $gname[$bo];
			
			$equipo1 = "pais1".$ofname1[$bo];
			$equipo2 = "pais2".$ofname2[$bo];
			$goloct1 = "ocgl".$ko."l";
			$goloct2 = "ocgl".$ko."v";
			$penoct1 = "ocgp".$ko."l";
			$penoct2 = "ocgp".$ko."v";
			
			$octavos[$bo][2] = $_POST [$equipo1];
			$octavos[$bo][3] = $_POST [$equipo2];
			$octavos[$bo][4] = $_POST [$goloct1];
			$octavos[$bo][5] = $_POST [$goloct2];
			$octavos[$bo][6] = $_POST [$penoct1];
			$octavos[$bo][7] = $_POST [$penoct2];
			
			if ($octavos[$bo][6] == "" && $octavos[$bo][7] =="" ){
					$octavos[$bo][6] = 0;
					$octavos[$bo][7] = 0;
				
			}
			
			

		
					$sqloct ="INSERT INTO pronostico VALUES (NULL,".$userlogin.",
											  ".$octavos[$bo][0].",
											  '".$octavos[$bo][1]."',
											  '".$octavos[$bo][2]."',
											  '".$octavos[$bo][3]."',
											  ".$octavos[$bo][4].",
											  ".$octavos[$bo][5].",
											  ".$octavos[$bo][6].",
											  ".$octavos[$bo][7].")";
					mysqli_query($link,$sqloct);
					$check1 = mysqli_affected_rows($link);

					
		}			
					
//INCIO CUARTOS DE FINAL

	$kc=0;
		for ($bc=0; $bc<4; $bc++){
			$kc++;
			
			
			$equipoc1 = "cupais".$kc."l";;
			$equipoc2 = "cupais".$kc."v";;
			$golcua1 =  "cugl".$kc."l";
			$golcua2 =  "cugl".$kc."v";
			$pencua1 =  "cugp".$kc."l";
			$pencua2 =  "cugp".$kc."v";
			
			$cuartos[$bc][2] = $_POST [$equipoc1];
			$cuartos[$bc][3] = $_POST [$equipoc2];
			$cuartos[$bc][4] = $_POST [$golcua1];
			$cuartos[$bc][5] = $_POST [$golcua2];
			$cuartos[$bc][6] = $_POST [$pencua1];
			$cuartos[$bc][7] = $_POST [$pencua2];
			
			if ($cuartos[$bc][6] == "" && $cuartos[$bc][7] =="" ){
					$cuartos[$bc][6] = 0;
					$cuartos[$bc][7] = 0;
				
			}
			
			
				
					$sqlcua ="INSERT INTO pronostico VALUES (NULL,".$userlogin.",
											  ".$cuartos[$bc][0].",
											  '".$cuartos[$bc][1]."',
											  '".$cuartos[$bc][2]."',
											  '".$cuartos[$bc][3]."',
											  ".$cuartos[$bc][4].",
											  ".$cuartos[$bc][5].",
											  ".$cuartos[$bc][6].",
											  ".$cuartos[$bc][7].")";
					mysqli_query($link,$sqlcua);
					$check2 = mysqli_affected_rows($link);
				
		}

//INICIO DE SEMIFINAL

$ks=0;
		for ($bs=0; $bs<2; $bs++){
			$ks++;
			
			
			$equipos1 = "sfpais".$ks."l";;
			$equipos2 = "sfpais".$ks."v";;
			$golsem1 =  "sfgl".$ks."l";
			$golsem2 =  "sfgl".$ks."v";
			$pensem1 =  "sfgp".$ks."l";
			$pensem2 =  "sfgp".$ks."v";
			
			$semi[$bs][2] = $_POST [$equipos1];
			$semi[$bs][3] = $_POST [$equipos2];
			$semi[$bs][4] = $_POST [$golsem1];
			$semi[$bs][5] = $_POST [$golsem2];
			$semi[$bs][6] = $_POST [$pensem1];
			$semi[$bs][7] = $_POST [$pensem2];
			
			if ($semi[$bs][6] == "" && $semi[$bs][7] =="" ){
					$semi[$bs][6] = 0;
					$semi[$bs][7] = 0;
				
			}
			$semi[$bs][0];
			$semi[$bs][1];
			$semi[$bs][2];
			$semi[$bs][3];
			$semi[$bs][4];
			$semi[$bs][5];
			$semi[$bs][6];
			$semi[$bs][7];
			
					$sqlsem ="INSERT INTO pronostico VALUES (NULL,".$userlogin.",
											  ".$semi[$bs][0].",
											  '".$semi[$bs][1]."',
											  '".$semi[$bs][2]."',
											  '".$semi[$bs][3]."',
											  ".$semi[$bs][4].",
											  ".$semi[$bs][5].",
											  ".$semi[$bs][6].",
											  ".$semi[$bs][7].")";
					mysqli_query($link,$sqlsem);
					$check3 = mysqli_affected_rows($link);
					
		}

//INICIO DE TERCER Y CUARTO PUESTO

		
			$tercer [0][2] = $_POST ['tcpais1l'];
			$tercer [0][3] = $_POST ['tcpais1v'];
			$tercer [0][4] = $_POST ['tcgl1l'];
			$tercer [0][5] = $_POST ['tcgl1v'];
			$tercer [0][6] = $_POST ['tcgp1l'];
			$tercer [0][7] = $_POST ['tcgp1v'];
			
			if ($tercer[0][6] == "" && $tercer[0][7] =="" ){
					$tercer[0][6] = 0;
					$tercer[0][7] = 0;
				
			}
			$tercer [0][0];
			$tercer [0][1];
			$tercer [0][2];
			$tercer [0][3];
			$tercer [0][4];
			$tercer [0][5];
			$tercer [0][6];
			$tercer [0][7];
				
					$sqltercer ="INSERT INTO pronostico VALUES (NULL,".$userlogin.",
											  ".$tercer[0][0].",
											  '".$tercer[0][1]."',
											  '".$tercer[0][2]."',
											  '".$tercer[0][3]."',
											  ".$tercer[0][4].",
											  ".$tercer[0][5].",
											  ".$tercer[0][6].",
											  ".$tercer[0][7].")";
					mysqli_query($link,$sqltercer);
					$check4 = mysqli_affected_rows($link);
					
					
//INICIO DE FINAL

		
			$final [0][2] = $_POST ['fipais1l'];
			$final [0][3] = $_POST ['fipais1v'];
			$final [0][4] = $_POST ['figl1l'];
			$final [0][5] = $_POST ['figl1v'];
			$final [0][6] = $_POST ['figp1l'];
			$final [0][7] = $_POST ['figp1v'];
			
			if ($final[0][6] == "" && $final[0][7] =="" ){
					$final[0][6] = 0;
					$final[0][7] = 0;
				
			}

					$sqlfinal ="INSERT INTO pronostico VALUES (NULL,".$userlogin.",
											  ".$final[0][0].",
											  '".$final[0][1]."',
											  '".$final[0][2]."',
											  '".$final[0][3]."',
											  ".$final[0][4].",
											  ".$final[0][5].",
											  ".$final[0][6].",
											  ".$final[0][7].")";
					mysqli_query($link,$sqlfinal);
					$check5 = mysqli_affected_rows($link);
					

//INICIO DE CAMPEON

		
			$campeon = $_POST ['capais'];
					
		
			
					$sqlcampeon ="INSERT INTO campeon VALUES (NULL,".$userlogin.",'".$campeon."')";
					
					mysqli_query($link,$sqlcampeon);
					$check6 = mysqli_affected_rows($link);
			
			
			if ($check6>0){		
			$sqlusuario ="UPDATE user SET fixture_completo=1 WHERE id='$userlogin' ";
			mysqli_query($link,$sqlusuario);	
			
			
			
			
			echo '<script>location.href = "save.php";</script>';
			 }
			
mysqli_close($link);

}
    ?>
