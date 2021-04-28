<?php


class conectar{

    //permiten la conexion con la base de datos
    //variable servidor donde esta ubicada la base de datos

    private $servidor="localhost";
    //variable base de datos es donde alacenas la base datos
    private $BaseDatos="sistemaeducativo";
    //por defecto
    private $usuario="root";
    private $contraseña="";


    function conexion(){
        //Se llama la calse mysqli para llamar  ala base datos y se agragan los paraetros para conectar a la base datos
        $conexion=mysqli_connect(


            $this ->servidor,
            $this ->usuario,
            $this ->contraseña,
            $this ->BaseDatos


        );

        //return deuelve un objeto a la conexion
        return $conexion;
    }





}

//se instamcia el objeto conectar()

// $oconexion = new conectar();

// if($oconexion ->conexion()){
//     echo"se establece conexion correctamente";
// }else{

//     echo" error en la conexion";
// }


?>