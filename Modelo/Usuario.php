<?php

class Usuario
{
//    propiedad de la clase Usuario

private $idUsuario;
private $idMesa;
private $idRecintoVotacion;
private $ci;
private $fechaNacimiento;
    //constructor
    function __construct()
    {
    //funciones SET del Usuario, se colocan los datos
    public function setIdUsuario($idUsuario){$this->idUsuario = $idUsuario;}
    public function setIdMesa($idMesa){$this->idMesa = $idMesa;}
    public function setIdRecintoVotacion( $idRecintoVotacion){$this-> idRecintoVotacion =  $idRecintoVotacion;}
    public function setCi($ci){$this->ci = $ci;}
    public function setFechaNacimiento($fechaNacimiento){$this->fechaNacimiento = $fechaNacimiento;}

    //funciones GET del empresa, devuelven los datos
    public function getIdUsuario(){return $this->idUsuario;}
    public function getIdMesa(){return $this->idMesa;}
    public function getIdRecintoVotacion(){return $this->idRecintoVotacion;}
    public function getCi(){return $this->ci;}
    public function getFechaNacimiento(){return $this->fechaNacimiento;}
    
}