<?php

include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE empleado SET  Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo',Telefono='$Telefono' WHERE id_empleado='$id_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>