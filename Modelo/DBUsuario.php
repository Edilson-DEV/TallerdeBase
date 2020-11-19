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
        $sqlListaDeUsuarios= "SELECT * FROM usuario u INNER JOIN mesa m ON u.idMesa = m.idMesa JOIN horario h on u.idHorario = h.idHorario;";

        //$sqlListaDeUsuarios = "select u.ci,u.fechaNacimiento,h.hora,m.mesa,u.idUsuario
//from  mesa m inner join usuario u on m.idMesa = u.idMesa  inner join  horario h on u.idUsuario = h.idUsuario;";
        $cmd = $this->conexion->prepare($sqlListaDeUsuarios);
        $cmd->execute();
        $listadeUsuariosConsulta=$cmd->fetchAll();
        return $listadeUsuariosConsulta;
    }
    
//validando el nit de empresa para la actualizacion
       

    public function registrarUsuario($ci, $fechaNacimiento, $idMesa,$idHorario)
    {
        echo "ci--> ".$ci."<br>";
        echo "fecha de nacimiento--> ".$fechaNacimiento."<br>";
        echo "ci--> ".$idMesa."<br>";
        echo "ci--> ".$idHorario."<br>";
        

        $sqlInsertarEmpresa = "
            INSERT INTO usuario(ci,fechaNacimiento,idMesa,idHorario)
            VALUES(".$ci.",'".$fechaNacimiento."',".$idMesa.",".$idHorario.");";
            echo $sqlInsertarEmpresa;

        try {
            $cmd = $this->conexion->prepare($sqlInsertarEmpresa);

            if ($cmd->execute()) {
                return 1;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo 'ERROR: No se logro realizar la nueva inserción - ' . $e->getMesage();
            exit();
            return 0;
        }
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
    public function ActualizarHora($idHorario,$hora){

        $sql="UPDATE hora SET hora=$hora WHERE idHorario=$idHorario ";
        
        $cmd = $this->conexion->prepare($sql);
        
        if ($cmd->execute()) {
            return 1;
        } else {
            return 0;
        }
    }
}
?>
<br><h3 title="Volver Lista de Usuarios"><a href="../Vista/about.php">Lista de Usuarios</a></h3>