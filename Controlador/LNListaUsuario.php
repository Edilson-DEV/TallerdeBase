<?php
require_once("../Modelo/DBUsuario.php");
//require_once ("./Modelo/Conexion.php");

class LNListaUsuario
{
    private $objDBUsuario;

    function __construct()
    {
        $this->objDBUsuario = new DBUsuario();
    }

    public function listaDeUsuarios()
    {
        $listaDeUsuarios = $this->objDBUsuario->listaDeUsuarios();

        return $listaDeUsuarios;
    }

    public function datosUsuario($idUsuario)
    {
        $datosUsuario = $this->objDBUsuario->datosUsuario($idUsuario);
        return $datosUsuario;
    }


}//end class

?>

