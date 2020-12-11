<?php ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>OSJEMIAN</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="<?php echo base_url();?>/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->



<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->


</head>
<body>
<!-- header -->
<div class="header">
	<div class="agile-top-header">
	<div class="banner-agile-top">
		<div class="number">
			<h3><i class="fa fa-phone" aria-hidden="true"></i> </h3>
		</div>
				<div class="top-icons">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
	</div>
		<div class="logo">
			<h1><a href="<?php echo base_url();?>/index.php/Hotel/main">OSJEMIAN</a></h1>
		</div>
		<!-- navigation -->
		<div class="top-left">
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
								
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <nav class="linkEffects linkHoverEffect_2">
							<ul>
								<li><a href="<?php echo base_url();?>/index.php/Hotel/main" data-link-alt="Menu principal" class="active"><span>Menu</span></a></li> 
								<li><a href="<?php echo base_url();?>/index.php/Hotel/habitaciones" data-link-alt="Entrar" class="active"><span>Servicios</span></a></li> 
							</ul>
						</nav>
						
					</div>
				</nav>
				<div class="search">
						<form action="#" method="post">
							<input type="search" placeholder="Buscar" name="Search" required="">
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"> </div>	
				</div>

			</div>
			<div class="clearfix"> </div>	
			<!-- //navigation -->
		</div>
	</div>
	<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-info">
							<h3>Realiza tu reservacion</h3>
						    <p></p>
							<div class="readmore-w3">
								<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Leer mas</a>
							</div>
						</div>
					</li>
				</ul>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Nuestro hotel de ensueño</h4>
										<img src="<?php echo base_url();?>/images/popup.jpg" alt=" " class="img-responsive"/>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->
			</div>
			<div class="clearfix"></div>
</div>		
		<!--//Slider-->

		<div class="main" id="main">
		<div class="w3layouts_main_grid">
		<div class="booking-form-head-agile">
		<h3>Hotel Reservacion</h3>
		</div>
			<form action="#" method="post" class="w3_form_post">
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Nombre * </h5>
						<div class="nam">
							<input type="text" name="First name" placeholder="Nombre(s)" required="">
						</div>
						<div class="nam1">
							<input type="text" name="Last name" placeholder="Apellidos" required="">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>E-mail </h5>
							<input type="email" name="Email" placeholder="ejem: micorreo@gmail.com" required="">
					</div>
				</div>
				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Tipo de cuarto</h5>
						<select id="category" name="category" required="">
							<option value=" "></option>
							<option value="category1">Habitacion individual</option>
							<option value="category2">Habitacion romantica</option>
							<option value="category3">La mas mamalona Room</option>
							
						</select>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Fecha de llegada *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker" name="Text" type="text" value="dia/mes/año" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="Time" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Fecha de salida *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker1" name="Text" type="text" value="dia/mes/año" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="agileits_w3layouts_main_gridr">
							<input type="time" name="Time" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Número de huespedes *</h5>
						<select id="category1" name="category1" required="">
							<option value=" ">01</option>
							<option value="category2">02</option>
							<option value="category3">03</option>
							<option value="category4">04</option>
							<option value="category2">05</option>
							<option value="category3">06</option>
						</select>
					</div>
				</div>
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="Reservar">
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
		</div>

</div>
<!-- //header -->
<!-- /about -->
<div class="w3-aglile-about" id="about">
	<div class="w3-agile-about-grids">

			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- /about -->
<!-- /services -->
<div class="services" id="services">
	<div class="container">
	<div class="services-agile-head">
		<h3>Servicios</h3>
	</div>
		<div class="w3-agile-grids">
			<div class="col-md-6 w3-agile-services-left">
				<div class="w3-services-text">
				<ul class="services-head">
				</ul>
				</div>
				<div class="col-md-4 services-icon1">
					<i class="fa fa-ambulance" aria-hidden="true"></i>
					<h4>Zona medica</h4>
				</div>
				<div class="col-md-4 services-icon1">
					<i class="fa fa-briefcase" aria-hidden="true"></i>
					<h4>Servios de mantenimiento</h4>
				</div>
				<div class="col-md-4 services-icon1">
						<i class="fa fa-plane" aria-hidden="true"></i>
					<h4>Viajes baratos</h4>
				</div>
				<div class="col-md-4 services-icon1">
						<i class="fa fa-youtube" aria-hidden="true"></i>
					<h4>Internet Rapido</h4>
				</div>
		
			</div>
			<div class="col-md-6 w3-agile-services-right">
				<img src="<?php echo base_url();?>/images/ab1.jpg" alt="services">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!--//footer-->
		<script src="<?php echo base_url();?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->

			<!-- para el js-->
							<link href="<?php echo base_url();?>/css/owl.carousel.css" rel="stylesheet">
							    <script src="<?php echo base_url();?>/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!--//required-js-files-->
		<!-- //for-Testimonials -->
<!-- Calendar -->
			<link rel="stylesheet" href="<?php echo base_url();?>/css/jquery-ui.css" />
			<script src="<?php echo base_url();?>/js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="<?php echo base_url();?>/js/move-top.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>/js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="<?php echo base_url();?>/js/SmoothScroll.min.js"></script>



</body>
</html>