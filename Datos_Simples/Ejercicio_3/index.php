<!-- Escribir un programa que pida al usuario su peso (en kg) y estatura (en metros), calcule el índice de masa corporal y lo almacene en una variable, y muestre por pantalla la frase Tu índice de masa corporal es <imc> donde <imc> es el índice de masa corporal calculado redondeado con dos decimales. -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masa Corporal</title>
</head>
<body>
    <form action="index.php" method="post">
        ¿Cual es tu peso en kg? <input type="number" name="pesoKg"><br>
        ¿Cual es tu estatura en metros? <input type="number" step="0.001" name="alturaMetros"><br>
        <button>submit</button>
    </form>
    <?php
        $pesoKg = $_POST["pesoKg"];
        $alturaMetros = $_POST["alturaMetros"];
        $imc = $pesoKg / ($alturaMetros * $alturaMetros);
        $imcFormat = number_format($imc,2);
        echo $imcFormat;
    ?>
</body>
</html>