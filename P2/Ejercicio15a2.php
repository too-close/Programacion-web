<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 28/09/2022
    Descripcion: "Ejercicio 15 archivo 2"
-->
<head>
      <title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
      <link rel = "stylesheet" href="style.css">
</head>
      <body>
            <h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO</h1><br>
            <br>
            <h1>analisis de formularios (analisis.php)</h1>
            <p>
                  <?php
                  if(($_POST['gender']) && ($_POST['lastname']) )
                  {
                        if($_POST['gender'] == 1)
                        {
                              echo "Hola Sr. ";
                        }
                        if($_POST['gender'] == 2) 
                        {
                              echo "Hola Sra. ";
                        }
                              if($_POST['gender'] == 3) 
                        {
                              echo "Hola Srita. "; 
                        }
                        if($_POST['gender'] == 4) 
                        {
                              echo "Hola Joven. ";
                        }
                              echo "<b>{$_POST['lastname']}</b>, encantado de saludarte.";
                  }
                        else
                        {
                              echo "no se puede no";
                        }
                  ?>
            </p>
      </body>
</html> 


