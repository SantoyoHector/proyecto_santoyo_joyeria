<?php
include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];


$sql="INSERT INTO cliente VALUES('$id_cliente','$Nombre','$Apellido','$Correo','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>