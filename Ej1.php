<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ej 1</title>
</head>
<body>
    <fieldset><legend>Cuenta de banco</legend>
        <form action="Ej1.php" method="post">
            <label>Cantidad Actual</label><br><br>
            <input type="number" name="CantAct">
            <input type="submit" name="Enviar">
        </form>
    </fieldset>

<?php
    $Cantidad=$_POST['CantAct'];
    $Intereses=$Cantidad*0.03;
    $CantTotal=$Cantidad + $Intereses;   

    if(isset($_POST['Enviar'])){

        if($Intereses > 7000){
            echo "Como los intereses son iguales o exceden a 7000. Su monto actual queda en: " . $CantTotal;            
        }
        else{
            echo "Su monto queda en: " . $Cantidad;
        }
    }
?>
</body>
</html>