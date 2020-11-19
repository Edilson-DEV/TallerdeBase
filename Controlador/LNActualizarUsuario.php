<?php

require_once("../Modelo/DBUsuario.php");

$dbUsuario = new DBUsuario();

$dbUsuario->ActualizarHora($_REQUEST['idHorario'],$_REQUEST['idHora']);

$update=$dbUsuario->ActualizarHora($_REQUEST['idHorario'],$_REQUEST['hora']);

if ($update == true) {
    
    echo "Los datos del horario se actualizaron correctamente";
             
}

else{
    echo "Error en la actualizacion del horario";

}

?>
<br>
<h3 title="Volver Lista de Usuarios"><a href="../Vista/about.php">Lista de Usuarios</a></h3>