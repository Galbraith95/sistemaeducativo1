<html>
     <head>
     <link href="/notasestudiante/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></link>
        <script src="/notasestudiante/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      
      </head>

  <table class="table">
    
  
   <thead>
         <tr >
           <th>curso</th>
           <th>estudiantes</th>
           <th>nota final</th>
           <th>observaciones</th>
           <th><a class="btn btn-info" href="matricula2.php"> nueva matricula</a></th>
          </tr>
   </thead>

   <body>
   <?php
     require_once 'matriculas2.php';
     require_once 'conexiondb';
     $oconexion=new conectar();
     $oconexion=$oconexion->conexion();
     $oCurso=new matricula();
     $consulta=$oCurso->listmatricula();
     foreach ($consulta as $registro){
       
        ?>
        <!-- en este codigo se trabaja html con php -->
        <tr class="table-primary">
          <td><?php echo $registro ['idCurso'];?> </td>
          <td><?php echo $registro ['idEstudiante'];?> </td>
          <td><?php echo $registro ['NotaFinal'];?> </td>
          <td><?php echo $registro ['Observaciones'];?> </td>
          <th>
            <a href="/NOTASESTUDIANTE/formularioeditarprofesor.php?id=<?php echo $registro['id'];?>" class="btn btn-warning" href="estudiante.html"> editar</a>
            <a href="/NOTASESTUDIANTE/eliminarprofesor.php?id=<?php echo $registro['id'];?>" class="btn btn-danger" href="estudiante.html"> eliminar</a>

          </th>
        </tr>
      <?php

     }


     ?>


    </body>
 </table>
</html>