<?php

//se importan los archivos de conexiondb.php y estudiantr.php
require_once 'estudiante.php';
require_once 'conexiondb.php';
//se instancia el objeto estudiante
$oEstudiante=new estudiante();
$oEstudiante->id=$_POST['id'];
$oEstudiante->tipoDocumento=$_POST['tipoDocumento'];
$oEstudiante->documento=$_POST['documento'];
$oEstudiante->nombre=$_POST['nombres'];
$oEstudiante->apellido=$_POST['apellidos'];
$oEstudiante->direccion=$_POST['direccion'];
$oEstudiante->telefono=$_POST['telefonoPOST
$result=$oEstudiante->actualizarEstudiante();
if($result){
    header("Location: listarEstudiante.php");
}else{
    echo "error al actualizar el estudiante";
}
?>