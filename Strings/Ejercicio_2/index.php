<!-- Escribir un programa que pregunte el nombre completo del usuario en la consola y después muestre por pantalla el nombre completo del usuario tres veces, una con todas las letras minúsculas, otra con todas las letras mayúsculas y otra solo con la primera letra del nombre y de los apellidos en mayúscula. El usuario puede introducir su nombre combinando mayúsculas y minúsculas como quiera. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre usuario</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="nombre" placeholder = "Dame tu nombre completo">
        <button>submit</button>
    </form>    

    <?php
        $nombre = $_POST["nombre"];
        echo strtolower($nombre) . "<br>";
        echo strtoupper($nombre) . "<br>";
        echo ucwords(strtolower($nombre)). "<br>";
    ?>
</body>
</html>