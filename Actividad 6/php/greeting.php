<?php
/*
Autor:Alondra Ximena Gonzalez Romero
Descripcion:Componente los datos de formulario
Fecha:12 de Octubre 2022
*/

//Obtener nombre del formulario


$nombre = $_GET['name'];
$edad = $_GET['edad'];
$telefono = $_GET['numero'];

echo " <h1> Hola $nombre </h1>";

echo " <h1>Ahora mismo tienes $edad</h1>";

echo "Tu Numero es $telefono ";

echo"<br>";

echo "<a href='../html/greetingFrorm.html'>Regresar</a>";
?>