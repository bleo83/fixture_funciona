<?php
include 'Equipo.php';
include 'calculo.php';
$titulo = "Grupo A";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Fixture</title>
<!-- Style -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Choose Layout -->
<link href="css/layout-semiboxed.css" rel="stylesheet">
<!-- Choose Skin -->
<link href="css/skin-green.css" rel="stylesheet">
<style>
.smalltitle{margin-top: -30px;}
</style>
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
<body class="off">
<!-- /.wrapbox start-->
<div class="wrapbox">
	<!-- TOP AREA
================================================== -->
	<section class="toparea">
	<div class="container">
		<div class="row">
			<div class="col-md-6 top-text pull-left animated fadeInLeft">
				<!--<i class="icon-phone"></i> Phone: (316) 444 8529 <span class="separator"></span><i class="icon-envelope"></i> Email: <a href="#">wowthemesnet@gmail.com</a>-->
			</div>
			<div class="col-md-6 text-right animated fadeInRight"  >
				<div class="social-icons">
					<a class="icon icon-facebook" href="#"></a>
					<a class="icon icon-twitter" href="#"></a>
					<a class="icon icon-linkedin" href="#"></a>
					<a class="icon icon-skype" href="#"></a>
					<a class="icon icon-google-plus" href="#"></a>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /.toparea end-->
	<!-- NAV
================================================== -->
	<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
	<div class="container">
		<!-- <div class="navbar-header">
			<a class="navbar-brand logo-nav" href="index.html"><img src="img/logo.png" alt="logo"></a>
		</div>-->
		<ul id="nav" class="nav navbar-nav pull-right">
			<li><a href="index.html">Home</a></li>
			<li class="dropdown">
			<!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="icon-angle-down"></i></a>-->
			<ul class="dropdown-menu">
				<li><a href="home2.html">Home Alt</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="timeline.html">Timeline</a></li>
				<li><a href="landingpage.html">Landing Page</a></li>
				<li><a href="testimonials.html">Testimonials</a></li>
				<li><a href="faq.html">F.A.Q.</a></li>
				<li><a href="404.html">404 Not Found</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Teams <i class="icon-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="portfolio3.html">Three Columns</a></li>
				<li><a href="portfolio2.html">Two Columns</a></li>
				<li><a href="portfolio4.html">Four Columns</a></li>
				<li><a href="projectdetail.html">Single Project</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Stadium <i class="icon-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="blogindex.html">Home Blog</a></li>
				<li><a href="blogsinglepost.html">Single Post</a></li>
			</ul>
			</li>
			<li class="dropdown active">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groups <i class="icon-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="elements.html">Elements</a></li>
				<li><a href="columns.html">Columns</a></li>
				<li><a href="icons.html">Icons</a></li>
				<li><a href="#">Masonry Grids +</a>
				<ul class="dropdown-menu sub-menu">
					<li><a href="masonry2.html">Masonry Two</a></li>
					<li><a href="masonry3.html">Masonry Three</a></li>
					<li><a href="masonry4.html">Masonry Four</a></li>
				</ul>
				</li>
			</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</div>
	</nav>
	<!-- /nav end-->
	<!-- PAGE TITLE
