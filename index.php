<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="https://image.freepik.com/vector-gratis/diseno-plantilla-logo-fitness_1322-9.jpg" type="image/x-icon">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
</head>

<body>
	<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success">
			<h3>
				<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
			</h3>
		</div>
	<?php endif ?>

	<div class="container mt-5">

		<nav class="navbar  navbar-expand-lg navbar-dark default-color scrolling-navbar">
			<a class="navbar-brand" href="#"><strong>Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></strong></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="somos.php">Quienes somos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="programas.php">Nuestro Programas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="horarios.php">Horario de los Programas</a>
					</li>
				</ul>
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a class="nav-link" href="index.php?logout='1'">Salir</a>
					</li>
				</ul>
			</div>
		</nav>



		<?php if (isset($_SESSION['username'])) : ?>



			<div style="margin-top:100px;"></div>
			<main class="text-center my-5">
				<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-1z" data-slide-to="1"></li>
						<li data-target="#carousel-example-1z" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-block w-100" src="https://i.ytimg.com/vi/_gMjw7QHTbk/maxresdefault.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="https://as.com/deporteyvida/imagenes/2018/05/05/portada/1525514284_012665_1525514365_noticia_normal.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="https://i.ytimg.com/vi/fwQeCp0sZtY/maxresdefault.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</main>












		<?php endif ?>
	</div>



	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</body>

</html>