<!-- Escribir un programa que pregunte por consola por los productos de una cesta de la compra, separados por comas, y muestre por pantalla cada uno de los productos en una línea distinta. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos cesta de compra</title>

</head>
<body>
    <form action="index.php" method="post">
      Introduce productos de la lista de compra, separandolos por una coma  
      <input type="text" name="productos">
      <button>submit</button>
    </form>

    <?php
        $productos = $_POST["productos"];
        $productosAString = explode(",",$productos);        
        
        for ($i=0;$i<count($productosAString);$i++){
            echo "$productosAString[$i]<br>";
        }
    
    ?>

</body>
</html>