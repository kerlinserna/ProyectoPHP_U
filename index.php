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
	<img src="me.png" id="yo"/>
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
					<li><a href="#"> <span class="glyphicon glyphicon-education"></span> Courses</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
					<li><a href="registro.php"><span class="glyphicon glyphicon-registration-mark"></span> Registrarse</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-send"></span> Contact</a></li>
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
  <div class="seccion2">
  	<section>
  	<h1>Detalles de los Cursos</h1>
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
  	</section>
  </div>
  <!-- End SlidesJS Required: Start Slides -->
  		<script src="js/jquery.slides.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/menufijo.js"></script>
		<script src="js/main.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <!-- End SlidesJS Required -->
</body>
</html>
