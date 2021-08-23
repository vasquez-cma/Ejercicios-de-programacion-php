<!-- Escribir un programa que pregunte el nombre del usuario en la consola y un número entero e imprima por pantalla en líneas distintas el nombre del usuario tantas veces como el número introducido. -->


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
        <input type="text" name="nombre" placeholder="¿Cúal es tu nombre?">
        <input type="number" name="numero" placeholder="Dame un número entero">
        <button>submit</button>
    </form>
    <?php
        $nombre = $_POST["nombre"];
        $numero = $_POST["numero"];

        for($i=1; $i<= $numero;$i++){
            echo "$nombre <br>";
        }
    
    ?>
</body>
</html>