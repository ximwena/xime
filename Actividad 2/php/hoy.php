<!-- 
    Decripcion:Fecha
    Autor:Alondra Ximena Gonzalez Romero
    Fecha:26/10/2022
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Fecha</title>
</head>

<body >
<div class="titulo2">
    <?php
    echo"<center>";
    echo"<h1>";
    echo"Fecha De hoy:";
    echo"<hr>";
    echo"Estudiante:";
    echo"Alondra Ximena Gonzalez Romero";
    echo"<br>";
    echo"Carrera y Grado:";
    echo"Programacion 5";
    echo"<br>";
    echo"Asignatura:";
    echo"Desarrolla aplicaciones Web con conexión a base de datos";
    echo"<br>";
    echo"Fecha De hoy:";
      echo date('d-m-y');
      echo"</h1>";
      echo"</center>";
    ?>
    </div>
</body>

</html>