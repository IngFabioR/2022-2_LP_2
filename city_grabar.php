<?php
    include "conexion.php";

    $sql = "INSERT INTO city(ID,Name,CountryCode,
    District,Population) 
    VALUES (null,'" . $_POST['nombre_ciudad'] . "','" . 
    $_POST['codigopais'] . "','" . 
    $_POST['nombre_distrito'] . "'," . 
    $_POST['poblacion'] . ");" ;

    $cone->query($sql);
    header("Location: city.php";
?>