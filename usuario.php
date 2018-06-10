<?php
session_start();
if (isset($_SESSION['usuario']))
{
    echo '<script>location.href = "welcome.php";</script>';
}
else
{
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

<script type="text/javascript">

  function redirection(){  

  window.location ="http://www.dominio.com";

  }  setTimeout ("redirection()", 10000); //tiempo en milisegundos

  </script>

	 
</head>
<body style="background: black;">
<!-- /.wrapbox start-->

	<!-- TOP AREA
================================================== -->



	<section class="pageheader-default text-center">
	<div class ="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition" style="color:yellow" ><b></b>World Cup 2014</b></h1>
		<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			  FELICITACIONES YA ESTÁS PARTICIPANDO</b>
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>

		<section class="container">
		<div class="row" >
			<div class="animated anim-slide notransition">
			
			<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			  TU PRONÓSTICO SE HA GUARDADO CON ÉXITO<br> 
			 Serás redireccionado en 10 Segundos </b><br>
			 <h5>En caso contrario, pulsa en el siguiente enlace<h5>
			 
	                          
			<div >
				<br><br><br>
				<a href="index.php" class="buttonblack">&nbsp; Accede a tu cuenta...</a>
			
																				
			</div>
							


			
			</div>
			
		</div>
		</section>
		
		<!-- TEAM

	
	<!-- BEGIN FOOTER
================================================== -->
	<section>
	<div class="footer">
		<div class="container animated fadeInUpNow notransition">
			<div class="row">
				<div class="col-md-4">
					<h1 class="footerbrand">LBCS</h1>
					<p>
						 Participá con tus amigos en tufixture.com
					</p>
					<p>
						 Creá tu usuario, cargá tu pronóstico y jugá.
					</p>
					<p>
						 Made with &nbsp;<i class="icon-heart"></i>&nbsp; by tufixture.com
					</p>
				</div>
				<div class="col-md-4">
					<h1 class="title"><span class="colortext">E</span>ncontranos </h1>
					<div class="footermap">
						
						<p>
							<strong>Email: </strong> soporte@tufixture.com
						</p>
						<ul class="social-icons list-soc">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-skype"></i></a></li>
						</ul>
					</div>
				</div>
		
				<div class="col-md-4">
					<h1 class="title"><span class="colortext">M</span>ensaje <span class="font100">rápido</span></h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Su Mensaje ha sido enviado. Gracias!
						</div>
					</div>
					<form method="post" action="contact.php" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="nombre" placeholder="Nombre">
							<input class="col-md-6" type="text" name="correo" placeholder="E-mail">
							<textarea class="col-md-12" name="comentario" rows="4" placeholder="Mensaje"></textarea>
							<input type="submit" id="enviar" class="btn" value="Enviar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="pull-left">
						 &copy; Copyright 2014 tufixture.com
					</p>
				</div>
			
			</div>
		</div>
	</div>
	</section>
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
}
?>