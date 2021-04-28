<?php


    require_once 'estudiante.php';
    require_once 'conexiondb.php';
 $oestudiante=new estudiante();
 $oestudiante->tipodocumento=$_POST['tipoDocumento'];
 $oestudiante->documento=$_POST['documento'];
 $oestudiante->nombre=$_POST['nombre'];
 $oestudiante->apellido=$_POST['apellido'];
 $oestudiante->direccion=$_POST['direccion'];
 $oestudiante->telefono=$_POST['telefono'];
$result=$oestudiante->nuevoestudiante();

?>