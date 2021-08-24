<!-- Escribir un programa que pregunte el nombre del usuario en la consola y después de que el usuario lo introduzca muestre por pantalla <NOMBRE> tiene <n> letras, donde <NOMBRE> es el nombre de usuario en mayúsculas y <n> es el número de letras que tienen el nombre. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantidad de letras en nombre</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="nombre" placeholder="Dime tu nombre">
        <button>submit</button>
    </form>

    <?php
    
        $nombre = $_POST["nombre"];
        $cantidadDeLetras = strlen(rtrim($nombre));
        echo "El nombre $nombre tiene una cantidad de $cantidadDeLetras letras";
    
    ?>
</body>
</html>