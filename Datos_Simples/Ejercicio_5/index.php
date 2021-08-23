<!-- Imagina que acabas de abrir una nueva cuenta de ahorros que te ofrece el 4% de interés al año. Estos ahorros debido a intereses, que no se cobran hasta finales de año, se te añaden al balance final de tu cuenta de ahorros. Escribir un programa que comience leyendo la cantidad de dinero depositada en la cuenta de ahorros, introducida por el usuario. Después el programa debe calcular y mostrar por pantalla la cantidad de ahorros tras el primer, segundo y tercer años. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta ahorros</title>
</head>
<body>
    <form action="index.php" method="post">
        Cual es la cantidad que vas a depositar: <input type="number" name="depositado" step="0.001">
        <button>submit</button>
    </form>
    <?php
        $valorDepositado = $_POST["depositado"];
        $interesAnual = 4;

        $valorConInteres = ($valorDepositado * $interesAnual) / 100;
        $ahorroPrimerAño = $valorDepositado + $valorConInteres;
        $ahorroSegundoAño = $ahorroPrimerAño + (($ahorroPrimerAño * $interesAnual)/100);  
        $ahorroTercerAño = $ahorroSegundoAño + (($ahorroSegundoAño * $interesAnual)/100);              
        echo "El valor que ingresaste como deposito para ahorrar es de $$valorDepositado.
        Con un interes del 4% en el primer año ahorrado tu saldo total será de $$ahorroPrimerAño, el segundo año de $$ahorroSegundoAño y para el tercero será de $". number_format($ahorroTercerAño,0);
    
    ?>
</body>
</html>