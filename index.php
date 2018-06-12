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
<title>World Cup 2018</title>
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

		<h1 class="animated fadeInLeftBig notransition" style="color:yellow" ><b></b>Copa del Mundo Rusia 2018</b></h1>
		<p class="animated fadeInRightBig  notransition container page-description" style="color:white"><b>
			 Crea tu cuenta o logueate<br>
			 y comenzá a particiar AHORA!</b>
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>

		<section class="container" >
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
					
					
				
                                    				
                       <button class="btn btn-success" 
                       onclick="ValidarFormAccount(document.getElementById('accountuser').value,document.getElementById('accountemail').value, document.getElementById('accountpassword').value,
						document.getElementById('accountrepassword').value, document.getElementById('accountname').value,
						document.getElementById('accountlastname').value);">Crear</button>

					
					<br><br>
				</form>
<br><br><br><br>
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
}
?>