<!-- Escribir un programa que pregunte el correo electrónico del usuario en la consola y muestre por pantalla otro correo electrónico con el mismo nombre (la parte delante de la arroba @) pero con dominio ceu.es. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio dominio</title>
</head>
<body>
    <form action="index.php" method="post">
       Ingresa tu correo electronico<input type="email" name="correo">
       <button>submit</button>
    </form>
    <?php
        $correoUsuario = $_POST["correo"];
        $cambioAString = explode("@",$correoUsuario);
        list($nombre,$dominio) = $cambioAString;
        $dominio = "@ceu.es";
        $nuevoDominio = $nombre . $dominio;
        echo "El correo que ingresaste es $correoUsuario pero con el nuevo dominio queda así: $nuevoDominio";
    
    ?>
</body>
</html>