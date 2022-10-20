<?php
    include "conexion.php";

    $sql = "DELETE FROM city WHERE ID=" . $_GET['id'] ;

    $cone->query($sql);
    header("Location: city.php");
?>