<html lang="es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 26/09/2022
    Descripcion: "Factorial archivo 2"
-->
	<head>
		<title>actividad para obtener factorial</title>
	</head>
	<body>
            <h1>Factorial</h1>
		<p>
			<?php
                        if ( isset( $_POST['number'] )) //verifica que el campo no venga vacío
                        {
                              $number = $_POST['number'];
                              $counter = 1;
                              $fact = 1;
                              while ($counter <= $number)
                              {
                                    $fact = $fact * $counter;// se puede usar: $factorial *= $counter;
                                    $counter++;
                              }
                              echo "<br>El factorial es: $fact<br>";
                        } 
			?>
		</p>
	</body>
</html>