================================================== -->
	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig">Fixture	</h1>
		<p class="animated fadeInRightBig container page-description">
			 Recordá que el último campeón fue España<br/>
			Quién será el próximo??
		</p>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- ELEMENTS ITEMS BEGIN

		
		
		
		================================================== -->
		<section class="container">
		<div class="container">
				<section class="topspace30">
		<div class="container">
			<div class="row">
				<div class="col-md-4 animated fadeInLeftNow notransition">
					<div class="tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#grupoa" data-toggle="tab"><i class="icon icon-star"></i> Grupo A</a></li>
							<li><a href="#grupob" data-toggle="tab"><i class="icon icon-star"></i>Grupo B</a></li><li><a href="#grupoc" data-toggle="tab"><i class="icon icon-star"></i>Grupo C</a></li>
							<li><a href="#grupod" data-toggle="tab"><i class="icon icon-star"></i>Grupo D</a></li><li><a href="#grupoe" data-toggle="tab"><i class="icon icon-star"></i>Grupo E</a></li>
							<li><a href="#grupof" data-toggle="tab"><i class="icon icon-star"></i>Grupo F</a></li><li><a href="#grupog" data-toggle="tab"><i class="icon icon-star"></i>Grupo G</a></li>
							<li><a href="#grupoH" data-toggle="tab"><i class="icon icon-star"></i>Grupo H</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="grupoa">
								<p>
									<img src="http://www.wowthemes.net/demo-biscaya/wp-content/uploads/sites/8/2013/08/Untitled-1-150x150.png" class="round-image" style="width:80px;height:80px;" alt=""> Somos un grupo de profesionales que pensamos en la necesidad que surge de poder buscar todo lo que uno necesita en un sólo lugar. La idea surgió desde el momento que necesitamos buscar un comercio y no encontramos más que distintos sitios poco confiables.
								</p>
							</div>
							<div class="tab-pane" id="grupob">
								
								<section class="container">
		
			<div class="boxportfolio2">
				<h1 class="smalltitle">
				<span>Grupo A</span>
				</h1>
				<!--Begin GRUPO A-->
				<form action="" method="post">
                <table class="table table-bordered" width="50%"  style = "float:left; width:200px;" >
				<th> Bandera </th>
                                <th> Equipo1 </th>
                                <th> Goles </th>
                                <th> Goles </th>
                                <th> Equipo2 </th>
                                <th> Bandera </th>
				
                                    <?php
					//Array individual de Partidos, Puntaje, goles, etc de cada por paÃ­s:
					$brasil= array("",0,0,0,0,0,0,0,0,1);
                                        $camerun= array("",0,0,0,0,0,0,0,0,2);
                                        $espana= array("",0,0,0,0,0,0,0,0,3);
                                        $croacia= array("",0,0,0,0,0,0,0,0,4);
                   
                                        //Array 2 dimensiones de partidos   
					$grupoa = array (
							array("Brasil","","","Croacia"),
							array("Espana","","","Camerun"),
							array("Brasil","","","Espana"),
							array("Camerun","","","Croacia"),
							array("Croacia","","","Espana"),
							array("Camerun","","","Brasil"),
                                        );
				
				$j=6; //Variable para dar nombre a cada variable de la segunda columna del marcador por partido
				//Inicio de FOR para cargar tablas de HTML Partidos GRUPO A
				for ($i=0; $i<6; $i++){
					$j++;
					$resu{$i} = isset($_REQUEST["resu$i"]) ? $_REQUEST["resu$i"] : ''; //se crea la variable con el nombre resu y el indice. Ejemplo resu0, resu1, hasta el 5
					$resu{$j} = isset($_REQUEST["resu$j"]) ? $_REQUEST["resu$j"] : ''; //se crea la variable con el nombre resu y el indice a partir de 6. Ejemplo resu6, resu7..
				?>
				<tr>
                                    <td style="background-color:#FFF" width="2"><img src="banderas/<?php echo $grupoa[$i][0]; ?>.png" alt="imagen"/> </td>
                                    <td style="background-color:#FFF" align="center" ><?php echo $grupoa[$i][0] ?> </td>
                                    <td style="background-color:#FFF" width="2"><input type="text" size="2" name="resu<?php echo $i?>" id="resu<?php echo $i?>" value="<?php echo $resu{$i} ?>" onFocus="vaciar(this)" onBlur="verificarEntrada(this)"/></td>
                                    <td style="background-color:#FFF" width="2"><input type="text" size="2" name="resu<?php echo $j?>" id="resu<?php echo $j?>" value="<?php echo $resu{$j} ?>" onFocus="vaciar(this)" onBlur="verificarEntrada(this)"/></td>
                                    <td style="background-color:#FFF" ><?php echo $grupoa[$i][3] ?> </td>
                                    <td style="background-color:#FFF" width="2"><img src="banderas/<?php echo $grupoa[$i][3]; ?>.png" alt="imagen"/> </td>
				</tr>
				<?php 
				$grupoa [$i][1] =($resu{$i}); //Cargo en el ARRAY 2 dimensiones el resultado ingresado a la izquierda en la tabla por el usuario
				$grupoa [$i][2] =($resu{$j}); //Cargo en el ARRAY 2 dimensiones el resultado ingresado a la DERECHA en la tabla por el usuario
             
                                } //Fin del FOR para cargar tabla HTML de partidos Grupo A 
                
                                $resu{$i} = isset($_REQUEST["resu$i"]) ? $_REQUEST["resu$i"] : ''; //CREO QUE ESTO ESTA DE MAS ACA
                                $resu{$j} = isset($_REQUEST["resu$j"]) ? $_REQUEST["resu$j"] : ''; //CREO QUE ESTO ESTA DE MAS ACA
                                ?>
                       </table>  
                              
                          
						<input type ="submit" value ="Actualizar Tabla" style = "float:center; width:400px;"/>  <!-- BOTON ACTUALIZAR TABLA -->  
                     </form>  
				
												
							</div> <!--fin div -->
							
							<div class="boxportfolio2">
				<h1 class="smalltitle">
				<span>Grupo A</span>
				</h1>
				
				
				<!--Begin GRUPO A-->
				
				<form action="" method="post">
                   
                        
                        <table class="table table-bordered" width="50%"  style = "float:left; width:200px;" >
				<th> Bandera </th>
                                <th> Equipo1 </th>
                                <th> Goles </th>
                                <th> Goles </th>
                                <th> Equipo2 </th>
                                <th> Bandera </th>
				
                                    <?php
					//Array individual de Partidos, Puntaje, goles, etc de cada por paÃ­s:
					$brasil= array("",0,0,0,0,0,0,0,0,1);
                                        $camerun= array("",0,0,0,0,0,0,0,0,2);
                                        $espana= array("",0,0,0,0,0,0,0,0,3);
                                        $croacia= array("",0,0,0,0,0,0,0,0,4);
                   
                                        //Array 2 dimensiones de partidos   
					$grupoa = array (
							array("Brasil","","","Croacia"),
							array("Espana","","","Camerun"),
							array("Brasil","","","Espana"),
							array("Camerun","","","Croacia"),
							array("Croacia","","","Espana"),
							array("Camerun","","","Brasil"),
                                        );
				
				$j=6; //Variable para dar nombre a cada variable de la segunda columna del marcador por partido
				//Inicio de FOR para cargar tablas de HTML Partidos GRUPO A
				for ($i=0; $i<6; $i++){
					$j++;
					$resu{$i} = isset($_REQUEST["resu$i"]) ? $_REQUEST["resu$i"] : ''; //se crea la variable con el nombre resu y el indice. Ejemplo resu0, resu1, hasta el 5
					$resu{$j} = isset($_REQUEST["resu$j"]) ? $_REQUEST["resu$j"] : ''; //se crea la variable con el nombre resu y el indice a partir de 6. Ejemplo resu6, resu7..
				?>
				<tr>
                                    <td style="background-color:#FFF" width="2"><img src="banderas/<?php echo $grupoa[$i][0]; ?>.png" alt="imagen"/> </td>
                                    <td style="background-color:#FFF" align="center" ><?php echo $grupoa[$i][0] ?> </td>
                                    <td style="background-color:#FFF" width="2"><input type="text" size="2" name="resu<?php echo $i?>" id="resu<?php echo $i?>" value="<?php echo $resu{$i} ?>" onFocus="vaciar(this)" onBlur="verificarEntrada(this)"/></td>
                                    <td style="background-color:#FFF" width="2"><input type="text" size="2" name="resu<?php echo $j?>" id="resu<?php echo $j?>" value="<?php echo $resu{$j} ?>" onFocus="vaciar(this)" onBlur="verificarEntrada(this)"/></td>
                                    <td style="background-color:#FFF" ><?php echo $grupoa[$i][3] ?> </td>
                                    <td style="background-color:#FFF" width="2"><img src="banderas/<?php echo $grupoa[$i][3]; ?>.png" alt="imagen"/> </td>
				</tr>
				<?php 
				$grupoa [$i][1] =($resu{$i}); //Cargo en el ARRAY 2 dimensiones el resultado ingresado a la izquierda en la tabla por el usuario
				$grupoa [$i][2] =($resu{$j}); //Cargo en el ARRAY 2 dimensiones el resultado ingresado a la DERECHA en la tabla por el usuario
             
                                } //Fin del FOR para cargar tabla HTML de partidos Grupo A 
                
                                $resu{$i} = isset($_REQUEST["resu$i"]) ? $_REQUEST["resu$i"] : ''; //CREO QUE ESTO ESTA DE MAS ACA
                                $resu{$j} = isset($_REQUEST["resu$j"]) ? $_REQUEST["resu$j"] : ''; //CREO QUE ESTO ESTA DE MAS ACA
                                ?>
                       </table>  
                              
                          
						<input type ="submit" value ="Actualizar Tabla" style = "float:center; width:400px;"/>  <!-- BOTON ACTUALIZAR TABLA -->  
                     </form>  
				
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							</div> <!--fin div -->
							
						</div>
					</div>
				</div>
				<div class="col-md-8 home-features animated fadeInRightNow notransition">
					<div class="row">
						<div class="col-md-6">
							<h4><i class="icon icon-magic"></i>Promociona tu comercio </h4>
							<div class="bottomspace30">
								 Promocioná tu comercio, profesión, aprovechando los distintos planes.
							</div>
						</div>
						<div class="col-md-6">
							<h4><i class="icon icon-twitter"></i>Social Media</h4>
							 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more. <br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4><i class="icon icon-user">
							</i> A Playground for Web</h4>
							 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more. <br>
						</div>
						<div class="col-md-6">
							<h4><i class="icon icon-arrow-up">
							</i> Advanced Start</h4>
							 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more. <br>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
			<!-- /.home-features end-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</section>
		</div>
	<!-- /.wrapsemibox end-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- BEGIN FOOTER
