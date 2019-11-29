<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>GYM</title>
	<link rel="shortcut icon" href="https://image.freepik.com/vector-gratis/diseno-plantilla-logo-fitness_1322-9.jpg" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
</head>

<body>


	<div class="container">
		<div class="card my-5 blue-gradient">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-2 col-md-2"></div>
					<div class="col-sm-8 col-md-8">
						<div class="card my-5">
							<div class="card-body">
								<div class="text-center my-3">
									<img src="http://lofrev.net/wp-content/photos/2017/05/user_logo.png" height="200px">
								</div>
								<h4 class="text-center text-primary">Registrate</h4>
								<form method="post" action="register.php">
									<?php include('errors.php'); ?>
									<div class="form-group">
										<label>Usuario</label>
										<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
									</div>
									<div class="form-group">
										<label>Correo</label>
										<input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
									</div>
									<div class="form-group">
										<label>Contraseña</label>
										<input class="form-control" type="password" name="password_1">
									</div>
									<div class="form-group">
										<label>Confirmar Contraseña</label>
										<input class="form-control" type="password" name="password_2">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block" name="reg_user">Registrarme</button>
									</div>
									<p class="text-center my-4">
										¿Ya eres usuario? <a href="login.php">Inicia Session</a>
									</p>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-2 col-md-2"></div>
				</div>
			</div>
		</div>
	</div>




</body>

</html>