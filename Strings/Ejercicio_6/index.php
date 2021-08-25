<!-- Escribir un programa que pida al usuario que introduzca una frase en la consola y una vocal, y después muestre por pantalla la misma frase pero con la vocal introducida en mayúscula. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frase con vocal en mayuscula</title>
</head>
<body>
    <form action="index.php" method="post">
       Introduce una frase y al final una vocal y esta vocal sera remplazada por la misma vocal en mayúscula <input type="text" name="frase">
       <button>submit</button>
    </form>

    <?php
        $frase = $_POST["frase"];
        $fraseModificada = substr($frase,0,-1);
        $vocalFrase = $frase[-1];
        $fraseRemplazo = str_replace($frase[-1], strtoupper($vocalFrase),$vocalFrase);
        echo "La frase que ingresaste es $frase y la frase que ingreaste con la modificacion es " . $fraseModificada . $fraseRemplazo; 
    ?>
</body>
</html>