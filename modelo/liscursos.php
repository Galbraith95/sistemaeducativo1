<?php    

require_once 'profesor.php';
    require_once 'conexiondb.php';

    $oprofesor = new profesor();
    $lisprofe = $oprofesor->listadoprofesor();


?>




<html>

<head> 
  
<link href="/galbra2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></link>
<script src="/galbra2/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

</head>



<body>






<table class="table">

        <thead>

            <th >   

            <td> curso  </td>
            <td> id profesor  </td>
            <td> fecha incio </td>
            <td> fecha final  </td>
           
            <td><a class="btn btn-info" href="/galbra2/curso2.php">nuevo</a> </td>
            <td><a class="btn btn-info" href="/GALBRA2/sistemaE.html">inicio</a> </td>

            </th>



        </thead>

            <tbody>  
             
             <?php

             
             require_once 'curso.php';
             require_once 'conexiondb.php';
             //se instnacia el objeto conectar
             $oconexion=new conectar();
             //se establce conexion cn la base de datos
             $onexion=$oconexion->conexion();
             //se instancia el objeto estudiante
             $ocursos=new cursos();  
             
             $consulta=$ocursos->listadocursos();
             foreach($consulta as $registro){



                ?>
              
                

                <tr class="table-primary">
                
                <td style="border:red 1px solid"><?php echo $registro['curso']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['idProfesor']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['fechaInicio']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['fechaFin']; ?></td>
                
                <td><a href="/galbra2/modelo/editar.php?id=<?php echo $registro['id'];  ?>" class="btn btn-warning">editar</a> 
                <td><a href="/galbra2/modelo/eliminar.php?id=<?php echo $registro['id'];  ?>" class="btn btn-danger">eliminar</a>
                <td><a href="/galbra2/consultar1.php?id=<?php echo $registro['id'];  ?>" class="btn btn-danger">consultar</a>

              
                



                
                
                </tr>

                <?php
             }

                ?>
            
        
        
            </tbody>






</table>

</body>

</html>