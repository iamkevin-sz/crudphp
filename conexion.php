<?php

// conectar a mysql

$conectar = mysqli_connect("localhost", "root", "", "crud");

//probar conexion 

if(mysqli_connect_errno()){
    echo "fallo al conectarse a mysql" .mysqli_connect_errno();
};

?>
