<html>
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 23/09/2022
    Descripcion: "Formularios archivo 2"
-->
	<head>
		<title>actividad para solicitar datos</title>
	</head>
	<body>
		<p>
			<?php
                  if ( isset( $_POST['number'] )) {
				$number = $_POST['number'];
				$counter = 1;
				while ($counter <= $number) {
				echo "Los bucles son faciles!<br>\n";
				$counter++;
				}
				echo "Se acabo.\n";
				} 
			?>
		</p>
	</body>
</html>
<!-- echo ""; 
isset verifica que el campo no llegue vacío
para llevar el dato $_post['nombre del campo']; no hay problema si se usa el mismo nombre que lo que se lleva
que pasaría si en un navegador se ejecuta este codigo no hace nada.
-->