<?php

//para utilzar las funciones del archivo conexionbd.php

class estudiante{  

//atributos para la tabla estudiante
public $id=0;
public $tipodocumento="";
public $documento="";
public $nombre="";
public $apellido="";
public $direccion="";
public $telefono="";


//esta funciona crea un nuevo registro

function nuevoestudiante(){


    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="INSERT INTO estudiante (tipoDocumento,documentoIdentidad,nombres,apellidos,direccion,telefono) VALUES ('$this->tipodocumento','$this->documento','$this->nombre','$this->apellido',
     '$this->direccion','$this->telefono')";

     $result=mysqli_query($conexion,$sql);
}


function listadoestudiante(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="SELECT * FROM estudiante";

    $result=mysqli_query($conexion,$sql);
    //para ejecutar la funcion se pone esto el fetch es para los arreglos
    return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

function consultaestudiante(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="SELECT * FROM estudiante WHERE id=$this->id";
    $result=mysqli_query($conexion,$sql);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);

    foreach($result as $registro){
        $this->id=$registro['id'];
        $this->tipodocumento=$registro['tipoDocumento'];
        $this->documento=$registro['documentoIdentidad'];
        $this->nombre=$registro['nombres'];
        $this->apellido=$registro['apellidos'];
        $this->direccion=$registro['direccion'];
        $this->telefono=$registro['telefono'];


    }
    
}

}

?>