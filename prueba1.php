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
<body style="background: black;">
<!-- /.wrapbox start-->

	<!-- TOP AREA
================================================== -->



	
	<div class ="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition" style="color:yellow; text-align: center" ><b></b>World Cup 2014</b></h1>
		<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			 <br> FELICITACIONES YA ESTÁS PARTICIPANDO</b>
		</p>
	</div>

	

		
		<div class="row" >
			<div class="animated anim-slide notransition">
			
			<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			  TU PRONÓSTICO SE HA GUARDADO CON ÉXITO<br> 
			 Serás redireccionado en 10 Segundos <br>
			 En caso contrario, pulsa en el siguiente enlace</b>
			 
			 
	                          
			<div >
				<br><br><br>
				<a href="index.php" class="buttonblack">&nbsp; Accede a tu cuenta...</a>
			
																				
			</div>
							


			
			</div>
			
		</div>
		<form name="redirect" id="redirect">
<center>
<font face="Arial" style="font-size: 17px">Serás redireccionado en</font>
<form>
<input style="background: transparent; border:transparent; color:yellow; font-size: 17px; max-width: 35px"type="text" size="10" name="redirect2" />
</form>
<font face="Arial" style="font-size: 17px">segundos</font>
</center>
<script type="text/javascript">
//<![CDATA[
<!--

var targetURL="http://crearweb.webnode.es"
var countdownfrom=10


var currentsecond=document.redirect.redirect2.value=countdownfrom+1
function countredirect(){
if (currentsecond!=1){
currentsecond-=1
document.redirect.redirect2.value=currentsecond
}
else{
window.location=targetURL
return
}
setTimeout("countredirect()",1000)
}

countredirect()
//-->
//]]>
</script> <!--webbot bot="HTMLMarkup" endspan -->
</form>


		
		

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