<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ej 3</title>
</head>
<body>
    <fieldset><legend>Precio del producto</legend>
        <form action="Ej3.php" method="post">
            <label>Precio</label><br>
            <input type="number" name="cant"><br><br>
            <input type="submit" name="Enviar"><br>
        </form>
    </fieldset>
<?php
    @$Cantidad=$_POST['cant'];
    $Descuento= $Cantidad * 0.2;
    $CantT= $Cantidad - $Descuento;

    if(isset($_POST['cant'])){
        if($Cantidad > 1000){
            echo "Se aplica descuento del 20%: " . $CantT;
        }
        else{
            echo "No se aplica descuento " . $Cantidad;
        }
    }
?>
</body>
</html>