<?php
$cone =new mysqli("localhost","root","","world");
if($cone->connect_errno)
{
    echo "fallo la conexion ". $cone->conect_error;
} 
 ?>
