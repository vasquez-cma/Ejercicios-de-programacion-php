<!-- Escribir un programa que pida al usuario que introduzca una frase en la consola y muestre por pantalla la frase invertida. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabra invertida</title>
</head>
<body>
    <form action="index.php" method="post">
        Introduce una frase <input type="text" name="frase">
        <button>submit</button>
    </form>

    <?php
        $frase = $_POST["frase"];
        echo "La frase que ingresaste es $frase y la frase invertida es " . strrev($frase);
    
    
    ?>
</body>
</html>