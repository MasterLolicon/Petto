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
    <link rel="stylesheet" href="pag/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="pag/css/login.css">
    <script src="pag/js/jquery.js"></script>
    <script type="text/javascript" src="pag/popper-js"></script>
  	<script src="pag/js/bootstrap.js"></script>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

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
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #aaccff; z-index:1 ;">
  <!--<a class="navbar-brand" href="#">Petto</a>-->
  <a class="navbar-brand" href="">
    <img src="pag/img/petto.png" alt="logo" style="width: 40px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="nav navbar-nav">
   <li class="nav-item">
    <a class="nav-link" href="#conoce">Con&oacute;cenos</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="#servicio">Servicios</a>
   </li>  
  </ul>
 </div>
 </nav>

    <!-- Header -->
    <div class="container" style="background-image: url('pag/img/back.jpeg'); background-repeat: no-repeat; background-size: cover; max-width: 100%;max-height: 100%; overflow: auto; " id="main">
  <div class="row" style="height: 100%;">
   <div class="col-sm-4"></div>
  <div class="jumbotron col-sm-4 text-center" style="margin-bottom: 10%; margin-top: 10%; opacity: 0.8;">
  <img src="pag/img/petto.png" style="width: 80%;">
  <p>Centro de Apoyo a dueños de mascotas</p>

  <button type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block';document.getElementById('page-top').style.overflow='hidden'" style="width:auto;">Entrar</button>
  <button type="button" class="btn btn-primary" onclick="document.getElementById('id02').style.display='block'; document.getElementById('page-top').style.overflow='hidden';" style="width:auto;">Registrarse</button>
  </div>
<div>
 </div>
 </div>
 </div>



<!--registrar-->
<div id="id02" class="modal" style="padding-top: 5px; overflow: auto;">
  
  <form class="modal-content animate" id="registro" name="registro" method="post" action="script_guarda.php" style="width: 50%; margin-left: 28%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none';document.getElementById('page-top').style.overflow='auto';"  class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <label for="nombre"><b>Nombre</b></label>
      <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>

      <label for="apepat"><b>Apellido Paterno</b></label>
      <input type="text" class="form-control" placeholder="Apellido Paterno" name="apepat" id="apepat" required>

      <label for="apemat"><b>Apellido Materno</b></label>
      <input type="text" class="form-control" placeholder="Apellido Materno" name="apemat" id="apemat" required>

      <label for="usuario"><b>Nombre de Usuario</b></label>
      <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required>

      <label for="correo"><b>Correo</b></label>
      <input type="email" class="form-control" placeholder="example@domain.com" name="correo" id="correo" required>

      <label for="contrasenia"><b>Contrase&ntilde;a</b></label>
      <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="contrasenia" id="contrasenia" required>

      <label for="ubicacion" style="display: none;"><b>Ubicacion</b></label>
      <input style="display: none;" type="text" class="form-control" placeholder="ubicacion" name="ubicacion" id="ubicacion" value="1" >
        
      <button type="submit" name="enviar" onclick="validar();" class="btn btn-primary">Registrar</button>
      </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancelar</button>
    </div>
  </form>
</div>


<!--login-->
 <div id="id01" class="modal" style="overflow: auto;">
  
  <form class="modal-content animate" action="script_acceso_usuario.php" role="form" name="frm_ingreso" method="post" style="width: 50%; margin-left: 28%" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none';document.getElementById('page-top').style.overflow='hidden'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="usuario"><b>Usuario</b></label>
      <input type="text" placeholder="Usuario" name="usuario" id="usuario" required>

      <label for="contrasenia" ><b>Contrase&ntilde;a</b></label>
      <input type="password" placeholder="Contrase&ntilde;a" name="contrasenia" id="contrasenia" required>
        
      <button type="submit" class="btn btn-primary" name="Submit">Ingresar</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<script type="text/javascript">
  document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
      document.getElementById("id01").style.display="none";
      document.getElementById("id02").style.display="none";
      document.getElementById("page-top").style.overflow="auto";
    }
};
</script>




    <section id="conoce" style="z-index: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¿Quienes somos?</h2>
                    <h3 class="section-subheading text-muted">Esto es lo que tenemos para ti.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt=""> 
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Estudiantes de Escom</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Que desarrollan una plataforma para personas amantes de las mascotas.</p>
                                    <p>El objetivo de nuestro sistema, es apoyar a todos aquellos dueños de mascotas, con la finalidad de ahorrarles tiempo y esfuerzo en la busqueda y solicitud de servicios para sus mascotas.</p>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>

    

        <section id="servicio" style="z-index: 0;background-color: rgba(135,209,10,0.5);">
        <div class="container-fluid text-center">
            
                <div class="col-md-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                </div>
            </div>
            <div class="col-md-6 text-center" style="display: inline-block;">
              <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt=""> 
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Adopci&oacute;n</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Que desarrollan una plataforma para personas amantes de las mascotas</p>
                                </div>
                            </div>
            </div>

            <div class="col-md-5 text-center" style="display: inline-block;">
              <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt=""> 
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Paseadores</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Que desarrollan una plataforma para personas amantes de las mascotas</p>
                                </div>
                            </div>
            </div>

            <div class="col-md-6 text-center" style="display: inline-block;">
              <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt=""> 
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Tiendas</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Que desarrollan una plataforma para personas amantes de las mascotas</p>
                                </div>
                            </div>
            </div>

            <div class="col-md-5 text-center" style="display: inline-block;">
              <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt=""> 
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Parejas</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Que desarrollan una plataforma para personas amantes de las mascotas</p>
                                </div>
                            </div>
            </div>

           
        

         <div class="timeline-image" style="width: 300px;height: 220px">
                                <h4>¡no dejes pasar mas tiempo!
                                    <br>Registrate y
                                    <br>conciente a tu mascota</h4>
                            </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Petto 2018</span>
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
