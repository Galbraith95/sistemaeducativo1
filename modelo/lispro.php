
<html>

<head> 
  
<link href="/galbra2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></link>
<script src="/galbra2/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

</head>



<body>






<table class="table">

        <thead>

            <th >   

    
            <td> nombre  </td>
            <td>  apellido </td>
            <td>  direccion </td>
            <td> telefono  </td>
            <td><a class="btn btn-info" href="/GALBRA2/profesor.html">nuevo</a> </td>
            <td><a class="btn btn-info" href="/GALBRA2/sistemaE.html">inicio</a> </td>

            </th>



        </thead>

            <tbody>  
             
             <?php

             
             require_once 'profesor.php';
             require_once 'conexiondb.php';
             
             $oconexion=new conectar();
             
             $onexion=$oconexion->conexion();
             
             $oprofesor=new profesor();  
             
             $consulta=$oprofesor->listadoprofesor();
             foreach($consulta as $registro){



                ?>
              
                

                <tr class="table-primary">
                
                
                <td style="border:red 1px solid"><?php echo $registro['nombre']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['apellido']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['direccion']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['telefono']; ?></td>
                <td><a href="/galbra2/modelo/editar.php?id=<?php echo $registro['id'];  ?>" class="btn btn-warning">editar</a> 
                <td><a href="/galbra2/modelo/eliminar.php?id=<?php echo $registro['id'];  ?>" class="btn btn-danger">eliminar</a>
               



                
                
                </tr>

                <?php
             }

                ?>
            
        
        
            </tbody>






</table>

</body>

</html>