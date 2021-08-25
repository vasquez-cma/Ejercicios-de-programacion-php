<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Ingresa el precio de un producto con euros y centimos <input type="text" name="precio">
        <button>submit</button>
    </form>
    <?php
        $precio = $_POST["precio"];
        $precioDividido = explode(".",$precio);
        list($euros,$centimos) = $precioDividido;

        echo "El precio del producto que ingresaste es de $euros euros con $centimos centimos";
    ?>
</body>
</html>