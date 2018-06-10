<?php
session_start();
if (isset($_SESSION['usuario'])&&($_SESSION['fixture']!="FALSE"))
{

    require "conexion.php";
	include "partidos.php";
	
	$user = $_SESSION['usuario'];
	
	
	$sqluser ="SELECT id FROM user WHERE user ='$user' ";
	
	$resultado = mysqli_query($link,$sqluser);
	$resultado2 = mysqlI_fetch_assoc ($resultado);
	
	$userlogin = $resultado2 [id];
	
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
		

		
		for ($bo=0; $bo<8; $bo++){
			
			
		$sqlo ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$octavos[$bo][0]." ORDER BY id ASC";
			$resuo= mysqli_query($link,$sqlo);
			$resuo1 = mysqlI_fetch_assoc ($resuo);
			
			
			$octavos[$bo][2] = $resuo1 [equipol];
			$octavos[$bo][3] = $resuo1 [equipov];
			$octavos[$bo][4] = $resuo1 [gl];
			$octavos[$bo][5] = $resuo1 [gv];
			
			
			if (($resuo1 [gpl] >0) || ($resuo1 [gpv] >0)){
			$octavos[$bo][6] = $resuo1 [gpl];
			$octavos[$bo][7] = $resuo1 [gpv];
				
			}
		}			
	//INCIO CUARTOS DE FINAL
			
			
	
		for ($bc=0; $bc<4; $bc++){
			
			$sqlc ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$cuartos[$bc][0]." ORDER BY id ASC";
			$resuc= mysqli_query($link,$sqlc);
			$resuc1 = mysqlI_fetch_assoc ($resuc);
			
			
			$cuartos[$bc][2] = $resuc1 [equipol];
			$cuartos[$bc][3] = $resuc1 [equipov];
			$cuartos[$bc][4] = $resuc1 [gl];
			$cuartos[$bc][5] = $resuc1 [gv];
			
			
			if (($resuc1 [gpl] >0) || ($resuc1 [gpv] >0)){
			$cuartos[$bc][6] = $resuc1 [gpl];
			$cuartos[$bc][7] = $resuc1 [gpv];
				
			}		
			
		}

//INICIO DE SEMIFINAL
		

		for ($bs=0; $bs<2; $bs++){
			$sqls ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$semi[$bs][0]." ORDER BY id ASC";
			$resus= mysqli_query($link,$sqls);
			$resus1 = mysqlI_fetch_assoc ($resus);
			
			$semi[$bs][2] = $resus1 [equipol];
			$semi[$bs][3] = $resus1 [equipov];
			$semi[$bs][4] = $resus1 [gl];
			$semi[$bs][5] = $resus1 [gv];			
			
		if (($resus1 [gpl] >0) || ($resus1 [gpv] >0)){
			$semi[$bs][6] = $resus1 [gpl];
			$semi[$bs][7] = $resus1 [gpv];
				
			}
			

		}

//INICIO DE TERCER Y CUARTO PUESTO
			

			$sqlt ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$tercer[0][0]." ORDER BY id ASC";
			$resut= mysqli_query($link,$sqlt);
			$resut1 = mysqlI_fetch_assoc ($resut);
			
			
			$tercer[0][2] = $resut1 [equipol];
			$tercer[0][3] = $resut1 [equipov];
			$tercer[0][4] = $resut1 [gl];
			$tercer[0][5] = $resut1 [gv];
						
			if (($resut1 [gpl] >0) || ($resut1 [gpv] >0)){
			$tercer[0][6] = $resut1 [gpl];
			$tercer[0][7] = $resut1 [gpv];
			}

//FINAL
			
			$sqlf ="SELECT * FROM pronostico WHERE iduser = '$userlogin' AND idpartido = ".$final[0][0]." ORDER BY id ASC";
			$resuf= mysqli_query($link,$sqlf);
			$resuf1 = mysqlI_fetch_assoc ($resuf);
			
			
			$final[0][2] = $resuf1 [equipol];
			$final[0][3] = $resuf1 [equipov];
			$final[0][4] = $resuf1 [gl];
			$final[0][5] = $resuf1 [gv];
			
			if (($resuf1 [gpl] >0) || ($resuf1 [gpv] >0)){
			$final[0][6] = $resuf1 [gpl];
			$final[0][7] = $resuf1 [gpv];
				
			}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>World Cup 2014</title>
<!-- Style -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Choose Layout -->
<link href="css/layout-semiboxed.css" rel="stylesheet">
<!-- Choose Skin -->
<link href="css/skin-green.css" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico">
<!-- IE -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>	   
    <![endif]-->
<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	 <![endif]-->
</head>
<body style="background: black;" onload="refrezcarCalculos()">
<!-- /.wrapbox start-->

	<!-- TOP AREA
================================================== -->



	<section class="pageheader-default text-center">
	<div class ="semitransparentbg">
		<h1>BIENVENIDO : <?php echo $_SESSION['usuario']; ?></h1>
		<h4><a href="logout.php">CERRAR SESIÓN</a></h4>
		<hr>
		<h1 class="animated fadeInLeftBig notransition" style="color:yellow" ><b></b>World Cup 2014</b></h1>
		<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			 Ya estás Participando del torneo<br>
			 Este es tu pronóstico...!!</b>
			 
		</p>
		
	</div>
	</section>
	<div class="wrapsemibox">
		

		<div class="row">
				<div class="col-md-41s animated  notransition">
					<div class="tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#grupoa" data-toggle="tab"><i class="icon icon-star"></i> Grupo A</a></li>
							<li><a href="#grupob" data-toggle="tab">Grupo B</a></li><li><a href="#grupoc" data-toggle="tab">Grupo C</a></li>
							<li><a href="#grupod" data-toggle="tab">Grupo D</a></li><li><a href="#grupoe" data-toggle="tab">Grupo E</a></li>
							<li><a href="#grupof" data-toggle="tab">Grupo F</a></li><li><a href="#grupog" data-toggle="tab">Grupo G</a></li>
							<li><a href="#grupoh" data-toggle="tab">Grupo H</a></li>
						</ul>
						<div class="tab-content">
							<!--EMPIEZA CODIGO -->
							<?php for ($l=0; $l <8 ; $l++){?>
							<div class="tab-pane <?php if ($l==0){?>active<?php } ?>" id="grupo<?php echo $gname[$l]?>">
								
							 <!--"pais<?php echo $gname[0]?><?php $m+1?>v"--> 
							<div class="container">
								<div class="col-md-6" >
									<div class="boxportfolio2"><!-- Partidos -->
										<h1 class="smalltitle">
											<span>Grupo <?php echo $gname[$l]?></span>
										</h1>
										<!--Begin GRUPO-->
										<form action="guardar_fixture.php" method="post">
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;" >
										<!--<th>  </th>
										<th align="center" > Equipo </th>
										<th align="center" > Goles </th>
										<th align="center" > Goles </th>
										<th align="center" > Equipo </th>
										<th>  </th>-->
				  						<?php
										$k=0;
																						
											for ($i=0; $i<6; $i++){
												
												$k++;
												$name=$gname[$l].$k;
												$letra=$gname[$l];
												
				
																					
										?>
										<tr name="partido">
										<div id="local">
										<td width="2"><img src="banderas/<?php echo ${"group$letra"}[$i][2]?>.png" alt="imagen"/> </td>
										<td id="pais<?php echo $name?>l"  align="center" ><?php echo ${"group$letra"}[$i][2]?></td>
										<td width="2"><input readonly = "readonly"style="max-width:50px "  type="number" min="0" max="9" size="2" id="gol<?php echo $name?>l" name="gol<?php echo $name?>l" value="<?php echo ${"group$letra"}[$i][3]?>" onchange="recalculando('<?php echo $letra?>')" onblur="recalculando('<?php echo $letra?>')"
										onkeypress="return isNumber(event)" /><?php echo $golgl;?></td>
										
										</div>
									
										<div id="visitante">
										<td   width="2"><input readonly = "readonly"style="max-width:50px " type="number" min="0" max="9" size="2" id="gol<?php echo $name?>v" name="gol<?php echo $name?>v" value="<?php echo ${"group$letra"}[$i][4]?>" onchange="recalculando('<?php echo $letra?>')" onblur="recalculando('<?php echo $letra?>')"
										onkeypress="return isNumber(event)"/></td>
										<td   id="pais<?php echo $name?>v" align="center" ><?php echo ${"group$letra"}[$i][5]?></td>
										<td    width="2"><img src="banderas/<?php echo ${"group$letra"}[$i][5]?>.png" alt="imagen"/> </td>
										</div>
										</tr>
										<?php }?>
										</table>  
										 
										</div> <!--fin Partidos -->
										</div>
										
										
										<div class="col-md-6" >
										<div class="boxportfolio2"><!--Inicio Tablas -->
										<h1 class="smalltitle">
										<span>Tabla de Posiciones</span>
										</h1>
										<!--Begin Tabla de Posiciones-->
									
										<div style="float:left"> <!--Inicio Tablas1 -->
												<table class="table table-bordered" style = "width:300px;" >
										
										<th> Equipo </th>
										<th> PJ </th>
										<th> PTOS. </th>
										<th> PG </th>
										<th> PE </th>
										<th> PP </th>
										<th> DF </th>
										<th> GF </th>
										<th> GE </th>
             
										<?php 
										
										for ($i=0; $i<4; $i++){ 
											if ($i<2){?>
																					
										<tr>
										
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pais" align="center" style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;border-left:1px solid #BFFF00 !important;"></td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pj" align="center" style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>ptos" align="center"  style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pg" align="center"  style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pe" align="center"  style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pp" align="center"  style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>df" align="center"  style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>gf" align="center" style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>ge" align="center"  style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;border-right:1px solid #BFFF00 !important;" align="center">0</td>
										</tr>
										<?php }else { ?>
										<tr style="padding:6px;">
										
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pais" align="center" style="padding:16px;" > </td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pj" align="center" style="padding:16px;"</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>ptos" align="center" style="padding:16px;">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pg" align="center" style="padding:16px;">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pe" align="center" style="padding:16px;">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>pp" align="center" style="padding:16px;">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>df" align="center" style="padding:16px;">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>gf" align="center" style="padding:16px;">0</td>
										<td   id="puesto<?php echo($i+1)?><?php echo $letra?>ge" align="center" style="padding:16px;">0</td>
										</tr>
										
										<?php }} ?>
										</table >
											
										<div>
										<a href="#oct_grup"  style="margin-top:50px;">
										<div class="grey-box-icon active" style="color:black;top:70px;">
										
										<div class="icon-box-top grey-box-icon-pos">
										<i class="fontawesome-icon medium circle-white center icon-arrow-down"></i>
										</a>
										</div>
										<div >
										<!--<a class="btn btn-primary" onclick="rellenoAutomatico()">-->
										<i class="icon-refresh icon-random"></i> Carga Automática...</a>
																				
										</div>
							
										</div>
										
										</div>
										</div>  <!--Fin Tablas1 -->	
										</div> <!--fin Contenedor de todo el grupo a -->
										</div><!--fin columna -->
							</div> <!--fin div tab-pane grupo a -->
							
							</div>
														
								<?php }?>									
														
														<!--FIN DE GRUPOS-->
						</div>
					</div>
				</div>
			</div>
		
		<!-- INICIO OCTAVOS -->
		<br><br>
		
			<div class="row" id="oct_grup">
				<div class="col-md-41s animated  notransition">
					<div class="tabs">
						<ul class="nav nav-tabs" >
							<li class="active"><a href="#fase2a" data-toggle="tab"><i class="icon icon-star"></i> Octavos de Final</a></li>
							<li><a href="#fase2b" data-toggle="tab">Cuartos de Final</a></li><li><a href="#fase2c" data-toggle="tab">SemiFinales</a></li>
							<li><a href="#fase2d" data-toggle="tab">Tercer Puesto</a></li><li><a href="#fase2e" data-toggle="tab">Final</a></li>
							
						</ul>
						<div class="tab-content" >
									
							<div class="tab-pane active" id="fase2a">
							
								<div class="container" >
									<div class="boxportfolio1"><!-- Partidos -->
										
										<!--Begin GRUPO-->
										
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;margin-top:50px;margin-left:250px " >
											
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Penales </th>
										<th> Penales </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
										<?php
										$k=0;
																						
											for ($bo=0; $bo<8; $bo++){
												
												$k++;
												$name=$gname[$bo].$k;
												$letra=$gname[$bo];
												
												
										?>
										<tr name="partido">
										<div id="local">
                                        <td   width="2"><img alt="?" src="banderas/black.png" id="bandera1<?php echo $ofname1[$bo]?>"></td>
										<td   style ="background: transparent;" >
										<input readonly = "readonly"type="text"  style ="background: transparent; max-widht =50px; color: yellow"   id="pais1<?php echo $ofname1[$bo]?>" name="pais1<?php echo $ofname1[$bo]?>" align="center" value ="">
										</td>
										<td   width="2"><input readonly = "readonly"style="max-width:50px " type="number" min="0" max="9" size="2" id="ocgl<?php echo $k?>l" name="ocgl<?php echo $k?>l" value="<?php echo $octavos[$bo][4]?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										<td   width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="50" size="2" id="ocgp<?php echo $k?>l" name="ocgp<?php echo $k?>l" value="<?php echo $octavos[$bo][6]?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										</div>
										<div id="visitante" align="center">
										<td    width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="50" size="2" id="ocgp<?php echo $k?>v" name="ocgp<?php echo $k?>v"  value="<?php echo $octavos[$bo][7]?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td    width="2">
										<input readonly = "readonly"style="max-width:50px " type="number" min="0" max="9" size="2" id="ocgl<?php echo $k?>v" name="ocgl<?php echo $k?>v" value="<?php echo $octavos[$bo][5]?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td   style ="background: transparent;">
<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;"   id="pais2<?php echo $ofname2[$bo]?>" name="pais2<?php echo $ofname2[$bo]?>" align="center" value ="">
										</td>
										<td    width="2"><img alt="?" src="banderas/black.png" id="bandera2<?php echo $ofname2[$bo]?>"> </td>
										</div>
										</tr>
										<?php }?>
										</table>  
										
										</div> <!--fin Partidos -->
								</div> 
							</div>
								<!--fin div tab-pane octavos -->		

										<!--INICIO CUARTOS DE FINAL -->
																	
									<div class="tab-pane " id="fase2b">
									<div class="container" >
									<div class="boxportfolio1">
																
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;margin-top:50px;margin-left:250px" >
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Penales </th>
										<th> Penales </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
										<?php
										$k=0;
																						
											for ($bc=0; $bc<4; $bc++){
												
												$k++;
												$name=$gname[$bc].$k;
												$letra=$gname[$bc];
												$golcl= $cuartos[$bc][4];
												$golcv= $cuartos[$bc][5];
												$golpl= $cuartos[$bc][6];
												$golpv= $cuartos[$bc][7];
										?>
										<tr name="partido">
										<div id="local">
										<td   width="2"><img alt="?" src="banderas/black.png" id="cubandera<?php echo $k."l"?>"> </td>
										<td   style ="background: transparent;">
										<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="cupais<?php echo $k."l"?>"  name="cupais<?php echo $k."l"?>"  align="center" value="">
										</td>
										<td   width="2">
										<input readonly = "readonly" style="max-width:50px" type="number" min="0" max="9" size="2" id="cugl<?php echo $k?>l" name="cugl<?php echo $k?>l"  value="<?php echo $golcl ?>" onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)">
										</td>
										<td   width="2">
										<input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="9" size="2" id="cugp<?php echo $k?>l" name="cugp<?php echo $k?>l" value="<?php echo $golpl ?>"  onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)">
										</td>
										</div>
										<div id="visitante" align="center">
										<td    width="2">
										<input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="9" size="2" id="cugp<?php echo $k?>v" name="cugp<?php echo $k?>v" value="<?php echo $golpv ?>"  onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)">
										</td>
										<td    width="2">
										<input readonly = "readonly"style="max-width:50px" type="number" min="0" max="9" size="2" id="cugl<?php echo $k?>v" name="cugl<?php echo $k?>v" value="<?php echo $golcv ?>" onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)"></td>
										<td   style ="background: transparent;">
										<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="cupais<?php echo $k."v"?>" name="cupais<?php echo $k."v"?>"value="">
										</td>
										<td    width="2"><img alt="?" src="banderas/black.png" id="cubandera<?php echo $k."v"?>"></td>
										</div>
										</tr>
										<?php }?>
										</table>  
										
										</div> <!--fin Partidos -->
							
										
							
							</div> 
							</div>
