<?php
include("conexion.php");
$con=conectar();

$id_venta=$_POST['id_venta'];
$ganancias=$_POST['ganancias'];
$perdidas=$_POST['perdidas'];
$lugar_venta=$_POST['lugar_venta'];


$sql="INSERT INTO venta VALUES('$id_venta','$ganancias','$perdidas','$lugar_venta')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>