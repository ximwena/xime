<!-- 
    Descripcion: Tablas
    Autor: Alondra Ximena Gonzalez Romero
    Fecha: 12/10/2022
 -->
 <html>
    <head>
        <title>Tabla de Multiplicar</title>
        <link rel="stylesheet" href="../css/Estylos.css">
    </head>
    <body>   
        <?php
        $numero=intval($_POST['numero']);
        if ($numero>0){         
        echo "<h1>Tabla del "; 
        echo $numero;
        echo "        </h1>
              <ul>";
            
            for($i=1;$i<=10;$i++){
              if ($i%2==0){ 
                echo "<li><span style='color:white'>$numero x $i = ";
                echo $numero*$i;
                echo "</span></li>";                            
              }   
              else{
                echo "<li>$numero x $i = ";
                echo $numero*$i;
                echo "</li>";
              } 
            }                       
        echo "</ul>";
        }
        else{
            echo "<p>El valor introducido ";
            echo $_POST['numero'];
            echo " no es correcto, debería haber sido un número entero positivo.</p>";
            echo "<p>Variable numero= $numero</p>";
            echo "<p><a href='tabla.html'>Pruebe de nuevo</a></p>";
        }
        echo "<a href='../html/Tablas.html'>Regresar</a>";
        ?>
    </body>
</html>