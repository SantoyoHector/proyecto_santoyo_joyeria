<?php

include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE cliente SET  Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo',Telefono='$Telefono' WHERE id_cliente='$id_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>