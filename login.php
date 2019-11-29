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



	<div class="container ">
		<div class="card m-5 blue-gradient">
			<div class="card-body my-5">
				<div class="row">
					<div class="col-sm-2 col-md-2"></div>
					<div class="col-sm-8 col-md-8">
						<div class="card my-5">
							<div class="card-body">
								<div class="text-center my-3">
									<img src="http://lofrev.net/wp-content/photos/2017/05/user_logo.png" height="200px">
								</div>
								<form method="post" action="login.php">

									<div class="form-group">
										<label>Username</label>
										<input class="form-control" type="text" name="username">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" name="password">
									</div>
									<div class="input-group">
										<button type="submit" class="btn btn-primary btn-block" name="login_user">Iniciar Session</button>
									</div>

									<?php include('errors.php'); ?>

									<p class="my-4 text-center">
										¿Todavía no eres miembro?
										<a href="register.php">Regístrate</a>
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