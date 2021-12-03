<?php

include("conexion.php");
$con=conectar();

$id_venta=$_GET['id'];

$sql="DELETE FROM venta  WHERE id_venta='$id_venta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>