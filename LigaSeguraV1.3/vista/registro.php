<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liga Segura</title>
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container"><a class="navbar-brand" href="#">Liga Segura</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"> <a class="nav-link" href="../index.php">Inicio<span
                                class="sr-only">(current)</span></a> </li>
                </ul>

            </div>
        </div>
    </nav>

    <hr>
    </div>
    <hr>
    <center>
        <form action="registro.php" method="post" enctype="multipart/form-data"><br>
            <h3 class="text-center"> &nbsp; &nbsp;Registro</h3>
            <br><br>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Nombre<input
                    style="border: solid 1px #000000; " type="text" name="nombre" id="nombre"
                    placeholder="ingrese su nombre" class="form-control" required>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Usuario
                <input style="border: solid 1px #000000; " type="text" name="usuario" id="usuario"
                    placeholder="ingrese su usuario" class="form-control" required>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Contraseña
                <input style="border: solid 1px #000000; " type="password" name="contrasena" id="contrasena"
                    placeholder="ingrese su contraseña" class="form-control" required>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Tipo de usuario
                <select style="border: solid 1px #000000; " name="id_tipousuario" id="id_tipousuario"
                    class="form-control" required>
                    <option value="0">Seleccione un nivel</option>
                    <option value="1">Usuario</option>
                </select>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Estatus
                <select style="border: solid 1px #000000; " name="estatus" id="estatus" class="form-control" required>
                    <option value="normal">normal</option>
                </select>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Foto<input
                    style="border: solid 1px #000000; " type="file" name="foto" id="foto" class="form-control" required>
            </p>
            <input type="submit" value="Registrar" class="btn btn-outline-secondary text-dark"><br>
        </form>
    </center>
    <hr>
    <hr>
    <form style="margin: auto; width: 220px;">
    </form>
    <hr>
    <hr>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active col-lg-7 offset-lg-0">
                            <img class="d-block w-100" src="images/Marinela.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item col-lg-7">
                            <img class="d-block w-100" src="images/Oxxo.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item col-lg-7 offset-lg-0">
                            <img class="d-block w-100" src="images/Coca.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container"> </div>
        <div class="container text-white bg-dark p-4">
            <div class="row">
                <div class="col-6 col-md-8 col-lg-7">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-4 col-12 col-lg-5">
                            <ul class="list-unstyled">
                                <li class="btn-link"><a href="privacidad.php">Politicas de privacidad</a></li>
                                <li class="btn-link"><a href="terminos.php">Terminos y condiciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-5 col-6">
                    <address>
                        <strong>LigaSegura, Inc.</strong><br>
                        Carr. Monterrey - Saltillo Km. 61.5, Bosques de Santa Catarina, 66359 Santa Catarina, N.L.<br>
                    </address>
                    <address>
                        <br>
                        <a href="mailto:#">ligasegura@gmail.com</a>
                    </address>
                </div>
            </div>
        </div>
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Copyright © LigaSegura. Reservados todos los derechos.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-4.3.1.js"></script>

</body>

</html>