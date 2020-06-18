<?php require_once 'Config/parameters.php'; ?>
<?php require_once 'Controllers/mensajeController.php'; ?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?= Base_url ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= Base_url ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= Base_url ?>Assets/css/web.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <nav id="menu" class="navbar  navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="md1" src="<?= Base_url ?>Assets/img/logo-compumedica-nuevo-2014.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#sec1" id="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros" id="seccion">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials" id="local">Valores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cominicate" id="Otros">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Base_url ?>persona/inicioS" id="session">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="sec1"></section>

    <header>
        <section id="index" class="mt-8">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2 class="titulo"><b>Todo sobre el trabajo que realizamos</b></h2>
                        <p class="texto">Todo nuestro trabajo es 100% seguro, garantizamos puntualidad y buena imagen
                            el respeto y compromiso es una de las primordialidades en esta empresa</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="porta-container ">
                            <div class="portaDetalles">
                                <a href="<?= Base_url ?>web/Informatica">
                                    <h2>Nuestros Servicios Informaticos</h2>
                                    <p>---Ingresa Aqui</p>
                                </a>
                                <img src="<?= Base_url ?>Assets/img/slyder4.jpg" class="img-fluid imas" style="height: 300PX; width: 600px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="porta-container ">
                            <div class="portaDetalles">
                                <a href="<?= Base_url ?>web/Biomedica">
                                    <h2>Nuestros Servicios Biomedica</h2>
                                    <p>---Ingresa Aqui</p>
                                </a>
                                <img src="<?= Base_url ?>Assets/img/METR.jpg" style="height: 300PX; width: 600px" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </header>

    <section id="cta-2" class="section-padding mt-8" style="background: rgba(0,0,0, 0.9)">
        <div class="container ">
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="text-right-md col-md-4 col-sm-5">
                    <h2 class="section-title text-white mt-6 ">« SERVICIO<br> METROLOGIA »</h2>
                </div>
                <div class="col-md-4 col-sm-5 text-white mt-3">
                    metrología es una herramienta que apoya la gestión de calidad y competitividad de la industria, ya que
                    permite suministrar evidencia objetiva de la calidad de un proceso o de un producto.
                    Para asegurar esta precisión en los equipos y tener la certeza de que las mediciones efectuadas son
                    exactas, estos instrumentos deben ser calibrados, es decir, comparados contra patrones nacionales o
                    internacionales reconocidos.
                    <p class="text-right text-warning"><i>— Metrologia</i></p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="about-area" id="nosotros">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-image mt-5 ml-5">
                        <img src="<?= Base_url ?>Assets/img/sello.jpg" alt="CompumedicaSello" style="height: 90%; width: 90%; border-radius: 5px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-title pt-5">
                    <h4 class="text-black titulo pt-5">
                        <b id="typed"></b>
                    </h4>
                    <div class="paragraph py-2  w-80">
                        <p class="texto">Es una empresa con personal joven calificado, nacida en el año 2012 en la ciudad de
                            Sogamoso Boyacá dedicada a la venta -mantenimiento de equipos biomédicos y de servicios informáticos
                            a nivel departamental.

                            Esta empresa fue creada con el fin de suplir las necesidades y dar soluciones coherentes y
                            asequibles a las instituciones de salud, empresas y entidades que requieran de nuestros servicios,
                            las cuales cada día crecen más y necesitan de un control y supervisión de los equipos.

                            Nuestro portafolio de productos está enfocado a equipos con alto potencial, exclusivos, de gran
                            calidad y excelente rendimiento que permite que el usuario experimente una increíble sensación de
                            satisfacción.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fin acerca-->

    <section id="equipo">
        <div class="container">
            <div class="row mt-8">
                <div class="ed1 mt-5">
                    <h2 class="titulo "><b>Nuestro Equipo</b></h2>
                    <p class="texto">Siempre atentos al bienestar de su empresa</p>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 col-md-6 col-sm-12  mt-3">
                    <div class="container">
                        <div class="caja">
                            <div class="imagB">
                                <img src="<?= Base_url ?>Assets/img/pf4.jpg" class="img-fluid">

                            </div>
                            <div class="contenido">
                                <div>
                                    <h2>Alex Alarcon</h2>
                                    <h3>Gerente </h3>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mt-3 ">
                    <div class="container ">
                        <div class="caja">
                            <div class="imagB">
                                <!-- -->
                                <img src="<?= Base_url ?>Assets/img/pf1.jpg" class="img-fluid">
                            </div>
                            <div class="contenido">
                                <div>
                                    <h2>Emanuel Cardenas</h2>
                                    <h3>Ingeniero de Sistemas </h3>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="container align-content-center">
                        <div class="caja">
                            <div class="imagB">
                                <!--  -->
                                <img src="<?= Base_url ?>Assets/img/pf2.jpg" class="img-fluid">
                            </div>
                            <div class="contenido">
                                <div>
                                    <h2>Natalia Aguirre</h2>
                                    <h3>Ingenera Biomedica - Metrologa </h3>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="container">
                        <div class="caja">
                            <div class="imagB">
                                <img src="<?= Base_url ?>Assets/img/pf3.jpg" class="img-fluid">
                            </div>
                            <div class="contenido">
                                <div>
                                    <h2>Gillia Ornella</h2>
                                    <h3>Ingeniera Biomedica</h3>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="container">
                        <div class="caja">
                            <div class="imagB">
                                <img src="<?= Base_url ?>Assets/img/pf5.jpg" class="img-fluid">
                            </div>
                            <div class="contenido">
                                <div>
                                    <h2>Carlos Dias</h2>
                                    <h3>Mecatronico - Electricista</h3>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="container">
                        <div class="caja">
                            <div class="imagB">
                                <img src="<?= Base_url ?>Assets/img/pf6.jpg" class="img-fluid">
                            </div>
                            <div class="contenido">
                                <div>
                                    <h2>Marcela Lopez</h2>
                                    <h3>Contadora</h3>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <br><br>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-8">
                <section id="testimonials" class="padd-section text-center wow fadeInUp">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-md-8">

                                <div class="testimonials-content">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                                        <div class="carousel-inner" role="listbox">

                                            <div class="carousel-item  active">
                                                <div class="top-top">

                                                    <h2 class="titulo Lcolor">Misión</h2>
                                                    <p class="texto2">Seguir Proporcionando un servicio eficiente y de calidad a
                                                        todos nuestros clientes, con el fin de Satisfacer totalmente las
                                                        necesidades de mantenimiento la venta de equipos biomédicos, insumos,
                                                        servicios informaticos y equipos en general, a través de la excelencia en
                                                        el servicio y el sentido de compromiso con nuestra familia y nuestro País.</p><br><br>


                                                </div>
                                            </div>

                                            <div class="carousel-item ">
                                                <div class="top-top">

                                                    <h2 class="titulo"><b>Visión</b></h2>
                                                    <p class="texto2">Seguir siendo una empresa líder conocida a nivel
                                                        Boyacá, en la venta y mantenimiento de quipos biomédicos e informaticos,
                                                        reconocida por su atencion personalizada, su innovacion constante, precios accesibles
                                                        y con productos de <b>Calidad</b>

                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>

                                                </div>
                                            </div>

                                            <div class="carousel-item ">
                                                <div class="top-top">

                                                    <h2 class="titulo Lcolor"><b>Valores</b></h2>
                                                    <p class="texto2"><b>Equipo de Trabajo:</b> Sobresalir en todo asunto
                                                        institucional debido a nuestro compromiso de mejora
                                                        continuamente.<br>
                                                        <b>Innovación y Creatividad:</b> Reconocer y apoyar la actitud hacia
                                                        el uso y prueba de nuevas tecnologías y productos lanzados por las
                                                        marcas que representamos con la finalidad de retroalimentarlo con
                                                        resultados y funcionamiento de los equipos en sitio y con los
                                                        comentarios y reacciones del cliente.<br></P>
                                                </div>
                                            </div>


                                            <div class="carousel-item ">
                                                <div class="top-top">
                                                    <h2 class="titulo"><b>Valores</b></h2>
                                                    <p class="texto2">
                                                        <b>Espíritu Enfocado al Cliente:</b> Consideramos a nuestros
                                                        clientes como el partido principal de todos los partidos implicados
                                                        en los negocios, intentando identificar sus necesidades por
                                                        adelantado e invertir con la mejor de las soluciones integrales,
                                                        productos y servicios.<br><br>
                                                        <b>Equipo de Trabajo:</b> Creer en la superación como un marco para
                                                        trabajar permitiéndonos obtener los mejores resultados y soluciones
                                                        en debido tiempo para nuestros clientes.<br>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="btm-btm">

                                            <ul class="list-unstyled carousel-indicators">
                                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>
    <section id="cominicate">
        <div class="container">
            <div class="row mt-8">
                <!-- start sectoion contact -->
                <div id="contact" class="mt-5 mb-5">
                    <div class="container">
                        <div class="contact-block1">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="contact-contact">

                                        <h2 class="mb-30">Comunicate con nostoros</h2>

                                        <ul class="contact-details">

                                            <li><span>Sogamoso-Boyaca</span></li>
                                            <li><span>Escribenos -></span></li>
                                            <li><span>O comunicate con nosotros por via telefonica o Email:</span></li>
                                            <li><span>- +57 3214051637</span></li>
                                            <li><span>- compumedica@outllok.com</span></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <form action="<?= Base_url ?>mensaje/save" method="POST">
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group contact-block1">
                                                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres de nombre" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="Email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Por favor introduzca una dirección de correo electrónico válida" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="Tema" id="tema" placeholder="Tema" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres de tema" required />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="mensaje" rows="12" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <input type="submit" class="btn btn-warning" onclick="alert('Su mensaje sera enviado, Compumedica dara respuenta lo mas pronto posible en el correo ingresado, Gracias..!')" value="Enviar Mensaje">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <div class="container-fluid">
        <div class="row py-5 bg-light">
            <div class="col-sm-4 my-4 text-center">
                <h6 class="font-staat2 font-size-16 text-black-50">&copy;2020 CompuMedica Web Design</h6>
            </div>
            <div class="col-sm-4 my-4 text-center">
                <div class="footer-title text-ligh">
                    <a href="#" class="navbar-brad font-staat2 font-size-16 text-black-50">COMPUMEDICA:</a>
                    <p class="navbar-brad font-staat2 font-size-16 text-black-50">No somos los unicos, pero nos esforzamos por ser los mejores.</p>
                </div>
            </div>
            <div class="col-sm-4 my-5 text-center">
                <a href="https://www.facebook.com/compumedica"><span class="mr-3"><i class="fab fa-2x fa-facebook"></i></span></a>
                <a href="https://www.instagram.com/compumedica/?hl=es-la"><span class="mr-3"><i class="fab fa-2x fa-twitter"></i></span></a>
                <a href="https://twitter.com/compumedica"><span class="mr-3"><i class="fab fa-2x fa-instagram"></i></span></a>
            </div>
        </div>
    </div>
    <script src="<?= Base_url ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= Base_url ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= Base_url ?>Js/typed.min.js"></script>
    <script src="<?= Base_url ?>Js/Index.js"></script>
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($("#menu").offset().top > 400) {
                $("#menu").addClass("navbar23");
            } else {
                $("#menu").removeClass("navbar23");
            }
        });
    </script>

</body>

</html>