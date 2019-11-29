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
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="view view-cascade overlay">
                                    <img src="https://habitualmente.com/wp-content/uploads/2018/05/empezar-gym-destacada.jpg" class="card-img-top" alt="wider">
                                </div>
                                <h5 class="text-primary text-center my-4">
                                    Tips para mejorar tu session de entranamiento
                                </h5>
                                <div class="text-left">
                                    26 noviembre, 20191 comentario
                                    ¡Hola tod@s! A veces, con la rutina de trabajo y el
                                    ritmo de vida que llevamos, nos resulta bastante
                                    complicado poder incluir en nuestra agenda el entrenar
                                    todos los días; Los estudios, la familia, la compra…por lo...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="view view-cascade overlay">
                                    <img src="http://img1.wsimg.com/isteam/ip/95a29701-c819-41ce-b520-9ecedd256c2d/IMG_8525.jpg" class="card-img-top" alt="wider">
                                </div>
                                <h5 class="text-primary text-center my-4">
                                    Somos
                                </h5>
                                <div class="text-left">
                                    Creamos un GYM con muchas aspiraciones de fomentar la salud física y mental.
                                    Deseamos poder ayudarte a ejercitarte para que logres una mejor calidad de vida.
                                    Nuestros instructores están capacitados y cuentan con
                                    la experiencia.

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="view view-cascade overlay my-5">
                                    <img src="https://miro.medium.com/max/2400/1*7bGvjbu1GHFd4NphY_XaEg.jpeg" class="card-img-top" alt="wider">
                                </div>
                                <h5 class="text-primary text-center my-4">
                                    Orientacion
                                </h5>
                                <div class="text-left">
                                    Necesaria para brindarte orientación y
                                    atención acoplándose a tus necesidades. Nuestros instructores
                                    están capacitados y cuentan con la experiencia necesaria para
                                    brindarte orientación y atención acoplándose a tus necesidades
                                </div>
                            </div>
                        </div>
                    </div>
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