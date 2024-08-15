<html lang="es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 26/09/2022
    Descripcion: "tablas multiplicar archivo 2"
-->
	<head>
		<title>actividad para obtener tablas multiplicar</title>
	</head>
	<body>
            <h1>tablas multiplicar</h1>
		<p>
			<?php
                        if ( isset( $_POST['number']) && ($_POST['number'] > 0) && ($_POST['number'] <= 10) )//verifica que el campo no venga vacío
                        {
                              $number = $_POST['number'];
                              $num = array ();
                              echo "<table border = 1>";
                              echo "<tr>";
                                for ($i = 0; $i < 10 ; $i++)
                                 {
                                      echo "<th>","$number*",$i+1,"</th>";
                                }
                             echo "</tr>";
                        for ($i = 1; $i <= 10 ; $i++)
                        {
                            $num[$i] = $number * $i; 
                         } 
                         echo "<tr>";
                        for ($i = 1; $i <= 10 ; $i++)
                        {
                          echo "<td>",$num[$i],"</td>";
                        }
                         echo "</tr>";
                         echo "</table>";
                        } 
                        else
                        {
                            echo "N&uacute;mero no permitido!!!";
                        }
			?>
		</p>
	</body>
</html>