
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
  <!-- FIN
   Navigation -->
  <nav class="navbar navbar-expand-lg s" style="background-color: #000000;" id="">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
              aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">Horarios</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.html">Informacion</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.html">Registro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- FIN Navigation -->
  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper">Sistema de Control</span>
    <br>
    <span class="site-heading-lower">Elecciones Nacionales Bolivia 2020</span>
  </h1>

  <section class="projects-section bg-transparent">
    <div class="container bg-light">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">

              <h2 class="main-title">
                <span>Registro</span><br>

              </h2>
              <div class="share-box">
                <div class="share-methods">
                  <div id="shareIcons" class="jssocials">
                    <div class="jssocials-shares">
                      <div class="jssocials-share jssocials-share-twitter"><a class="jssocials-share-link"
                                                                              href="https://twitter.com/share?url=https%3A%2F%2Fyoparticipo.oep.org.bo%2Faplicaciones%2Fconsulta%2F&amp;text=Consulta%20si%20eres%20jurad%40%20electoral%20o%20si%20est%C3%A1s%20habilitad%40%20para%20votar&amp;via=TSEBolivia&amp;hashtags=Referendo2016"
                                                                              target="_blank"><i
                              class="fa fa-twitter jssocials-share-logo"></i></a></div>
                      <div class="jssocials-share jssocials-share-facebook"><a class="jssocials-share-link"
                                                                               href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fyoparticipo.oep.org.bo%2Faplicaciones%2Fconsulta%2F"
                                                                               target="_blank"><i
                              class="fa fa-facebook jssocials-share-logo"></i></a></div>
                      <div class="jssocials-share jssocials-share-email"><a class="jssocials-share-link"
                                                                            href="mailto:?subject=Consulta%20si%20eres%20jurad%40%20electoral%20o%20si%20est%C3%A1s%20habilitad%40%20para%20votar&amp;body=https%3A%2F%2Fyoparticipo.oep.org.bo%2Faplicaciones%2Fconsulta%2F"
                                                                            target="_blank"><i
                              class="fa fa-envelope jssocials-share-logo"></i></a></div>
                    </div>
                  </div>
                  <a class="jssocials-share-link share-code">
                    <i class="fa fa-code jssocials-share-logo"></i>
                  </a>

                </div>
              </div>
            <form action="../Controlador/agregarUsuario.php" method="post" name="   ">
              <div class="frm">
                <div class="row">
                  <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="form-group">
                      <label for="document">Documento de identidad </label>
                      <input type="text" class="form-control input-lg" name="ci">
                      <span class="help-text">Escribe tu Carnet de Identidad o documento con el que estás inscrito en el Padrón.</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="document">Fecha de nacimiento</label>

                  </div>
                 
                  <div class="col-md-12 col-sm-12 col-day">
                  <input type="date" id="start" name="fechaNacimiento">

                  </div>

                </div>
                <br><br>

                <button class="btn btn-block btn-lg btn-oep" id="btnSend" type="submit">Agregar</button>

                <div><strong> </strong></div>
              </div>
         
            
              </form>
            </div>
        </div>
        
      </div>
  </section>


  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <br>
      <br>
      <br>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Organo Electoral Plurinacional - Tribunal Supremo Electoral - DNTIC &copy; 2020 Copyright</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

  <!-- Script to highlight the active date in the hours list -->
  <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

  </body>

</html>