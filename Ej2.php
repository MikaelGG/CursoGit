<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ej 2</title>
</head>
<body>
    <fieldset><legend>Anexe sus 3 notas</legend>
    <form action="Ej2.php" method="post">
        <label >Nota 1</label><br>
        <input type="text" name="Nota1"><br><br>
        <label >Nota 2</label><br>
        <input type="text" name="Nota2"><br><br>
        <label >Nota 3</label><br>
        <input type="text" name="Nota3"><br><br>
        <input type="submit" name="Enviar">
    </form>
    </fieldset>
<?php
    @$Nota1=$_POST['Nota1'];
    @$Nota2=$_POST['Nota2'];
    @$Nota3=$_POST['Nota3'];
    $NotaFinal=($Nota1+$Nota2+$Nota3)/3;
    if(isset($_POST['Enviar'])){
        if($NotaFinal >= 7){
            echo "Aprobo";
        }
        else{
            echo "Reprobo";
        }
    }
?>
</body>
</html>