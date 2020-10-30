<?php 
include ("Conexion.php");
$conexion=new Conexion();

$nametable="SELECT * FROM usuario";


		$cmd = $conexion->prepare($nametable);
    $cmd->execute();
    
    $listaDeusuarios = $cmd->fetchAll();
    var_dump($listaDeusuarios);
?>



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
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>
  <!-- Navigation -->
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
<body>
  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
    <span class="site-heading-lower">Business Casual</span>
  </h1>



  <section class="page-section about-heading">
    <div class="container">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
            <div class="row"><div class="col-md-10"></div><div class="col-md-2"><button type="button" class="btn btn-success">Añadir</button></div></div>

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                     <th scope="col">Nº</th>
                    <!--  <th scope="col">Id Usuario</th>-->
                    <th scope="col">CI</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Nº Mesa</th>
                    <th scope="col"></th>
                    <th scope="col">Acciones</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                       foreach($listaDeusuarios as $key=>$usuario){

                       
                
                ?>
                  <tr>
                    <th scope="row"><?php echo($key+1);?></th>
                  <!--  <td><?php echo($usuario['idUsuario']);?></td>-->
                    <td><?php echo($usuario['ci']);?></td>
                    <td><?php echo($usuario['fechaNacimiento']);?></td>
                    <td><?php echo($usuario['idMesa']);?></td>
                    <td> <button type="button" class="btn btn-info">Editar</button></td>
                    <td><button type="button" class="btn btn-danger">Borrar</button></td>
               
                  </tr>
                       <?php }?>

                </tbody>
              </table>
              
              <table class="table">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">Nº</th>
                    <th scope="col">Id Usuario</th>
                    <th scope="col">CI</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Nº Mesa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$value->idUsuario}}</td>
                    <td>{{$value->ci}}</td>
                    <td>{{$value->fechaNacimiento}}</td>
                    <td>{{$value->idMesa}}</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>{{$value->idUsuario}}</td>
                    <td>{{$value->ci}}</td>
                    <td>{{$value->fechaNacimiento}}</td>
                    <td>{{$value->idMesa}}</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>{{$value->idUsuario}}</td>
                    <td>{{$value->ci}}</td>
                    <td>{{$value->fechaNacimiento}}</td>
                    <td>{{$value->idMesa}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
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

</body>

</html>
