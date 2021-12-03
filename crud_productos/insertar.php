<?php
include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$categoria=$_POST['categoria'];
$nombre=$_POST['nombre'];
$color=$_POST['color'];
$precio=$_POST['precio'];


$sql="INSERT INTO productos VALUES('$id_productos','$categoria','$nombre','$color','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: productos.php");
    
}else {
}
?>