<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="/pag/estructura/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Petto</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
<script>
    function validar(){
        if(document.registro.nombre.value.length==0){
                alert("Debe ingresar su nombre")
                document.registro.nombre.focus()
                return 0;
            }

        if(document.registro.correo.value.length==0){
                alert("Debe ingresar su email")
                document.registro.correo.focus()
                return 0;
            }

        document.registro.submit();
    }
</script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Petto</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#iniciosesion">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#conoce">Conoce</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact0">Contacto</a>
                    </li>
                    <li>
                        <a href="pag/inicio.php">Provisional</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
              <div class="intro-heading">Petto</div>
                <div class="intro-lead-in">Tener una mascota nunca había sido tan fácil.</div>
              </br>
              <div class="well center-block" style="max-width:300px">
                <a href="#registro" type="button" class="page-scroll btn btn-primary btn-lg btn-block">Empezar</a>
              </br>
                <a href="#iniciosesion" type="button" class="page-scroll btn btn-primary btn-lg btn-block">Iniciar Sesión</a>
              </div>
            </div>
        </div>
    </header>
<!-- Registro -->
    <section id="registro">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Registrate</h2>
                    <h3 class="section-subheading text-muted">Solo algunos datos de protocolo.</h3>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <form role="form" id="registro" name="registro" method="post" action="script_guarda.php">
                <div class="col-lg-6 text-center">
                    <p>
                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre"/>
                    </p>
                    </br>
                    <p>
                    <input class="form-control" type="text" name="apepat" id="apepat" placeholder="Apellido Paterno"/>
                    </p>
                    </br>
                    <p>
                    <input class="form-control" type="text" name="apemat" id="apemat" placeholder="Apellido Materno"/>
                    </p>
                    </br>
                    <p>
                    <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario"/>
                    </p>
                </div>

                <div class="col-lg-6 text-center">
                    <p>
                    <input class="form-control" type="text" name="correo" id="correo" placeholder="Correo electronico"/>
                    </p>
                    </br>
                    <p>
                    <input class="form-control" type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña"/>
                    </p>
                    </br>
                    <p>
                    <input class="form-control" type="hidden" name="ubicacion" id="ubicacion"  value="1"/>
                    </p>
                </div>
                <div class="col-lg-4 col-lg-offset-4 text-center">
                  </br>
                  </br>
                  <p>
                    <input class="btn btn-xl" name="enviar" type="button" value="Registrar!" onclick="validar();">
                  </p>
                </div>
                </form>


              </div>
            </div>
        </div>
    </section>
<!--Inicio de Sesión -->
    <section id="iniciosesion" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">iniciar Sesión</h2>
                    <h3 class="section-subheading text-muted">Nos da gusto que estes de vuelta.</h3>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">

                <form action="script_acceso_usuario.php" role="form" name="frm_ingreso" method="post">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                  <p>
                    <label class="sr-only" for="usuario">Usuario:</label>
                    <input class="form-control" type="text" name="correo" id="correo" placeholder="Usuario"/>
                  </p>
                </br>
                  <p>
                    <label class="sr-only" for="contrasenia">Constraseña:</label>
                    <input class="form-control" type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña"/>
                  </p>
                </div>
                <div class="col-lg-4 col-lg-offset-4 text-center">
                  </br>
                  </br>
                  <p>
                    <input class="btn btn-xl" name="Submit" type="submit" value="Iniciar!">
                  </p>
                </div>
                </form>
              </div>
            </div>
        </div>
    </section>

    <section id="conoce">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Conoce</h2>
                    <h3 class="section-subheading text-muted">Esto es lo que tenemos para ti.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto</h2>
                    <h3 class="section-subheading text-muted">Dinos, que te pareció?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tu nombre" id="name" required data-validation-required-message="Por favor, introduce tu nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Tu correo electronico" id="email" required data-validation-required-message="Por favor, introduce tu email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tu mensaje" id="message" required data-validation-required-message="Por favor, escribe tu mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Petto 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Politicas de Privacidad</a>
                        </li>
                        <li><a href="#">Terminos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
