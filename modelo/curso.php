<?php

//para utilzar las funciones del archivo conexionbd.php

class cursos{  

//atributos para la tabla estudiante
public $id=0;
public $curso="";
public $idProfesor="";
public $nombreprofesor="";
public $fechaInicio="";
public $fechaFin="";



//esta funciona crea un nuevo registro

function nuevocurso(){


    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="INSERT INTO cursos (curso,idProfesor,fechaInicio,fechaFin) VALUES ('$this->curso','$this->idProfesor',
     '$this->fechaInicio','$this->fechaFin')";

     $result=mysqli_query($conexion,$sql);
}


function listadocursos(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="SELECT * FROM cursos";

    $result=mysqli_query($conexion,$sql);
    //para ejecutar la funcion se pone esto el fetch es para los arreglos
    return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

function consultacursos(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql = "SELECT c.id,c.curso,c.fechaInicio,c.fechaFin,p.nombre,p.apellido,c.idProfesor  FROM cursos c inner join profesores p on c.idProfesor=p.id WHERE c.id=$this->id and c.eliminar=false";
    $result=mysqli_query($conexion,$sql);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);

    foreach($result as $registro){
        $this->id=$registro['id'];
        $this->curso=$registro['curso'];
        $this->idProfesor=$registro['idProfesor'];
        $this->nombreprofesor=$registro['nombre']." ".$registro['apellido'];
        $this->fechaInicio=$registro['fechaInicio'];
        $this->fechaFin=$registro['fechaFin'];


    }
    
}

}

?>