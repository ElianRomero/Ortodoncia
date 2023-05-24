<?php
$conexion=mysqli_connect("localhost","root","","mydb");

if (!$conexion)
{
    echo "ERROR";
}
else {
    echo "CONECTADO";
}

?>