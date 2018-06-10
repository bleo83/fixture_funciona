<?php
session_start();
if (isset($_SESSION['usuario']))
{

    require "conexion.php";
	include "partidos.php";
	
	$user = $_SESSION['usuario'];
	
	
	$sqluser ="SELECT id FROM user WHERE user ='$user' ";
	
	$resultado = mysqli_query($link,$sqluser);
	$resultado2 = mysqlI_fetch_assoc ($resultado);
	
	$userlogin = $resultado2 [id];
	
	//echo $userlogin;
	
//INCIO GRUPOS
	
		
	for ($l=0; $l <8 ; $l++){
		$k=0;
		for ($i=0; $i<6; $i++){
		
				$k++;
				$name=$gname[$l].$k;
				$letra=$gname[$l];
				
				$sqlg ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".${"group$letra"}[$i][0]." ORDER BY id ASC";
				$resug= mysqli_query($link,$sqlg);
				$resug1 = mysqlI_fetch_assoc ($resug);
				
				
				${"group$letra"}[$i][3]= $resug1[gl];
				${"group$letra"}[$i][4]= $resug1[gv];
		}
	}
//INCIO OCTAVOS DE FINAL
		
		echo "OCTAVOS DE FINAL <br>";
		
		for ($bo=0; $bo<8; $bo++){
			
			
		$sqlo ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$octavos[$bo][0]." ORDER BY id ASC";
			$resuo= mysqli_query($link,$sqlo);
			$resuo1 = mysqlI_fetch_assoc ($resuo);
			
			
			echo $octavos[$bo][2] = $resuo1 [equipol];
			echo $octavos[$bo][3] = $resuo1 [equipov];
			echo $octavos[$bo][4] = $resuo1 [gl];
			echo $octavos[$bo][5] = $resuo1 [gv]."<br>";
			
			
			if (($resuo1 [gpl] >0) || ($resuo1 [gpv] >0)){
			echo $octavos[$bo][6] = $resuo1 [gpl];
			echo $octavos[$bo][7] = $resuo1 [gpv]."<br>";
				
			}
		}			
				
//INCIO CUARTOS DE FINAL
			
			echo "CUARTOS DE FINAL <br>";
	
		for ($bc=0; $bc<4; $bc++){
			
			$sqlc ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$cuartos[$bc][0]." ORDER BY id ASC";
			$resuc= mysqli_query($link,$sqlc);
			$resuc1 = mysqlI_fetch_assoc ($resuc);
			
			
			echo $cuartos[$bc][2] = $resuc1 [equipol];
			echo $cuartos[$bc][3] = $resuc1 [equipov];
			echo $cuartos[$bc][4] = $resuc1 [gl];
			echo $cuartos[$bc][5] = $resuc1 [gv]."<br>";
			
			
			if (($resuc1 [gpl] >0) || ($resuc1 [gpv] >0)){
			echo $cuartos[$bc][6] = $resuc1 [gpl];
			echo $cuartos[$bc][7] = $resuc1 [gpv]."<br>";
				
			}		
			
		}

//INICIO DE SEMIFINAL
		echo "SEMIFINAL <br>";

		for ($bs=0; $bs<2; $bs++){
			$sqls ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$semi[$bs][0]." ORDER BY id ASC";
			$resus= mysqli_query($link,$sqls);
			$resus1 = mysqlI_fetch_assoc ($resus);
			
			echo $semi[$bs][2] = $resus1 [equipol];
			echo $semi[$bs][3] = $resus1 [equipov];
			echo $semi[$bs][4] = $resus1 [gl];
			echo $semi[$bs][5] = $resus1 [gv]."<br>";
			
			
		if (($resus1 [gpl] >0) || ($resus1 [gpv] >0)){
			echo $semi[$bs][6] = $resus1 [gpl];
			echo $semi[$bs][7] = $resus1 [gpv]."<br>";
				
			}
			

		}

//INICIO DE TERCER Y CUARTO PUESTO
			echo "TERCER Y CUARTO PUESTO <br>";

			$sqlt ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$tercer[0][0]." ORDER BY id ASC";
			$resut= mysqli_query($link,$sqlt);
			$resut1 = mysqlI_fetch_assoc ($resut);
			
			
			echo $tercer[0][2] = $resut1 [equipol];
			echo $tercer[0][3] = $resut1 [equipov];
			echo $tercer[0][4] = $resut1 [gl];
			echo $tercer[0][5] = $resut1 [gv]."<br>";
						
			if (($resut1 [gpl] >0) || ($resut1 [gpv] >0)){
			echo $tercer[0][6] = $resut1 [gpl];
			echo $tercer[0][7] = $resut1 [gpv]."<br>";
			}

//FINAL
			echo "FINAL <br>";
			$sqlf ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$final[0][0]." ORDER BY id ASC";
			$resuf= mysqli_query($link,$sqlf);
			$resuf1 = mysqlI_fetch_assoc ($resuf);
			
			
			echo $final[0][2] = $resuf1 [equipol];
			echo $final[0][3] = $resuf1 [equipov];
			echo $final[0][4] = $resuf1 [gl];
			echo $final[0][5] = $resuf1 [gv]."<br>";
			
			if (($resuf1 [gpl] >0) || ($resuf1 [gpv] >0)){
			echo $final[0][6] = $resuf1 [gpl];
			echo $final[0][7] = $resuf1 [gpv]."<br>";
				
			}
//INICIO DE CAMPEON
		
			$sqlcampeon ="SELECT * FROM campeon WHERE ca_user = '$userlogin'";
			$resuca= mysqli_query($link,$sqlcampeon);
			$resuca1 = mysqlI_fetch_assoc ($resuca);
			
			echo $campeon = $resuca1 [ca_equipo];
				
mysqli_close($link);

}
    ?>
