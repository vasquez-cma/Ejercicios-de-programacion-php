<!-- Escribir un programa que pregunte al usuario una cantidad a invertir, el interés anual y el número de años, y muestre por pantalla el capital obtenido en la inversión. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversion</title>
</head>
<body>
    <form action="index.php" method="Post"> 
        Cantidad a invertir :  <input type="number" step="0.001" name="Inversion"><br>
        Interes Anual : <input type="number" step="0.001" name="Interes">% <br>
        Numero de años a invertir : <input type="number"  name="Años"> <br>
        <button>submit</button>

    </form>

    <?php
        $inversion = $_POST["Inversion"];
        $interes = $_POST["Interes"];
        $añosInversion = $_POST["Años"]; 
        
        $interesAnual = ($inversion * $interes / 100)*12;
        $totalInversion = $interesAnual * $añosInversion + $inversion;
        echo "El total del capital obtenido sumando la inversion inicial de $$inversion mas los $añosInversion anbos de inversion a un interes anual del $interes% nos da un total de $$totalInversion";
    
    ?>
</body>
</html>