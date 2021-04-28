
<html>

<head> 
  
<link href="/galbra2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></link>
<script src="/galbra2/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

</head>



<body>






<table class="table">

        <thead>

            <th >   

            <td> tipoDocumento  </td>
            <td> documento  </td>
            <td> nombre  </td>
            <td>  apellido </td>
            <td>  direccion </td>
            <td> telefono  </td>
            <td><a class="btn btn-info" href="/GALBRA2/index.html">nuevo</a> </td>
            <td><a class="btn btn-info" href="/GALBRA2/sistemaE.html">inicio</a> </td>

            </th>



        </thead>

            <tbody>  
             
             <?php

             
             require_once 'estudiante.php';
             require_once 'conexiondb.php';
             //se instnacia el objeto conectar
             $oconexion=new conectar();
             //se establce conexion cn la base de datos
             $onexion=$oconexion->conexion();
             //se instancia el objeto estudiante
             $oestudiante=new estudiante();  
             
             $consulta=$oestudiante->listadoestudiante();
             foreach($consulta as $registro){



                ?>
              
                

                <tr class="table-primary">
                
                <td style="border:red 1px solid"><?php echo $registro['tipoDocumento']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['documentoIdentidad']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['nombres']; ?></td>
                <td style="border:red 1px solid"><?php echo $registro['apellidos']; ?></td>
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