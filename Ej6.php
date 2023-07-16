<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 6</title>
    <script src="ensayo.js"></script>
</head>
<body>
    <fieldset><legend>Ascendencia de 2 numeros</legend>
        <form action="Ej6.php" method="post">
            <label for="">Numero 1</label><br>
            <input type="number" name="num1"><br><br>
            <label for="">Numero 2</label><br>
            <input type="number" name="num2"><br><br>
            <input type="submit" name="Calcular">
            <input type="submit" OnClick="saludar ()" value="Dame ya">
        </form>
    </fieldset>
<?php
    $numero1=$_POST['num1'];
    $numero2=$_POST['num2'];

    if(isset($_POST['Calcular'])){
        if($numero1 < $numero2){
            echo  $numero1 .", " . $numero2;
        }
        else{
            echo  $numero2 .", " . $numero1;
        }
    }
?>
</body>
</html>