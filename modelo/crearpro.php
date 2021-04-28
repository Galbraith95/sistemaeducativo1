<?php


    require_once 'profesor.php';
    require_once 'conexiondb.php';
 $oprofesor=new profesor();

 $oprofesor->nombre=$_POST['nombre'];
 $oprofesor->apellido=$_POST['apellido'];
 $oprofesor->direccion=$_POST['direccion'];
 $oprofesor->telefono=$_POST['telefono'];
$result=$oprofesor->nuevoprofesor();

?>