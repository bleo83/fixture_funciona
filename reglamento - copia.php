<?php
session_start();
if (isset($_SESSION['usuario']))
{
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Copa del Mundo RUSIA 2018</title>
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
<bgsound src="mundialsong.mp3" loop=true>
<embed src="mundialsong.mp3" autostart="true" loop="true" width="2" height="0"> </embed>
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
<body style="background-image: url('img/demo/rusia2018.jpg');>">
<!-- /.wrapbox start-->

	<!-- TOP AREA
================================================== -->



	<section class="pageheader-default text-center">
	<div class ="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition" style="color:yellow" ><b></b>World Cup 2014</b></h1>
		<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			 Leé atentamente el sistema de puntaje<br>
			 y acepta las condiciones para continuar.</b>
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>

		<section class="container">
		<div class="row" >
		
			<div>
				<h1 class="smalltitle">
			<span style="color:yellow">Sistema de Puntaje y Condiciones</span>
			</h1>
			<div>
			<p style="color:yellow;text-align: left; font-size: 14px">
            PUNTUACION:

			El sistema de calificación será el siguiente:
			<br><br>
			1° FASE:
<br>
			El partido acertado otorgara 1 punto y el resultado exacto otorgará 1 punto más 
			</p>


<p style="color:white;text-align: left; font-size: 14px">
Ejemplo: Rusia 2 VS Egipto 1
</p>

<p style="color:yellow;text-align: left; font-size: 14px">

El PARTICIPANTE que acierte el triunfo de Grecia obtendrá 1 punto 
<br>El PARTICIPANTE que acierte el triunfo y además el resultado exacto obtendrá un punto adicional, o sea 2 puntos

<br><br>2° FASE:
<br> Incluída la modalidad de puntaje de la Fase 1, en la Fase 2 se agrega el siguiente puntaje:<br>
<br>El PARTICIPANTE que acierte el resultado exacto de penales en caso de empate además obtendrá un punto adicional,con lo cual podría sumar en total 3 puntos.
(**Esto sólo es posible en Octavos, Cuartos, Semifinal, Tercer y Cuarto puesto y final).
<br>Por cada equipo que el PARTICIPANTE estimó que se clasificaría o pasaría de fase  a 8° de final obtendrá 4 puntos.
<br>Por cada equipo que el PARTICIPANTE estimó que se clasificaría a la siguiente fase (4° de final) obtendrá 6 puntos.
<br>Por cada equipo que el PARTICIPANTE estimó que se clasificaría a la semifinal  obtendrá 8 puntos
<br>Por cada equipo que el PARTICIPANTE estimó que se clasificaría o pasaría de fase (final) obtendrá 10 puntos
<br><br>El PARTICIPANTE que acierte el tercer puesto obtendrá 5 puntos 
<br><br>El PARTICIPANTE que acierte el campeón del mundial obtendrá 15 puntos 

 <br><br>Para Participar deberá pagar $200.            
            
            </p>               
			</div>
             <?php if ($_SESSION['fixture']!="TRUE"){ ?>
              <a href="grupos.php" class="btn btn-success">Acepto</a>
              <a href="logout.php" class="btn btn-success">NO Acepto</a>
            	<?php }?>
                           
			
			</div>
			
		</div>
		<br><br><br>
		</section>
		<br><br><br>
		
		<!-- TEAM
================================================== -->
		
	
		<!-- BEGIN CALL TO ACTION PANEL
================================================== -->
	
	<!-- BEGIN FOOTER
================================================== -->
	
	<!-- /footer section end-->
</div>
<!-- /.wrapbox ends-->
<!-- SCRIPTS, placed at the end of the document so the pages load faster
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/jquery_login.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
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
<?php
} else {echo '<script>location.href = "index.php";</script>';}
?>