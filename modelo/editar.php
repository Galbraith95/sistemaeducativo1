<?php

require_once 'estudiante.php';
require_once 'conexiondb.php';

$oestudiante=new estudiante();
$oestudiante->id=$_GET['id'];
$registro=$oestudiante->consultaestudiante();


?>

<html> 

<head>

<link href="/galbra2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></link>
<script src="/galbra2/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</head>



<body>

<form action="editarEstudiante.php" method="get">
<div class="container">
    
    <div class="row"> 
        


      
        

        <div class="col col-6"> 
            
            <label for="">tipo documento</label>
            <input class="form-control" type="text" value="<?php echo $oestudiante->tipodocumento; ?>" > </input>
            </div>


            <div class="col col-6">
            
            <label for="">documento</label>
            <input class="form-control" type="text" value="<?php echo $oestudiante->documento; ?>"> </input>
            
          </div>

            
          <div class="col col-6">
            
            <label for="">nombre</label>
            <input class="form-control" type="text"  value="<?php echo $oestudiante->nombre; ?>"> </input>
            
          </div>
          


          
          <div class="col col-6"> 
            
            <label for="">apellido</label>
            <input class="form-control" type="text" value="<?php echo $oestudiante->apellido; ?>"> </input>
            
          </div>



          <div class="col col-6">
            
            <label for="">direccion</label>
            <input class="form-control" type="text" value="<?php echo $oestudiante->direccion; ?>"> </input>
            
          </div>




          <div class="col col-6">
            
            <label for="">telefono</label>
            <input class="form-control" type="text" value="<?php echo $oestudiante->telefono; ?>"> </input>
            
          </div>












    </div>



</div>
</form>
</body>



</html>