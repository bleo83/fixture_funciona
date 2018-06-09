<?php
include 'Equipo.php';
include 'calculo.php';
$titulo = "Grupo A";
include 'partidos.php'
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
		<h1 class="animated fadeInLeftBig notransition" style="color:yellow" ><b></b>World Cup 2014</b></h1>
		<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			 Demostrá lo que sabés de fútbol<br>
			 aposta en Fixture '14.</b>
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
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
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
										<td s width="2"><input type="number" min="0" max="9" size="2" id="gol<?php echo $name?>l" name="gol<?php echo $name?>l" value="" onchange="recalculando('<?php echo $letra?>')" onblur="recalculando('<?php echo $letra?>')"
										onkeypress="return isNumber(event)" /></td>
										
										</div>
									
										<div id="visitante">
										<td width="2"><input type="number" min="0" max="9" size="2" id="gol<?php echo $name?>v" name="gol<?php echo $name?>v" value="" onchange="recalculando('<?php echo $letra?>')" onblur="recalculando('<?php echo $letra?>')"
										onkeypress="return isNumber(event)"/></td>
										<td id="pais<?php echo $name?>v" ><?php echo ${"group$letra"}[$i][5]?></td>
										<td  width="2"><img src="banderas/<?php echo ${"group$letra"}[$i][5]?>.png" alt="imagen"/> </td>
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
										
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pais" style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;border-left:1px solid #BFFF00 !important;"></td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pj"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>ptos"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pg"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pe"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pp"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>df"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>gf"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>ge"style = "background-color:#BFFF00; color:#000;border:1px solid #000 !important;border-right:1px solid #BFFF00 !important;" align="center">0</td>
										</tr>
										<?php }else { ?>
										<tr>
										
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pais" > </td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pj" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>ptos" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pg" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pe" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>pp" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>df" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>gf" align="center">0</td>
										<td id="puesto<?php echo($i+1)?><?php echo $letra?>ge" align="center">0</td>
										</tr>
										
										<?php }} ?>
										</table >
											
										<div>
										<a href="#oct_grup" style=color:"black">
										<div class="grey-box-icon active" style=color:"black">
										<div class="icon-box-top grey-box-icon-pos">
										<i class="fontawesome-icon medium circle-white center icon-arrow-down"></i>
										</div>
							
										</div>
										</a>
										</div>
										</div>  <!--Fin Tablas1 -->	
										</div> <!--fin Contenedor de todo el grupo a -->
										</div><!--fin columna -->
							</div> <!--fin div tab-pane grupo a -->
							
							</div>
														
								<?php }?>									
														
														<!--FIN DE CODIGO LEO-->
														
														
									
														
														
														
						</div>
					</div>
				
				</div>
			</div>
		<!-- octavos de final -->
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
							<!--EMPIEZA CODIGO -->
							
							<div class="tab-pane active" id="fase2a">
								
							 
							<div class="container" >
									<div class="boxportfolio1"><!-- Partidos -->
										
										<!--Begin GRUPO-->
										
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;" >
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
																						
											for ($b=0; $b<8; $b++){
												
												$k++;
												$name=$gname[$b].$k;
												$letra=$gname[$b];
										?>
										<tr name="partido">
										<div id="local">
                                        <td width="2"><img alt="?" src="banderas/black.png" id="bandera1<?php echo $ofname1[$b]?>"></td>
										<td id="pais1<?php echo $ofname1[$b]?>" name="pais1<?php echo $ofname1[$b]?>"   align="center" ><?php echo "1 Grupo ".$ofname1[$b]?></td>
										<td width="2"><input type="number" min="0" max="20" size="2" id="ocgl<?php echo $k?>l" name="ocgl<?php echo $k?>l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										<td width="2"><input style="display: none" type="number" min="0" max="50" size="2" id="ocgp<?php echo $k?>l" name="ocgp<?php echo $k?>l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										</div>
										<div id="visitante" align="center">
										<td  width="2"><input style="display: none" type="number" min="0" max="20" size="2" id="ocgp<?php echo $k?>v" name="ocgp<?php echo $k?>v"  value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td  width="2"><input type="number" min="0" max="50" size="2" id="ocgl<?php echo $k?>v" name="ocgl<?php echo $k?>v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td id="pais2<?php echo $ofname2[$b]?>" name="pais2<?php echo $ofname2[$b]?>" align="center" ><?php echo "2 Grupo ".$ofname2[$b]?></td>
										<td  width="2"><img alt="?" src="banderas/black.png" id="bandera2<?php echo $ofname2[$b]?>"> </td>
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
									<div class="boxportfolio1"><!-- Partidos -->
										
										<!--Begin GRUPO-->
									
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;" >
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
																						
											for ($b=0; $b<4; $b++){
												
												$k++;
												$name=$gname[$b].$k;
												$letra=$gname[$b];
										?>
										<tr name="partido">
										<div id="local">
										<td width="2"><img alt="?" src="banderas/black.png" id="cubandera<?php echo $k."l"?>"> </td>
										<td id="cupais<?php echo $k."l"?>"   align="center" >Ganador <?php echo $cfname1[$b]?></td>
										<td width="2"><input type="number" min="0" max="20" size="2" id="cugl<?php echo $k?>l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										<td width="2"><input type="number" min="0" max="50" size="2" id="cugp<?php echo $k?>l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										</div>
										<div id="visitante" align="center">
										<td  width="2"><input type="number" min="0" max="20" size="2" id="cugp<?php echo $k?>v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td  width="2"><input type="number" min="0" max="50" size="2" id="cugl<?php echo $k?>v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td id="cupais<?php echo $k."v"?>">Ganador <?php echo $cfname2[$b]?></td>
										<td  width="2"><img alt="?" src="banderas/black.png" id="cubandera<?php echo $k."v"?>"></td>
										</div>
										</tr>
										<?php }?>
										</table>  
										
										</div> <!--fin Partidos -->
							
										
							
							</div> 
							</div>
								<!--FIN CUARTOS DE FINAL -->

												<!--INICIO semifinal DE FINAL -->
																	
								<div class="tab-pane " id="fase2c">
									<div class="container" >
									<div class="boxportfolio1"><!-- Partidos -->
										
										<!--Begin GRUPO-->
									
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;" >
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
																						
											for ($b=0; $b<2; $b++){
												
												$k++;
												$name=$gname[$b].$k;
												$letra=$gname[$b];
										?>
										<tr name="partido">
										<div id="local">
										<td width="2"><img alt="?" src="banderas/black.png" id="sfbandera<?php echo $k."l"?>"></td>
										<td id="sfpais<?php echo $k."l"?>"   align="center" >Ganador <?php echo $sfname1[$b]?></td>
										<td width="2"><input type="number" min="0" max="20" size="2" id="sfgl<?php echo $k?>l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										<td width="2"><input type="number" min="0" max="50" size="2" id="sfgp<?php echo $k?>l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										</div>
										<div id="visitante" align="center">
										<td  width="2"><input type="number" min="0" max="20" size="2" id="sfgp<?php echo $k?>v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td  width="2"><input type="number" min="0" max="50" size="2" id="sfgl<?php echo $k?>v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td id="sfpais<?php echo $k."v"?>"   >Ganador <?php echo $sfname2[$b]?></td>
										<td  width="2"><img alt="?" src="banderas/black.png" id="sfbandera<?php echo $k."v"?>"></td>
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
									<div class="boxportfolio1"><!-- Partidos -->
										
										<!--Begin GRUPO-->
										
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;" >
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Penales </th>
										<th> Penales </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
										
										<tr name="partido">
										<div id="local">
										<td width="2"><img alt="?" src="banderas/black.png" id="tcbandera1l"></td>
										<td id="tcpais1l" align="center" >Perdedor I</td>
										<td width="2"><input type="number" min="0" max="20" size="2" id="tcgl1l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										<td width="2"><input type="number" min="0" max="50" size="2" id="tcgp1l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										</div>
										<div id="visitante" align="center">
										<td  width="2"><input type="number" min="0" max="20" size="2" id="tcgp1v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td  width="2"><input type="number" min="0" max="50" size="2" id="tcgl1v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td id="tcpais1v"> Perdedor II</td>
                                                                                <td  width="2"><img alt="?" src="banderas/black.png" id="tcbandera1v"></td>
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
										
										<!--Begin GRUPO-->
										
										<table class="table table-bordered" width="50%"  style = "float:left; width:200px;align:center;" >
										<th> Bandera </th>
										<th> Equipo1 </th>
										<th> Goles </th>
										<th> Penales </th>
										<th> Penales </th>
										<th> Goles </th>
										<th> Equipo2 </th>
										<th> Bandera </th>
										
										<tr name="partido">
										<div id="local">
										<td width="2"><img alt="?" src="banderas/black.png" id="fibandera1l"></td>
										<td id="fipais1l" align="center" >Ganador I</td>
										<td width="2"><input type="number" min="0" max="20" size="2" id="figl1l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										<td width="2"><input type="number" min="0" max="50" size="2" id="figp1l" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)" /></td>
										</div>
										<div id="visitante" align="center">
										<td  width="2"><input type="number" min="0" max="20" size="2" id="figp1v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td  width="2"><input type="number" min="0" max="50" size="2" id="figl1v" value="" onchange="clasificando(this)" onblur="clasificando(this)"
										onkeypress="return isNumber(event)"/></td>
										<td id="fipais1v"> Ganador II</td>
										<td  width="2"><img alt="?" src="banderas/black.png" id="fibandera1v"></td>
										</div>
										</tr>
										
										</table>  
										
										</div> <!--fin Partidos -->
							</div> 
							</div>
								<!--FIN FINAL -->
		<!-- TEAM
================================================== -->
		<section class="container animated fadeInDownNow notransition topspace10">
		<div class="row">
			<h1 class="text-center smalltitle">
			<span>El campeón es</span>
			</h1>
			<div style="margin-left: 500px; top: -10px;" >
			
				<td width="2"><img alt="?" src="banderas/black.png" id="cabandera"></td><br><br><br>
				<td id="capais" align="center" >Campeón</td>
					<br><br>
			<input style="max-width:1000px" class="btn btn-success" type="submit" value="Guardar Fixture">
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
</body>
</html>