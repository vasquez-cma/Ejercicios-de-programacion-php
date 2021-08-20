
<!-- Escribir un programa que pregunte al usuario por el número de horas trabajadas cada dia durante una semana y el coste por hora. Después debe mostrar por pantalla la paga que le corresponde. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de horas</title>
</head>
<body>
    <form action="index.php" method ="Post">
        <h1>¿Cual fue la cantidad de horas que trabaste cada día?</h1>
        <p>Valor de hora de trabajo: 3700</p>
        <input type="number" step="0.01" name="Lunes" placeholder="Lunes"> <br>
        <input type="number" step="0.01" name="Martes" placeholder="Martes"> <br>
        <input type="number" step="0.01" name="Miercoles" placeholder="Miercoles"> <br>
        <input type="number" step="0.01" name="Jueves" placeholder="Jueves"> <br>
        <input type="number" step="0.01" name="Viernes" placeholder="Viernes"> <br>
       <button>Submit</button>
    </form>

    <?php
      $lunes = $_POST["Lunes"];
      $martes = $_POST["Martes"];
      $miercoles = $_POST["Miercoles"];
      $jueves = $_POST["Jueves"];
      $viernes = $_POST["Viernes"];

     $totalHoras = $lunes + $martes + $miercoles + $jueves + $viernes;
     $valorHora = 3700;
     $totalSalario = $totalHoras * $valorHora;

     echo "El número de horas trabajadas esta semana fue de $totalHoras horas, asi que tu salario es de un total de: $$totalSalario";

    ?>
</body>
</html>