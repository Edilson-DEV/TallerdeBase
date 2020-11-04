<?php
require_once("../Modelo/DBUsuario.php");

$objetoUsuario = new DBUsuario();

$exitoEliminarUsuario = $objetoUsuario->EliminarUsuario($_REQUEST['idUsuario']);

if($exitoEliminarUsuario==1){
    echo "los datos del empresa se eliminaron correctamente";
}else{
    echo "Error al eliminar datos dela empresa";
}
?>
<br>
<h3 title = " Lista De Usuario"> <a href="../Vista/IUListaUsuario.php">Lista de Usuario</a></h3>