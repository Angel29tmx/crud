<?php

function conectar(){
    $server="localhost";
    $user="id22005288_root";
    $pass="Franck129#";
   
    $bd="id22005288_programacionweb";
        
    $con=mysqli_connect($server, $user, $pass, $bd) or die ("error de conexion".mysqli_error());

    return $con;
}
?>