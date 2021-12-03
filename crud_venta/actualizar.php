<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM venta WHERE id_venta='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_venta" value="<?php echo $row['id_venta']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="ganancias" placeholder="ganancias" value="<?php echo $row['ganancias']  ?>">
                                <input type="text" class="form-control mb-3" name="perdidas" placeholder="perdidas" value="<?php echo $row['perdidas']  ?>">
                                <input type="text" class="form-control mb-3" name="lugar_venta" placeholder="lugar_venta" value="<?php echo $row['lugar_venta']  ?>">
                           

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>