<!-- Una panadería vende barras de pan a 3.49€ cada una. El pan que no es el día tiene un descuento del 60%. Escribir un programa que comience leyendo el número de barras vendidas que no son del día. Después el programa debe mostrar el precio habitual de una barra de pan, el descuento que se le hace por no ser fresca y el coste final total. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panaderia</title>
</head>
<body>
    <form action="index.php" method="post">
       ¿Cúal fue la cantidad de panes venidos que no son del día? <input type="number" name="panesVendidos">
       <button>submit</button>
    </form>

    <?php
        $panVendido = $_POST["panesVendidos"];
        $valorBarraPan = 3.49;
        $valorBarraNoDia =   $valorBarraPan - (($valorBarraPan*60) / 100);
        $valorTotalPanVendido = $panVendido * $valorBarraNoDia;
        
        echo "El valor de la barra de pan esta por un total de $$valorBarraPan y la cantidad de barras de pan que se vendieron y no son del dia son $panVendido, con estos panes hay un descuento del 60% cada uno, esto quiere decir que la cantidad total a pagar de los panes que se compraron y no son del dia es de $" . number_format($valorTotalPanVendido,2);
    
    ?>
</body>
</html>