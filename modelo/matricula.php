

<?php

//para utilzar las funciones del archivo conexionbd.php

class matricula{  

//atributos para la tabla estudiante
public $id=0;
    public $idCurso="";
    public $curso="";
    public $nombreEstudiante="";
    public $apellido="";
    public $idEstudiante="";
    public $nombre="";


//esta funciona crea un nuevo registro

function nuevamatricula(){


  $oconexion=new conectar();
   $conexion=$oconexion->conexion();



  $existe=$this->consultarmatricula();
  if(sizeof($existe)!=0){
   $sql="UPDATE matricula SET eliminar=false";
    }else{
    $sql="INSERT INTO matricula (idCurso,curso,idEstudiante)
    VALUES ('$this->idCurso','$this->curso','$this->idEstudiante')";
    }
    $result=mysqli_query($conexion,$sql);
    return $result;



   
}


function consultarmatricula(){
  $oconexion=new conectar();
   $conexion =$oconexion->conexion();
   $sql = "SELECT e.nombres,e.apellidos  FROM matricula m inner join estudiante e on m.idEstudiante=e.id WHERE m.idCurso=$this->idCurso and m.eliminar=false";
   $result=mysqli_query($conexion,$sql);
   $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
   return $result;
  
}







function detallecurso(){
  $oconexion=new conectar();
  $conexion=$oconexion->conexion();
  $sql="SELECT c.curso , p.nombre, p.apellido FROM cursos c LEFT JOIN profesores p ON c.idProfesor=p.id WHERE c.id=$this->idCurso"; 
  $result=mysqli_query($conexion, $sql);
  $result= mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach($result as $registro){

   $this->curso=$registro['curso'];
   $this->nombreEstudiante=$registro['nombre'];
   $this->apellido=$registro['apellido'];
  }
}














function listmatricula(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="SELECT * FROM estudiante e INNER JOIN matricula m on e.id=m.idEstudiante WHERE m.idCurso=$this->idCurso";

    $result=mysqli_query($conexion,$sql);
    //para ejecutar la funcion se pone esto el fetch es para los arreglos
    return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

function consultacursos(){

    $oconexion=new conectar();
    $conexion=$oconexion->conexion();
    $sql="SELECT * FROM cursos WHERE id=$this->id";
    $result=mysqli_query($conexion,$sql);
    $result=mysqli_fetch_all($result,MYSQLI_ASSOC);

    foreach($result as $registro){
        $this->id=$registro['id'];
        $this->curso=$registro['curso'];
        $this->idProfesor=$registro['idProfesor'];
        $this->fechaInicio=$registro['fechaInicio'];
        $this->fechaFin=$registro['fechaFin'];


    }
    
}







     

 function actualizarmatricula(){
  //se instancia el objeto conectar
  $oconexion= new conectar();
  //se establece conexión con la base de datos
  $conexion=$oconexion->conexion();
  //consulta para actualizar el registro
  $sql="UPDATE matricula SET 
  idCurso='$this->idCurso',
  idEstudiante='$this->idEstudiante',
  NotaFinal='$this->NotaFinal' 
  Observaciones='$this->Observaciones' 
  WHERE id=$this->id";
  //se ejecuta la consulta
  $result=mysqli_query($conexion,$sql);
  return $result;
}




}

?>