<?php 
require_once 'curso.php';
require_once 'estudiante.php';
require_once 'conexiondb.php';
$oCurso=new cursos();
$listacurso=$oCurso->listadocursos();
$oestudiante=new estudiante();
$listaestudiante=$oestudiante->listadoestudiante();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>matricula</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>

<body background="insertar.jpg">
    <div class="container">
        <form action="crearmatricula.php" method="POST">
            
            <h4>nombre del curso</h4>
                   <select class="form-select" name="idCurso" id="">
                       
                       <option value=""disabled selected>curso</option>
                       <?php foreach($listacurso as $registro){
                       ?>
                       <option value="<?php echo $registro['id'];?>"><?php echo $registro['curso']?></option>
                       <?php
                       
                       }?>
                   </select>
                
              
           
            <h4>id del estudiante</h4>
                   <select class="form-select" name="idEstudiante" id="">
                       
                       <option value=""disabled selected>estudiante</option>
                       <?php foreach($listaestudiante as $registro){
                       ?>
                       <option value="<?php echo $registro['id'];?>"><?php echo $registro['nombres']," ",$registro['apellidos']?></option>
                       <?php
                       
                       }?>
                   </select>
                   <h4>nota final</h4>
                    <input type="text" name="NotaFinal">
                    <h4 >observaciones</h4>
                    <input type="text" name="Observaciones">
                   <input type="submit" value="ejecutar" class="btn btn-info" onclick="datos()">
                   <a href="botones.html" class="btn btn-outline-info">inicio</a>
                
               
        </form>
    </div>
</body>

</html>