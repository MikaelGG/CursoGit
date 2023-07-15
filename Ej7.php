<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 7</title>
</head>
<body>
    <fieldset><legend>Calcule su quema de calorias</legend>
        <form action="Ej7.php" method="post">
            <label for="">Minutos durmiendo</label><br>
            <input type="text" name="durmiendo"><br><br>
            <label for="">Minutos descansando</label><br>
            <input type="text" name="descansando"><br><br>
            <input type="submit" name="Calcular"><br>
        </form>
    </fieldset>  
<?php
    @$dormir=$_POST['durmiendo'];
    @$descansar=$_POST['descansando'];
    $numdor=1.08;
    $numdes=1.66;
    $calcdor=$dormir * $numdor;
    $calcdes=$descansar * $numdes;

    if (isset($_POST['Calcular'])) {
        if ($dormir > 0) {
            echo "Calorias quemadas durmiendo: " . $calcdor;
        }
        if ($descansar > 0) {
            echo "Calorias quemadas descansando: " . $calcdes;
        }
    }
?>  
</body>
</html>