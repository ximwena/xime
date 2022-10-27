<!-- 
    Descripcion:Cambia color
    Autor:Alondra Ximena Gonzalez Romero
    fecha:05/10/2022
 -->
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>
<body>
    <h1 id="Fernando">  Soy un simple pagina!!!</h1>
    <button id="btnrojo" style="background-color:red;" onmouseover="rojo()">Red</button>
    <button id="btnazul" style="background-color: Blue;" onmouseover="blue()">Blue</button>
    <button id="btnverde" style="background-color: green;" onmouseover="green()">Green</button>
    <script>
        function rojo(){
            //alert("Outchh Soy Rojo")
            document.getElementById("Fernando").style.backgroundColor="Red";
        }
        function blue(){
            //alert("Outchh Soy Azul")
            document.getElementById("Fernando").style.backgroundColor="Blue";
        }
        function green(){
           // alert("Outchh Soy verde")
           document.getElementById("Fernando").style.backgroundColor="Green"
        }
    </script>
</body>
</html>