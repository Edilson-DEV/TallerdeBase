<?php
require_once("../Controlador/LNListaUsuario.php");
require_once("../Modelo/DBUsuario.php");

$objLNListaUsuario = new LNListaUsuario();
$listaUsuarios = $objLNListaUsuario->listaDeUsuarios();

$objModeloUsuario = new DBUsuario();
if (isset($_REQUEST['ci']) || isset($_REQUEST['cproyecto']) || isset($_REQUEST['fechaNacimiento'])){
    $ci = ($_REQUEST['ci']) ? $_REQUEST['ci'] : '';
    $fechaNacimiento = ($_REQUEST['fechaNacimiento']) ? $_REQUEST['fechaNacimiento'] : '';

    $listaUsuarios = $objModeloUsuario->buscadorEmpresa($ci, $fechaNacimiento, $_REQUEST['cproyecto']);

}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Lista de Usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3">Lista de usuarios</span>
</h1>
<section class="page-section about-heading">
                  <div class="container">
                      <div class="about-heading-content">
                          <div class="row">
                              <div class="col-xl-9 col-lg-10 mx-auto">
                                  <div class="bg-faded rounded p-5">
                                      <div class="row">
                                          <div class="col-md-10"></div>
                                          <div class="col-md-2">
                                              <button type="button" class="btn btn-success">Añadir</button>
                                          </div>
                                      </div>

      </form>
      <h3 class="float-right" title="Este es un Enlace a Listar de Usuarios"><a href="./IURegistrarUsuario.php">Registrar</a>
      </h3>

      <table class="table">
        <thead>
        <tr>


          <th>CI</th>
          <th>Fecha de Nacimiento</th>
          <th>Nº Mesa</th>
            <th>Hora</th>
          <th>Acciones</th>
<!--          <th>Eliminar</th>-->

        </tr>
        </thead>
        <tbody>
        <?php
//        print_r($listaUsuarios);
        foreach ($listaUsuarios as $registroUsuarios) {
            ?>
          <tr>
            <!--            <th scope="row">--><?php //echo($key + 1); ?><!--</th>-->
            <td><?php echo $registroUsuarios['ci']; ?></td>
            <td><?php echo $registroUsuarios['fechaNacimiento']; ?></td>
            <td><?php echo $registroUsuarios['mesa']; ?></td>
              <td><?php echo $registroUsuarios['hora']; ?></td>


            <!--            <td><a href="../Vista/IUActualizarEmpresa.php?idEmpresa=-->
              <?php //echo $registroEmpresas['idEmpresa']; ?><!--">Actualizar</a>-->
              <td><a href="../Controlador/LNEliminarUsuario.php?idUsuario=<?php echo $registroUsuarios['idUsuario']; ?>">Editar</a>
            <td><a href="../Controlador/LNEliminarUsuario.php?idUsuario=<?php echo $registroUsuarios['idUsuario']; ?>">Eliminar</a>




          </tr>

            <?php

        } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

