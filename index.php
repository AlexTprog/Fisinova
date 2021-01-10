<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width,initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">

    <!--Estilos-->
    <link href="css/style.css" rel="stylesheet">

    <title>Fisinova</title>

</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg fixed-top">

        <a class="navbar-brand" href="#">Fisinova</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="/img/menu.svg">
        </button>

        <!--Items-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#" id="">Inicio </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="sobreNosotros.html" id="">Sobre Nosotros</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" id="">Agenda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" id="">Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>

    <header id="header">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="header-content-left">
                        <h1>Bienvenido</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, est! Sed odit distinctio
                            sint nostrum. Distinctio aliquid commodi ea quam architecto, illum esse nesciunt nemo
                            laboriosam maiores? Sed, optio deserunt.</p>
                        <a href="#" class="btn btn-outline-secondary btn-lg mt-2">Saber mas</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="header-content-right">
                        <img src="img/boyprog.gif">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    <section id="about-one">
        <div clas="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="about-left">
                        <img src="img/logo-dark.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-right">
                        <h1>Somos una Comunidad</h1>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, molestiae. Perferendis
                            cupiditate fuga
                            modi aspernatur ex reiciendis, eos sunt recusandae fugiat rerum maiores eius sequi, aliquid
                            dolorem
                            obcaecati. Id, labore!
                        </p>
                        <p class="h4">-uwu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="agenda">
        <div clas="container">
            <h1>Agenda</h1>
            <div class="row no-gutters">
                <div class="col-sm">

                  </div>
                <div class="col-sm-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/agenda_1.jpg" width="100%" height="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="img/agenda_2.jpg" width="100%" height="100%">
                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm">

                  </div>
            </div>
        </div>
        </div>
    </section>

    <section id="contact-one">
        <div clas="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="contact-left">
                        <h1>Contactanos</h1>
                        <form class="card" method="POST">
                            <div class="card-body">

                                <div class="form-group">
                                    <input type="text" placeholder="Nombre" class="form-control" name="nombre">
                                </div>

                                <div class="form-group">
                                    <input type="email" placeholder="email" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <textarea rows="3" cols="3" placeholder="Mensaje" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary btn-block" name="enviar">Enviar</button>
                            </div>
                        </form>
                        <?php
                        include("registrar.php");
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-right">
                        <h1>Informacion</h1>
                        <div class="form-group">
                            <input type="email" placeholder="email" class="form-control" name="email">
                        </div>
                        <button type="submit" class="btn btn-outline-secondary btn-block" name="enviar">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>


</body>

</html>
