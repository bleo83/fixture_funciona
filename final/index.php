<?php
session_start();
if (isset($_SESSION['usuario'])){
     if ($_SESSION['fixture']!="TRUE"){ 
     	echo '<script>location.href = "grupos.php";</script>';	
	 }else{
	 	echo '<script>location.href = "tupronostico.php";</script>';
	 	
	 }
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
<body style="background: black;">
<!-- /.wrapbox start-->

	<!-- TOP AREA
================================================== -->



	<section class="pageheader-default text-center">
	<div class ="semitransparentbg">
<div>
	<!-- Begin of mycountdown.org script --><div align="center" style="margin:15px 0px 0px 0px;"><div align="center" style="width:140px;border:1px solid #ccc; background: #FFFFFF; color: #FFFFFF;font-weight:bold;font-size:12px;margin-bottom:0px;padding-bottom:0px"> <a style="text-decoration: none; color:#000080;" href="http://mycountdown.org/Sports/FIFA_World_Cup/">World Cup Countdown</a></div><script type="text/javascript" src="http://mycountdown.org/countdown.php?cp3_Hex=FFB200&cp2_Hex=FFFFFF&cp1_Hex=000080&ham=0&img=1&hbg=0&hfg=0&sid=0&fwdt=180&text1=World Cup&text2=Brasil World Cup!&group=Sports&countdown=FIFA World Cup&widget_number=3015"></script><a href="http://mycountdown.org/fullpage.php?cp3_Hex=FFB200&cp2_Hex=FFFFFF&cp1_Hex=000080&ham=0&img=1&hbg=0&hfg=0&sid=0&fwdt=180&text1=World Cup&text2=Brasil World Cup!&group=Sports&countdown=FIFA World Cup&widget_number=3015" title="World Cup FIFA World Cup Countdown  on  Thursday, 12 June 2014" style="display:inline"><br><img src="http://mycountdown.org/images/get_widget_button.png" alt="" style="border:none"></a></div> <!-- End of mycountdown.org script -->
</div>


		<h1 class="animated fadeInLeftBig notransition" style="color:yellow" ><b></b>World Cup 2014</b></h1>
		<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			 Demostrá lo que sabés de fútbol<br>
			 participá del torneo en tufixture.com</b>
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>

		<section class="container">
		<div class="row" >
			<div class="col-md-6 animated anim-slide notransition">
			
			<h1 class="smalltitle">
			<span style="color:yellow">Ingresa a tu cuenta</span>
			</h1>
			<form  action="return false"  method="POST" onsubmit="return false" class="form-horizontal" >
					<div id="resultado"><br> </div> 
					<div class="form-group" >
						<label class="col-sm-2 control-label">Usuario</label>
						<div class="col-sm-10">
							<input name="user" id="user" class="form-control"  placeholder="Usuario" value=""  style="max-width:1500px;float:left">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" name="pass" id="pass" class="form-control"  placeholder="***" style="max-width:1500px;">
						</div>
					</div>  
					                                 				
                                    <!--<input type ="submit" button class="btn btn-primary" style="background:#1ABC9C;max-width:1500px;">-->
                        <p><button class="btn btn-success" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">Ingresar</button></p>
					<br><br>
				</form>
				<script>
        function Validar(user, pass)
        {
            $.ajax({
                url: "validar.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                    $('#resultado').html(resp)
                }        
            });
        }
        </script>
			
			</div>
			<div class="col-md-6 animated anim-fade notransition">
				<h1 class="smalltitle">
			<span style="color:yellow">Crea tu cuenta</span>
			</h1>

                           
			
                            <form  action="return false"  method="POST" onsubmit="return false" class="form-horizontal" >
                                     <div id="createAccountError" class="createAccountError"></div>	
                   <div class="form-group">
						<label class="col-sm-2 control-label">Usuario</label>
						<div class="col-sm-10">
							<input name="user" id="accountuser" class="form-control" type="text" placeholder="Usuario" style="max-width:1500px;float:left">
						</div>
					</div>				
                                     <div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input name="email" id="accountemail" class="form-control" type="text" placeholder="Email" style="max-width:1500px;float:left">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Contraseña</label>
						<div class="col-sm-10">
							<input type="password" name="password" id="accountpassword"  class="form-control" placeholder="Password" style="max-width:1500px;float:left;">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Repetir Password</label>
						<div class="col-sm-10">
							<input type="password" name="repassword" id="accountrepassword"  class="form-control"  placeholder="Repetir Password" style="max-width:1500px;float:left;">
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input name="name" id="accountname"  class="form-control" type="text"  placeholder="First Name" style="max-width:1500px;float:left">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Apellido</label>
						<div class="col-sm-10">
							<input name="lastname" id="accountlastname" class="form-control" type="text" placeholder="Last Name" style="max-width:1500px;">
						</div>
					</div>
					
					<!--<div class="form-group">
						<label class="col-sm-2 control-label">Country</label>
						<div class="col-sm-10">
							<input name="country" id="accountcountry"  class="form-control" type="text" placeholder="Country" style="max-width:1500px;">
						</div>
					</div>-->
					
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Grupo</label>
						<div class="col-sm-10">
							<input readonly = "readonly" name="company" id="accountcompany" class="form-control" type="text" placeholder="Company" value="Amigos" style="max-width:1500px;">
						</div>
					</div>
                                    				
                       <button class="btn btn-success" onclick="ValidarFormAccount(document.getElementById('accountuser').value,document.getElementById('accountemail').value, document.getElementById('accountpassword').value,
document.getElementById('accountrepassword').value, document.getElementById('accountname').value,
document.getElementById('accountlastname').value);">Ingresar</button>

					
					<br><br>
				</form>

<script>
        function ValidarFormAccount(user, mail, pass, repass, name,lastname)
        {
            $.ajax({
                url: "registro.php",
                type: "POST",
                data: "&user="+user+"&mail="+mail+"&pass="+pass+"&repass="+repass+"&name="+name+"&lastname="+lastname,
                success: function(resp){
                    $('#createAccountError').html(resp)
                }        
            });
        }
        </script>
			
			</div>
			
		</div>
		</section>
		
		<!-- TEAM
================================================== -->
		<section class="container animated fadeInDownNow notransition topspace10">
		<div class="row">
			<h1 class="text-center smalltitle">
			<span>Quién será el ganador??</span>
			</h1>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="img/demo/messi.jpg" alt="">
					<div class="caption" style="background: rgba(97, 237, 254, 1);">
						<h4>Lionel Messi</h4>
						
						<p>
							 Argentina<br>
						</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail" style="background: black;">
					<img src="img/demo/robben.jpg" alt="">
					<div class="caption" style="background: orange;">
						<h4>Arjen Robben</h4>
						<span class="primarycol">- Delantero-</span><p>
							 Holanda<br>
						</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="img/demo/neymar.jpg" alt="">
					<div class="caption" style="background: yellow;">
						<h4>Neymar Jr</h4>
						
						<p>
							 Brasil<br>
						</p>
						
					</div>
				</div>
			</div>
		</div>
		</section>
	
		<!-- BEGIN CALL TO ACTION PANEL
================================================== -->
	
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
					<h1 class="title"><span class="colortext">E</span>ncuéntranos </h1>
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