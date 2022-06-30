<?php
session_start();
require_once '../modelo/config.php';
if(!isset($_SESSION["correo"])){
    header("location:../index.php");
}else{
?>
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
                    <li class="nav-item active"> <a class="btn btn-outline-danger text-white" style="margin-left: 15px"
                            class="nav-link" href="salir.php">Cerrar sesión<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container" style="font-family:copperplate">
        <center><br>
            <h1 style="font-family:didot" class="bg-dark text-white">Bienvenido usuario
                <b><?php echo $_SESSION["correo"]; ?>
            </h1>
        </center>
    </div>
    <hr>
    </div>
    <hr>
    <form style="margin: auto; width: 220px;">
    </form>
    <hr>
    <hr>
    <form style="margin: auto; width: 220px;">
    </form>
    <section class="intro">
        <div class="column col-sm-10 offset-sm-2 col-md-9 offset-md-3 col-lg-8 offset-lg-4">
            <?php
            require_once('../modelo/config.php');
            $queryResult = $pdo->query("SELECT * FROM usuarios WHERE correo = '".$_SESSION["correo"]."' ");
                
                while($row=$queryResult->fetch(PDO::FETCH_ASSOC)){      
           ?>
            <tr>
                <td>
                    <img src="<?php echo ($row['ruta'])?>">
                </td>
            </tr>

        </div>
        <center>
            <div class="container" style="font-family:copperplate"><br>

                <table style="font-family:copperplate" width="80%" border="1" cellpadding="3" cellspacing="2">
                    <tr class="bg-dark">

                        <th>
                            <center>
                                <font color="white"> Nombre
                            </center>
                        </th>
                        <th>
                            <center>
                                <font color="white">Correo electronico
                            </center>
                        </th>
                        <th>
                            <center>
                                <font color="white"> Estatus
                            </center>
                        </th>

                    </tr>
                    <?php 
               
                    echo '<tr>
                            <td><center>'.$row['nombre'].'</center></td>
                            <td><center>'.$row['correo'].'</center></td>
                            <td><center>'.$row['estatus'].'</center></td>
                         </tr>';                
                }
           
                ?>
                </table>
                <br><br><br><br><br><br>

            </div>
        </center>
    </section>
    <hr>
    <div class="container" align="center"> </div>
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
<?php
}
?>