<?php
 require_once 'matricula.php';
 require_once 'conexiondb.php';
 $omatricula=new matricula();
 $omatricula->idCurso=$_GET ['idCurso'];
 $omatricula->idEstudiante=$_POST['idEstudiante'];
 $omatricula->NotaFinal=$_POST['NotaFinal'];
 $omatricula->Observaciones=$_POST['Observaciones'];
 $result=$omatricula->nuevamatricula();
 if($result){
    echo ("Location: modelo/lismatricula.php");
}else{
    echo "error al registrar las matriculas";
}
?>