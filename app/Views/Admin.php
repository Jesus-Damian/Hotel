<!DOCTYPE html>
<html lang="es" dit="ltr">
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
	<title>Admin</title>
</head>
<body background="<?php echo base_url();?>/assets/images/fondo.png">
	<div align="center">
    <div class="title">
        <h1>"OSJEMIAN"</h1>
    </div>

    <div class="enlace-rp">
        <h5>Start as admin</h5>
        
        <input type="button" value="Sing In" id="inicio">
    </div>

    <div clas="container">
        <div clas="row">
            <section class="container-fluid col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form  method="post" action="<?php echo base_url();?>/index.php/Hotel/AdminP" role= "form" onsubmit="return validar();">
                    <fieldset>
                            <p id="aux1"><input type="User" name="fn" placeholder="User" id="Us"></p>
                            <p id="aux4"><input type="password" name="p" placeholder="Password" id="password"></p>
                    </fieldset>
                    <p><input type="submit" value="Log in" ></p>

                </form>

                <!--Agregar aqui las redes sociales con las que se puede enlazar la página-->
                <p><a href="#" id="other" target="_blank">Or Sing In With</a></p>
                <ul>
                    <button><i class='bx bxl-google' ></i></button>
                    <button><i class='bx bxl-facebook-circle' ></i></button>
                    <button><i class='bx bxl-linkedin' ></i></button>
                </ul>
            </section>
        </div>
    </div>
</section>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/main.js"></script>

</body>
</html>