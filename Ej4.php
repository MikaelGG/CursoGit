<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ej 4</title>
</head>
<body>
    <fieldset><legend>Horas de trabajo</legend>
        <form action="Ej4.php" method="post">
            <label>Horas</label><br>
            <input type="number" name="hora">
            <input type="submit" name="Enviar">
        </form>
    </fieldset>
<?php
    @$horas=$_POST['hora'];
    $hast40=$horas * 16;
    $mas40=((($horas - 40) * 20) + (40 * 16));
    if(isset($_POST['Enviar'])){
        if($horas <= 40){
            echo "Su salario semanal es de " . $hast40;
        }
        else{
            echo "Su salario semanal es de " . $mas40;
        }
    }
?>
</body>
</html>