================================================== -->
	<section>
	<div class="footer">
		<div class="container animated fadeInUpNow notransition">
			<div class="row">
				<div class="col-md-3">
					<h1 class="footerbrand">Fixture</h1>
					<p>
						 By Leo & Zapa
					</p>
					<p>
						 Fixture
					</p>
					<p>
						Fixture
					</p>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
					<div class="footermap">
						<p>
							<strong>Address: </strong> No lo sé
						</p>
						<p>
							<strong>Phone: </strong> + 111111111111
						</p>
						<p>
							<strong>Fax: </strong> + 1 1111111111111
						</p>
						<p>
							<strong>Email: </strong>  admin@zonarg.com
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
							 "FIXTURE.<span style="font-family:arial;">"</span><br/><b> LEONARDO </b>
						</div>
						<div class="textItem">
							<div class="avatar">
								<img src="http://wowthemes.net/demo/biscaya/img/demo/avatar.jpg" alt="avatar">
							</div>
							 "FIXTURE<span style="font-family:arial;">"</span><br/><b>LEONARDO </b>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">Q</span>uick <span class="font100">123</span></h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							AAAA
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
						 &copy; Copyright 2014 zonarg.com
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
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
<script>
/* ---------------------------------------------------------------------- */
/*	Masonry
/* ---------------------------------------------------------------------- */
	$(window).load(function(){
	var $container = $('#content')
	// initialize Isotope
	$container.isotope({
	  // options...
	  resizable: false, // disable normal resizing
	  // set columnWidth to a percentage of container width
	  masonry: { columnWidth: $container.width() / 2 }
	});
	// update columnWidth on window resize
	$(window).smartresize(function(){
	  $container.isotope({
		// update columnWidth to a percentage of container width
		masonry: { columnWidth: $container.width() / 2 }
	  });
	});
	});
