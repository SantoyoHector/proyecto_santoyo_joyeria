<?php

include("conexion.php");
$con=conectar();

$id_venta=$_POST['id_venta'];
$ganancias=$_POST['ganancias'];
$perdidas=$_POST['perdidas'];
$lugar_venta=$_POST['lugar_venta'];


$sql="UPDATE productos SET  ganancias='$ganancias',perdidas='$perdidas',lugar_venta='$lugar_venta' WHERE id_venta='$id_venta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>