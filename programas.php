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



                <div class="card card-cascade wider my-5">
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://cf.ltkcdn.net/exercise/images/std/250326-1600x1067-aerobics.jpg" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <h5 class="card-title text-uppercase text-primary my-5">functional</h5>
                        <p class="card-text">
                            El entrenamiento funcional es un tipo de entrenamiento
                            que modifica los objetivos tradicionales del entrenamiento
                            clásico, que estos solían ser o los del alto rendimiento
                            deportivo para deportista de élite, por lo que el
                            entrenamiento de fuerza que estos empleaban tenía como objetivo
                            lograr las mejores condiciones corporales para la
                            competición en las diferentes disciplinas.
                        </p>

                    </div>
                </div>



                <div class="card card-cascade narrower my-5">
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://www.sportlife.es/media/cache/big/upload/images/article/5b503dea0de694c77234a765/5b50446d0ce694a4598b621b-enamorados-del-crossfit.jpg" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade">
                        <h5 class="card-title text-uppercase text-primary my-5"> CROSSTAINING</h5>
                        <p class="card-text">
                            El Cross Training es un programa de fuerza, potencia
                            y acondicionamiento físico extremo. éste se basa en
                            el entrenamiento funcional de capacidades físicas básicas
                            como: Resistencia Cardiovascular, resistencia Muscular, Fuerza,
                            Flexibilidad.. En los entrenamientos Cross encontraremos la
                            perfecta unión entre entrenamiento funcional y entrenamiento
                            físico extremo.
                        </p>
                    </div>
                </div>

                <div class="card card-cascade my-5">
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1561214078-f3247647fc5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <h4 class="card-title text-uppercase text-primary my-5">Billy Coleman</h4>

                        <p class="card-text">
                            Este ejercicio trabaja cada grupo muscular
                            como lo es pecho / tríceps / hombros, espalda,
                            bíceps y rutina pesada de piernas, El cambio en
                            la rutina impactará sus músculos y al cambiar de
                            nuevo a su programa original sus músculos recibirán
                            un impacto de nuevo.
                        </p>

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