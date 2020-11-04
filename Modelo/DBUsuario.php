<?php
require_once("../Modelo/Conexion.php");

class DBUsuario
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

        public function listaDeEmpresas()
        {  
            $sqlListaDeEmpresas = "SELECT e.*
FROM empresa e 
GROUP BY e.idEmpresa
ORDER BY e.nombre ASC;";
            $cmd = $this->conexion->prepare($sqlListaDeEmpresas);
            $cmd->execute();
            $listaDeEmpresasConsulta = $cmd->fetchAll();
            return $listaDeEmpresasConsulta;
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
}