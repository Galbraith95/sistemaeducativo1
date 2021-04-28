<?php

//para utilzar las funciones del archivo conexionbd.php

class profesor{  

//atributos para la tabla estudiante
public $id=0;
public $nombre="";
public $apellido="";
public $direccion="";
public $telefono="";


//esta funciona crea un nuevo registro

function nuevoprofesor(){


    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="INSERT INTO profesores (nombre,apellido,direccion,telefono) VALUES ('$this->nombre','$this->apellido',
     '$this->direccion','$this->telefono')";

     $result=mysqli_query($conexion,$sql);
}


function listadoprofesor(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="SELECT * FROM profesores";

    $result=mysqli_query($conexion,$sql);
    //para ejecutar la funcion se pone esto el fetch es para los arreglos
    return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

function consultaprofesor(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="SELECT * FROM profesor WHERE id=$this->id";
    $result=mysqli_query($conexion,$sql);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);

    foreach($result as $registro){
        $this->id=$registro['id'];
        $this->nombre=$registro['nombre'];
        $this->apellido=$registro['apellido'];
        $this->direccion=$registro['direccion'];
        $this->telefono=$registro['telefono'];


    }
    
}

}

?>