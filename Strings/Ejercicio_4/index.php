<!-- Los teléfonos de una empresa tienen el siguiente formato prefijo-número-extension donde el prefijo es el código del país +34, y la extensión tiene dos dígitos (por ejemplo +34-913724710-56). Escribir un programa que pregunte por un número de teléfono con este formato y muestre por pantalla el número de teléfono sin el prefijo y la extensión. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index.php" method="post">
      Escribe un numero de telefono incluido prefijo y extension, ejemplo +34-913724710-56 <br>
      +<input type="number" name="numero">
      <button>submit</button>

    </form>

    <?php
    
    $numero = $_POST["numero"];
    $numeroAStr = strval($numero);
    echo "El numero que ingresaste es $numero y el número que ingresaste sin prefijo ni extension es " . substr($numeroAStr,2,-2);

    ?>
</body>
</html>