<!--FIN CUARTOS DE FINAL -->

<!--INICIO SEMIFINAL -->
																	
								<div class="tab-pane " id="fase2c">
									<div class="container" >
									<div class="boxportfolio1">
										
									
									
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;margin-top:50px;margin-left:250px" >
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Penales </th>
										<th> Penales </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
										<?php
										$k=0;
																						
											for ($bs=0; $bs<2; $bs++){
												
												$k++;
												$name=$gname[$bs].$k;
												$letra=$gname[$bs];
												$golsl= $semi[$bs][4];
												$golsv= $semi[$bs][5];
												$golspl= $semi[$bs][6];
												$golspv= $semi[$bs][7];
												
										?>
										<tr name="partido">
										<div id="local">
										<td   width="2"><img alt="?" src="banderas/black.png" id="sfbandera<?php echo $k."l"?>"></td>
										<td   style ="background: transparent;">
										<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="sfpais<?php echo $k."l"?>"  name="sfpais<?php echo $k."l"?>"  align="center" value="">
										</td>
										<td   width="2"><input readonly = "readonly"style="max-width:50px" type="number" min="0" max="9" size="2" id="sfgl<?php echo $k?>l" name="sfgl<?php echo $k?>l"  value="<?php echo $golsl ?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" ></td>
										<td   width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="9" size="2" id="sfgp<?php echo $k?>l" name="sfgp<?php echo $k?>l" value="<?php echo $golspl ?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" ></td>
										</div>
										<div id="visitante" align="center">
										<td    width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="9" size="2" id="sfgp<?php echo $k?>v" name="sfgp<?php echo $k?>v" value="<?php echo $golsv ?>"  onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"></td>
										<td    width="2"><input readonly = "readonly"style="max-width:50px" type="number" min="0" max="9" size="2" id="sfgl<?php echo $k?>v" name="sfgl<?php echo $k?>v" value="<?php echo $golsv ?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"></td>
										<td   style ="background: transparent;">
											<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="sfpais<?php echo $k."v"?>" name="sfpais<?php echo $k."v"?>" value=""> 
										</td>
										<td    width="2"><img alt="?" src="banderas/black.png" id="sfbandera<?php echo $k."v"?>"></td>
										</div>
										</tr>
										<?php }?>
										</table>  
										
										</div> <!--fin Partidos -->
							</div> 
							</div>
								<!--FIN SEMIFINAL -->	
								
								<!--INICIO Tercer y Cuarto Puesto -->
																	
								<div class="tab-pane " id="fase2d">
									<div class="container" >
									<div class="boxportfolio1">
										
										
										
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;margin-top:50px;margin-left:250px" >
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Penales </th>
										<th> Penales </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
												
												<?php
												$goltl= $tercer[0][4];
												$goltv= $tercer[0][5];
												$goltpl= $tercer[0][6];
												$goltpv= $tercer[0][7];
												?>
										<tr name="partido">
										<div id="local">
										<td   width="2">
										<img alt="?" src="banderas/black.png" id="tcbandera1l">
										</td>
										<td   style ="background: transparent;">
										<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="tcpais1l" name="tcpais1l"  align="center" value="">
										</td>
										<td   width="2"><input readonly = "readonly"style="max-width:50px" type="number" min="0" max="9" size="2" id="tcgl1l" name="tcgl1l" value="<?php echo $goltl ?>" onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)" >
										</td>
										<td   width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="9" size="2" id="tcgp1l" name="tcgp1l" value="<?php echo $goltpl ?>" onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)" >
										</td>
										</div>
										
										<div id="visitante" align="center">
										<td    width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="9" size="2" id="tcgp1v" name="tcgp1v" value="<?php echo $goltv ?>" onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)">
										</td>
										<td    width="2"><input readonly = "readonly"style="max-width:50px" type="number" min="0" max="9" size="2" id="tcgl1v" name="tcgl1v" value="<?php echo $goltpv ?>" onchange="clasificando(this)" onblur="clasificando(this)" onkeypress="return isNumber(event)">
										</td>
										<td   style ="background: transparent;">
										<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="tcpais1v" name="tcpais1v"  value="">
										</td>
                                        <td    width="2"><img alt="?" src="banderas/black.png" id="tcbandera1v"></td>
										</div>
										</tr>
										
										</table>  
										 
										</div> <!--fin Partidos -->
							</div> 
							</div>
								<!--FIN Tercer y Cuarto Puesto -->
								
								<!--INICIO FINAL -->
																	
								<div class="tab-pane " id="fase2e">
									<div class="container" >
									<div class="boxportfolio1"><!-- Partidos -->
										
																				
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;margin-top:50px;margin-left:250px" >
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Penales </th>
										<th> Penales </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
										
										<?php
												$golfl= $final[0][4];
												$golfv= $final[0][5];
												$golfpl= $final[0][6];
												$golfpv= $final[0][7];
												?>
										
										<tr name="partido">
										<div id="local">
										<td   width="2"><img alt="?" src="banderas/black.png" id="fibandera1l"></td>
										<td   style ="background: transparent;">
										<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="fipais1l" name="fipais1l" align="center" value="">
										</td>
										<td   width="2"><input readonly = "readonly"style="max-width:50px" type="number" min="0" max="20" size="2" id="figl1l" name="figl1l" value="<?php echo $golfl ?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" ></td>
										<td   width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="50" size="2" id="figp1l" name="figp1l" value="<?php echo $golfpl ?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" ></td>
										</div>
										<div id="visitante" align="center">
										<td    width="2"><input readonly = "readonly"style="display: none;max-width:50px" type="number" min="0" max="20" size="2" id="figp1v" name="figp1v" value="<?php echo $golfpv ?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"></td>
										<td    width="2"><input readonly = "readonly"style="max-width:50px" type="number" min="0" max="50" size="2" id="figl1v" name="figl1v" value="<?php echo $golfv ?>" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"></td>
										<td   style ="background: transparent;">
										<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center;" id="fipais1v" name="fipais1v" value="">
										</td>
										<td    width="2"><img alt="?" src="banderas/black.png" id="fibandera1v"></td>
										</div>
										</tr>
										
										</table>  
										
										</div> <!--fin Partidos -->
							</div> 
							</div>
								<!--FIN FINAL -->
		<!-- TEAM
