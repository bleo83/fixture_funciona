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
</head>
<body style="background: black;">
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
                        <p><button onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">Ingresar</button></p>
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
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input name="email" id="accountemail" class="form-control" type="text" placeholder="Email" style="max-width:1500px;float:left">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
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
						<label class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-10">
							<input name="name" id="accountname"  class="form-control" type="text"  placeholder="First Name" style="max-width:1500px;float:left">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Last Name</label>
						<div class="col-sm-10">
							<input name="lastname" id="accountlastname" class="form-control" type="text" placeholder="Last Name" style="max-width:1500px;">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Country</label>
						<div class="col-sm-10">
							<input name="country" id="accountcountry"  class="form-control" type="text" placeholder="Country" style="max-width:1500px;">
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Company</label>
						<div class="col-sm-10">
							<input name="company" id="accountcompany" class="form-control" type="text" placeholder="Company" style="max-width:1500px;">
						</div>
					</div>
                                    				
                       <button onclick="ValidarFormAccount(document.getElementById('accountemail').value, document.getElementById('accountpassword').value,
document.getElementById('accountrepassword').value, document.getElementById('accountname').value,
document.getElementById('accountlastname').value, document.getElementById('accountcountry').value,document.getElementById('accountcompany').value);" style="background:#1ABC9C;max-width:1500px;" >Ingresar</button>

					
					<br><br>
				</form>

<script>
        function ValidarFormAccount(mail, pass, repass, name,lastname,country,company)
        {
            $.ajax({
                url: "registro.php",
                type: "POST",
                data: "mail="+mail+"&pass="+pass+"&repass="+repass+"&name="+name+"&lastname="+lastname+"&country="+country+"&company="+company,
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
						<span class="primarycol">- Delantero-</span>
						<p>
							 Argentina<br>
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail" style="background: black;">
					<img src="img/demo/robben.jpg" alt="">
					<div class="caption" style="background: orange;">>
						<h4>Arjen Robben</h4>
						<span class="primarycol">- Delantero-</span>
						<p>
							 Holanda<br>
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="img/demo/neymar.jpg" alt="">
					<div class="caption" style="background: yellow;">
						<h4>Neymar Jr</h4>
						<span class="primarycol">- Delantero -</span>
						<p>
							 Brasil<br>
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
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
				<div class="col-md-3">
					<h1 class="footerbrand">Calypso</h1>
					<p>
						 Introducing a premium HTML5 & CSS3 template for multipurpose use.
					</p>
					<p>
						 Three awesome layouts, beautiful modern design, lots of features and skins.
					</p>
					<p>
						 Made with &nbsp;<i class="icon-heart"></i>&nbsp; by WowThemes.net.
					</p>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
					<div class="footermap">
						<p>
							<strong>Address: </strong> No.42 - 54816 Inc Calypso
						</p>
						<p>
							<strong>Phone: </strong> + 1 (280) 482 9537
						</p>
						<p>
							<strong>Fax: </strong> + 1 (372) 742 9532
						</p>
						<p>
							<strong>Email: </strong> wowthemesnet@gmail.com
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
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">C</span>lients' <span class="font100">Voice</span></h1>
					<div id="quotes">
						<div class="textItem">
							<div class="avatar">
								<img src="http://wowthemes.net/demo/biscaya/img/demo/avatar.jpg" alt="avatar">
							</div>
							 "Before turning to those moral and mental aspects of the matter which present the greatest difficulties, let the inquirer begin by mastering more elementary problems.<span style="font-family:arial;">"</span><br/><b> Jesse T, Los Angeles </b>
						</div>
						<div class="textItem">
							<div class="avatar">
								<img src="http://wowthemes.net/demo/biscaya/img/demo/avatar.jpg" alt="avatar">
							</div>
							 "How often have I said to you that when you have eliminated the impossible, whatever remains, however improbable, must be the truth?<span style="font-family:arial;">"</span><br/><b>Ralph G. Flowers </b>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">Q</span>uick <span class="font100">Message</span></h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="contact.php" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
							<textarea class="col-md-12" name="comment" rows="4" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
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
						 &copy; Copyright 2014 WowThemes.net
					</p>
				</div>
				<div class="col-md-8">
					<ul class="footermenu pull-right">
						<li><a href="#">Home</a></li>
						<li><a href="#">Work</a></li>
						<li><a href="#">Pages</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
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