<?php      

require_once 'modelo/profesor.php';
    require_once 'modelo/conexiondb.php';
        

    $oprofesor = new profesor();
    $lisprofe = $oprofesor->listadoprofesor();

   
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/galbra2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></link>
    <script src="/galbra2/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

    
    <title>Document</title>
</head>
<body background="" no-repeat center center fixed;>
    
    
    
    
    
    <CENTER><h1 id="titulo">cursos</h1><BR><BR><BR>
  <form action="modelo/crearcurso.php" method="POST" id="colorr">


    
   
  
    <p>curso: <input type="text" name='curso' ></p>

    
      <select class="form-select" name="idProfesor" id="" required>
        <option value="" disabled selected required>PROFESORES</option>
        <?php  foreach($lisprofe as $registro){
          ?>
          <option value="<?php echo $registro['id'];?>"><?php echo $registro['nombre']." ".$registro['apellido'];?></option>

          <?php
        } ?>
        
    </select>
    <br>
    







   



                
       


    <p>fecha Inicio: <input type="date"   name='fechaInicio'></p>
    <p>fecha Fin: <input type="date"   name='fechaFin' ></p>
    
   
   

  <p>
  <input type="submit" value="Enviar">
          
  </p>

  </form>

  <a class="btn btn-info" href="/galbra2/sistemaE.html">inicio</a>
</CENTER>




  





</body>
</html>