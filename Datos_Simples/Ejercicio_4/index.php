<!-- Una juguetería tiene mucho éxito en dos de sus productos: payasos y muñecas. Suele hacer venta por correo y la empresa de logística les cobra por peso de cada paquete así que deben calcular el peso de los payasos y muñecas que saldrán en cada paquete a demanda. Cada payaso pesa 112 g y cada muñeca 75 g. Escribir un programa que lea el número de payasos y muñecas vendidos en el último pedido y calcule el peso total del paquete que será enviado. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso del paquete</title>
</head>
<body>
    <form action="index.php" method="post">
        Número de payasos vendidos<input type="number" name="payasos">
        Número de muñecas vendidos<input type="number" name="muñecas">
        <button>submit</button>
    </form>

    <?php
        $payasosVendidos = $_POST["payasos"];
        $muñecasVendidas = $_POST["muñecas"];

        $pesoPayasos = 112;
        $pesoMuñecas = 75;

        $totalPesoPayaso = $payasosVendidos * $pesoPayasos;
        $totalPesoMuñeca = $pesoMuñecas * $muñecasVendidas;

        $totalPeso = $totalPesoMuñeca + $totalPesoPayaso;

        echo "El total de payasos vendidos en el ultimo pedido fue de $payasosVendidos y de muñecas fue de $muñecasVendidas y el total del peso del paquete es de $totalPeso g";

    ?>
</body>
</html>