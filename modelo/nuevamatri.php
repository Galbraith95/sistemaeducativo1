<?php

require_once 'matricula.php';
require_once 'estudiante.php';
require_once 'conexiondb.php';

?>

<html>
<head></head>
<body >


<div class="container">
<h1> Matricula</h1>

    <?php
    $omatricula=new matricula();
    $omatricula->idCurso=$_GET['idCurso'];
    $omatricula->detalleCurso();
    ?>
        <div class="row">
        <div class="col">
            <h3>Curso: </h3>
            <input class="form-control" type="text" value="<?php echo $omatricula->curso; ?>" >
        </div>
        <div class="col">
            <h3>Profesor: </h3>
            <input class="form-control" type="text" value="<?php echo  $omatricula->nombreEstudiante." ".$omatricula->apellido; ?>" >
        </div>
        </div>

        <br>

        <?php 
        $oestudiante=New estudiante();
        $result=$oestudiante->listadoestudiante();
        ?>

        <form action="crearmatricula.php" method="GET">
        <input type="text" name="idCurso" value="<?php echo $omatricula->idCurso; ?>" style="display:none;">
            <h3>Estudiante: </h3>
            <select class="form-select" name="idEstudiante" id="">
            <option value="" disabled selected>Selecciones una opción</option>
            <?php foreach($result as $registro){
            ?>
            <option value="<?php echo $registro['id'];?>"><?php echo $registro['nombres']." ".$registro['apellidos'];?></option>
            <?php
            }
            ?>
            </select>
            <br>
            <input type="submit" class="btn btn-outline-success" value="Guardar" >
        </form>
    
<br>

        

</div>
</body>

</html>


