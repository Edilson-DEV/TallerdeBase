<?php
    require_once("../Modelo/DBUsuario.php");
    $objetoUsuario = new DBUsuario();
   
  
    echo "ci--> ".$_REQUEST['ci']."<br>";
    echo "fechaNacimiento --> ".$_REQUEST['fechaNacimiento']."<br>";
 //   echo "idMesa --> ".$_REQUEST['idMesa']."<br>";


//echo $target_path.'<br>' ;
//echo $_FILES['logo']['name'].'<br>' ;
 $exitoRegistro = $objetoUsuario->registrarUsuario(
        $_REQUEST['ci'],
        $_REQUEST['fechaNacimiento'],
      //  $_REQUEST['idMesa']
      2,3

    );



    if($exitoRegistro==1){
        echo "los datos del usuario se registraron correctamente";
    }else{
        echo "Error al registrar";
    }
    
    
?>