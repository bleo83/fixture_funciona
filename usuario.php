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
<title>Copa Mundial Rusia 2018</title>
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

  window.location ="http://familia.traemelaco.com/";

  }  setTimeout ("redirection()", 5000); //tiempo en milisegundos

  </script>

	 
</head>
<body style="background-image: url('img/demo/rusia2018.jpg');" >
<!-- /.wrapbox start-->

	<!-- TOP AREA
================================================== -->



	<section class="pageheader-default text-center">
	<div class ="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition" style="color:yellow" ><b></b>Copa Mundial Rusia 2018</b></h1>
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
			 Serás redireccionado en 5 Segundos </b><br>
			 <p class="animated fadeInRightBig  notransition container page-description" style="color:grey">En caso contrario, pulsa en el siguiente enlace<p>
			 
	                          
			<div >
				<br><br><br>
				<a href="http://familia.traemelaco.com/" class="buttonblack">&nbsp; Accede a tu cuenta...</a>
			
																				
			</div>
							


			
			</div>
			
		</div>
		<br><br><br>
		</section>
		<br><br><br>
		<!-- TEAM

	
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
}
?>