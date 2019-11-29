<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) {
		array_push($errors, "Usuario es requerido");
	}
	if (empty($email)) {
		array_push($errors, "Correo es requerido");
	}
	if (empty($password_1)) {
		array_push($errors, "Contraseña es requerido");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "Las contraseñas deben ser iguales");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1); //encrypt the password before saving in the database
		$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "";
		header('location: index.php');
		// header('location: index.php');
	}
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Usuario es requerido");
	}
	if (empty($password)) {
		array_push($errors, "Contraseña es requerido");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Ahora está conectado";
			header('location: index.php');
		} else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
