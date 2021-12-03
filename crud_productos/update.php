<?php

include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$categoria=$_POST['categoria'];
$nombre=$_POST['nombre'];
$color=$_POST['color'];
$precio=$_POST['precio'];

$sql="UPDATE productos SET  categoria='$categoria',nombre='$nombre',color='$color',precio='$precio' WHERE id_producto='$id_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: productos.php");
    }
?>