================================================== -->
		<section class="container notransition topspace10">
		<div class="row">
			<h1 class="text-center smalltitle">
			<span>El campeón es</span>
			</h1>
			<div style="margin-left: 500px; top: -10px;" >
			
				<td   width="2"><img alt="?" src="banderas/black.png" id="cabandera"></td><br><br><br>
				<td   style ="background: transparent;margin:center">
				<input readonly = "readonly"type="text"  style ="background: transparent; color: yellow; alignment-adjust:center; margin: center" id="capais" name="capais"  align="center" value="">
				</td>
					<br><br>
			<input readonly = "readonly"style="max-width:1000px" class="btn btn-success" disabled="disabled" type="submit" value="No lo puedes Modificar">
				</div>
			
				
				</form>
			<br><br><br><br>
			
		
		</div>
		</section>
	
		<!-- BEGIN CALL TO ACTION PANEL
================================================== -->
	
	
</div>
<!-- /.wrapbox ends-->
<!-- SCRIPTS, placed at the end of the document so the pages load faster
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
<script language="javascript" src="js/Validar.js"></script>
	<script language="javascript" src="js/liveScore.js"></script>
<script>
/* ---------------------------------------------------------------------- */
	/*	Accordion
	/* ---------------------------------------------------------------------- */
	var clickElem = $('#accordion div h4');
	clickElem.on('click', function(){
		var $this = $(this),
			parentCheck = $this.parent('div');
		if( !parentCheck.hasClass('active')) {
			var accordItems = $('#accordion div');
			accordItems.removeClass('active');
			parentCheck.addClass('active');
		}
	});
</script>
<?php }else {header('Location: index.php');}?>
</body>
</html>