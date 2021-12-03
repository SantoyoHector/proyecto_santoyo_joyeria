<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];


$sql="INSERT INTO empleado VALUES('$id_empleado','$Nombre','$Apellido','$Correo','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>