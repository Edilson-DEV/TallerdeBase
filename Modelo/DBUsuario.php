<?php
require_once("../Modelo/Conexion.php");

class DBUsuario
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function listaDeUsuarios()
    {
        $sqlListaDeUsuarios = "select u.ci,u.fechaNacimiento,h.hora,m.mesa,u.idUsuario
from  mesa m inner join usuario u on m.idMesa = u.idMesa  inner join  horario h on u.idUsuario = h.idUsuario;";
        $cmd = $this->conexion->prepare($sqlListaDeUsuarios);
        $cmd->execute();
        $listadeUsuariosConsulta=$cmd->fetchAll();
        return $listadeUsuariosConsulta;
    }

    public function EliminarUsuario($idUsuario)
    {
        $sqlEliminarUsuario = "DELETE FROM usuario WHERE idUsuario = :idUsuario;";


        $cmd = $this->conexion->prepare($sqlEliminarUsuario);
        $cmd->bindParam(':idUsuario', $idUsuario);

        if ($cmd->execute()) {
            return 1;
        } else {
            return 0;
        }

    }
}