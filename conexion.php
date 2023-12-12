<?php
//Parámetros para conectar a la base de datos
$servidor="localhost";
$database="clientes";
$usuario="root";
$contrasena="";

//Se crea la conexión
$connection = mysqli_connect($servidor,$usuario,$contrasena,$database);

//Se verifica la conexión
if(!$connection){
    die("Conexión fallida: ".mysqli_connect_error());

}

?>