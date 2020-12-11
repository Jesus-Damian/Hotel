<?php ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
    <link rel="icon" href="<?php echo base_url();?>/assets/images/LOGO.jpeg">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estiloimg.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/bootstrap.js"></script> 
    <title>Reservacion</title>
</head>

<body >
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
                                <li></span></a></li> <li></span></a></li><li></span></a></li>   <li></span></a></li> 
                                <li><a href="<?php echo base_url();?>/index.php/Hotel/habitaciones" data-link-alt="Promociones Especiales" class="active"><span>Promociones Especiales </span></a></li> 
                                <li><a href="<?php echo base_url();?>/index.php/Hotel/calendario" data-link-alt="Destino" class="scroll"><span>Reservaciones</span></a></li> 
                                <li><a href="<?php echo base_url();?>/index.php/Hotel/habitaciones" data-link-alt="Grupos, convvecionales, Bodas" class="scroll"><span>Grupos, convvecionales, Bodas</span></a></li> 
                                <li></span></a></li> <li></span></a></li> <li></span></a></li> 
                                <li><a href="<?php echo base_url();?>/index.php/Hotel/pagar" data-link-alt="Confirmar Pago" class="scroll"><span> Pagar</span></a></li> 
                                <li><a href="<?php echo base_url();?>/index.php/Hotel/index" data-link-alt="Registrarse" class="scroll"><span>Registrarse</span></a></li> 
                            </ul>
                        </nav>
                    </div>
                </nav>
                    <div class="clearfix"> </div>   
                </div>
            </div>
            <div class="clearfix"> </div>   
            <!-- //navigation -->
	<div class="container">
		<div class="row">
			<section class="container-fluid h-25 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="tumbnail">
					<div class="jumbotron">
						<section>
							<h4>Confirmar y Pagar</h4>
							<h5>Tu viaje</h5>
						</section>

						<section>
							<h6>Fecha</h6>
							<input type="date" id="start" name="trip-start"value="2020-01-01"min="2020-01-01" max="2022-12-31">
              <a href="#" id="ed">Editar</a>

						</section>

						<section>
							<h6>Hora de llegada</h6>
							<input type="time" name="eta">
              <a href="#" id="ed">Editar</a>

						</section>

						<section>
							<h6>Huéspedes</h6>
							<input type="text" class="form-control" placeholder="3 huéspedes">
              <a href="#" id="ed">Editar</a>
						</section>

						<section>
							<h6><br>¿Viajas por trabajo?</h6>
							<form class="checkbox">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="switch1">
                  <label class="custom-control-label" for="switch1"></label>
                </div>
              </form>
						</section>
					</div>
				</div>
			</section>

			<section class="container-fluid h-25 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="tumbnail">
					<div class="jumbotron">
						<section>
							<h5 id="pc">Pagar con</h5>
							<ul> 
                    			<i class='bx bxl-visa'></i>
                    			<i class='amex'>AMEX</i>
                    			<i class='bx bxl-mastercard'></i>
                    			<i class='DISC'>DISCOVER</i>
                    			<i class='bx bxl-paypal'></i>
                    			<i class='GPAY'>GPAY</i>
                			</ul>
						</section>

						<form method="POST" action="indexInipro.html" role="form" onsubmit="return validar();" id="aa">
                    		<fieldset>
                        		<div class="input-group mb-3" id="tr">
                            		<button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" >
                               			<i class='bx bx-credit-card-front'></i> Tarjeta de crédito o débito
                           			</button>
                           			<div class="dropdown-menu ">
                               			<a class="dropdown-item" href="#">Crédito</a>
                               			<a class="dropdown-item" href="#">Débito</a>
                           			</div>
                       			</div>
   

                       			<button type="button" class="btn">Número de tarjeta <i class='bx bxs-lock-alt'></i></button>
                       			<div id="igp">
                           			<div class="input-group-prepend">
                                  <input type="text" class="form-control" placeholder="Caducidad">
                                </div>
                                  <input type="text" class="form-control" placeholder="CVV">
                       			</div>


                          
                       			<input class="input--style-4" type="cd" name="cd" id="cd" value="Código postal">
   
                       			<div class="input-group" id="pr">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                                    País/región
                                </button>
                                <div class="dropdown-menu ">
                                    <a class="dropdown-item" href="#">México</a>
                                    <a class="dropdown-item" href="#">EEUU</a>
                                    <a class="dropdown-item" href="#">Canadá</a>
                                    <a class="dropdown-item" href="#">China</a>
                                </div>
                            </div>
                           			</button>
                       			</div>
                    		</fieldset>
						</form>
					</div>
				</div>
				<a href="https://google.com.mx">Ingresa un código de cupón</a>
			</section>


  <section class="container-fluid col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="submit" id="button" value="PAGAR">
  </section>

          <section class="container-fluid col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="submit" id="button" value="CANCELAR">
          </section>
        
		</div>
	</div>
</body>
</html>