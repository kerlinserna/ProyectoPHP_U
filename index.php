<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/normalize.css">
	<link rel="stylesheet"  href="css/estilos.css">
  <link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
	<script src="https://code.jquery.com/jquery-1.11.2.min.js">
  </script>
  <style>
    /* Prevents slides from flashing */
    #slides {
      display:none;
      width: 100%;
      margin-top: 0;
    }
     </style>
	<script>
    $(function(){
  $("#slides").slidesjs({
    play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 2000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
  </script>
	<title>Cursos Capacitando</title>
	</head>
	<body>
	<header>
	<img src="img/me.png" id="yo"/>
	<h1>Cursos Capacitando | CC</h1>
	</header>
	<!--Aca empieza el nav-->
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav" id="main-menu">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="Controller/ctlrCourses.php" target="_blank"> <span class="glyphicon glyphicon-education"></span> Courses</a></li>
			<li><a href="Controller/ctrlEditCourse.php" target="_blank"> <span class="glyphicon glyphicon-education"></span> Edit Courses</a></li>
      <li><a href="Views/login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
			<li><a href="Views/registro.php"><span class="glyphicon glyphicon-registration-mark"></span> Registrarse</a></li>
			<li><a href="#contact"><span class="glyphicon glyphicon-send"></span> Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
  <!-- SlidesJS Required: Start Slides -->
  <!-- The container is used to define the width of the slideshow -->
  <div id="slides">
    <img src="img/desktop.jpg">
    <img src="img/mac.jpg">
    <img src="img/pc.jpg">
    <img src="img/pc2.jpg">
    <img src="img/street.jpg">
  </div>
  <div class="progress">
  <div class="progress-bar progress-bar-striped" style="width: 35%">
    <span class="sr-only">35% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 20%">
    <span class="sr-only">20% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 10%">
    <span class="sr-only">10% Complete (danger)</span>
  </div>
  <div class="progress-bar progress-bar-sucess progress-bar-striped" style="width: 20%">
    <span class="sr-only">20% Complete (warning)</span>
  </div>
    <div class="progress-bar progress-bar-striped" style="width: 15%">
    <span class="sr-only">15% Complete (success)</span>
  </div>
</div>
  <div class="seccion2">
  	<section>
  	<h1 class="textcourses">Información de los Cursos</h1>
  <div class="row">
    <div class="col-sm-4">
      <h3>Ruby on Rails</h3>
      <p>es un framework de aplicaciones web de código abierto escrito en el 
      lenguaje de programación Ruby, siguiendo el paradigma de la arquitectura 
      Modelo Vista Controlador (MVC).</p>
      <p>Trata de combinar la simplicidad con la 
      posibilidad de desarrollar aplicaciones del mundo real escribiendo 
      menos código 
      que con otros frameworks y con un mínimo de configuración.</p>
    </div>
    <div class="col-sm-4">
      <h3>FRONTEND</h3>
      <p>Responsable por convertir el diseño visual e interactivo en el 
      código de FrontEnd Aunque es un perfil muy cercano al diseñador,</p>
      <p> el desarrollador FrontEnd traduce las interfaces visuales,
       es decir, las trabaja en código.</p>
    </div>
    <div class="col-sm-4">
      <h3>Node js</h3>        
      <p>es un entorno en tiempo de ejecución multiplataforma, de código 
      abierto, para la capa del servidor (pero no limitándose a ello) basado 
      en el lenguaje de programación ECMAScript, </p>
      <p>asíncrono, con I/O de datos en una arquitectura orientada a
       eventos y basado en el motor V8 de Google.</p>
    </div>
  </div>
  	</section>
  </div>
  <footer id="contact">
    <p>Todos los derechos reservados ®</p>
    <p>Powered by Juan Diego Zapata y Kerly Serna</p>
    <a href="https://www.facebook.com/profile.php?id=1514988450" target="_blank">
    <span class="icon-facebook fb" target="_blank"></span></a>
    <a href="https://instagram.com/juandiegozapatad/" target="_blank">
    <span class="icon-instagram ig"></span></a>
    <a href="https://github.com/jdzapataduque" target="_blank">
    <span class="icon-github gh"></span></a>
    <a href="https://www.linkedin.com/profile/view?id=AAIAABs429wBAe
    qWYJjeM0yxnVMM9Sc4dDTkwo4&trk=nav_responsive_tab_profile" target="_blank">
    <span class="icon-linkedin lk" target="_blank"></span></a>
  </footer>
  <!-- End SlidesJS Required: Start Slides -->
  	<script src="js/jquery.slides.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <!-- End SlidesJS Required -->
</body>
</html>
