<?php 
require_once 'modelo/profesor.php';
require_once  'modelo/curso.php';
require_once 'modelo/conexiondb.php';
$oprofesor= new profesor();
$listaprofe = $oprofesor->listadoprofesor();
$ocurso= new cursos();
$listacurso = $ocurso->listadocursos();
?>
<?php

//se hace referencia a los archivos estudiante y conexion
require_once 'modelo/curso.php';
require_once 'modelo/conexiondb.php';
//se instancia el objeto estudiante
$ocurso=new cursos();
//se recibe el parametro del enlace
$ocurso->id=$_GET['id'];
$registro=$ocurso->consultacursos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>detalle de curso</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
     <body>

     <div class="container">
     
     <input type="text" name="id" value="<?php echo $ocurso->id; ?>" style="display:none;">
      <form action="modelo/crearmatricula.php" method="POST">
      <label for="">Profesor</label>

      <input class="form-control" type="text" name="nombre"  value="<?php echo $ocurso->nombreprofesor; ?>">
      <label for="">cursos</label>
      <input class="form-control" type="text" name="curso"  value="<?php echo $ocurso->curso; ?>">
      <table class="table">

      <thead>
         <tr >
           
           <th>nombre</th>
           <th>apellido</th>
          
          
          </tr>



          <?php 
          
          require_once 'modelo/matricula.php';
          require_once 'modelo/conexiondb.php';
          $oconexion=new conectar();
          $oconexion=$oconexion->conexion();
          $omatricula=new matricula();
          $omatricula->idCurso=$_GET['id'];
          $consulta=$omatricula->consultarmatricula();
          foreach ($consulta as $registro){
            
             ?>
             <!-- en este codigo se trabaja html con php -->
             <tr class="table-primary">
               <td><?php echo $registro ['nombres'];?> </td>
               <td><?php echo $registro ['apellidos'];?> </td>
             
               
             </tr>
           <?php
     
          }
     
     
          ?>





         
         
   </thead>
</table>


                           <input type="submit" class="btn btn-success" value=" matricular">
                           <a href="modelo/liscursos.php" class="btn btn-outline-info">ATRAS</a>
                          <a href="sistemaE.html" class="btn btn-outline-info">INICIO</a>
                    </form>
    </div>
    
</body>
</html>