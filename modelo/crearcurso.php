<?php


    require_once 'curso.php';
    require_once 'conexiondb.php';
 $ocursos=new cursos();

 $ocursos->curso=$_POST['curso'];
 $ocursos->idProfesor=$_POST['idProfesor'];
 $ocursos->fechaInico=$_POST['fechaInicio'];
 $ocursos->fechaFin=$_POST['fechaFin'];
$result=$ocursos->nuevocurso(); 

    if($result){
        header("location: liscursos.php");
    }else{
        echo "erro al actualizar el curso";
    }

?>