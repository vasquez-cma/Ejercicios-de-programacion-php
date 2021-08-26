<!-- Escribir un programa que pregunte al usuario la fecha de su nacimiento en formato dd/mm/aaaa y muestra por pantalla, el día, el mes y el año. Adaptar el programa anterior para que también funcione cuando el día o el mes se introduzcan con un solo carácter. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha de nacimiento</title>
</head>
<body>
    <form action="index.php" method="post">
      Ingresa tu fecha de nacimiento en formato dd/mm/aaaa: <input type="text" name="fecha">
        <button>submit</button>
    </form>
    <?php
        $fechaNacimiento = $_POST["fecha"];
        $fechaAString = explode("/",$fechaNacimiento);
        list($dia,$mes,$año) = $fechaAString;

        echo "Tu fecha de nacimiento fue el dia $dia del mes $mes del año $año";
    
    ?>
</body>
</html>