</script>
<script>
	/* ---------------------------------------------------------------------- */
	/*	Accordion 1
	/* ---------------------------------------------------------------------- */
	/*!
	*/
	$(document).ready(function()
	{
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({'width' : contentwidth });
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	return false;
	});
	/* ---------------------------------------------------------------------- */
	/*	Accordion 2
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
	/* ---------------------------------------------------------------------- */
	/*	Tabs1&2
	/* ---------------------------------------------------------------------- */
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
	/* ---------------------------------------------------------------------- */
	/*	Tabs3
	/* ---------------------------------------------------------------------- */
	$('#myTab a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
	})
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	$(window).load(function(){			
				$('#carousel-projects').carouFredSel({
					responsive: true,
					width: '100%',
					auto: true,
					circular	: true,
					infinite	: false,
					prev : {
						button		: "#car_prev",
						key			: "left",
							},
					next : {
						button		: "#car_next",
						key			: "right",
								},
					swipe: {
						onMouse: true,
						onTouch: true
						},
					scroll : 1500,
					items: {
						visible: {
							min: 4,
							max: 4
						}
					}
				});
			});
	/* ---------------------------------------------------------------------- */
	/*	Toggles
	/* ---------------------------------------------------------------------- */
	$(document).ready(function () {
	$('.faqs dd').hide(); // Hide all DDs inside .faqs
	$('.faqs dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){ // Add class "hover" on dt when hover
	$(this).next().slideToggle('normal'); // Toggle dd when the respective dt is clicked
	}); 
	});
</script>
</body>
</html>