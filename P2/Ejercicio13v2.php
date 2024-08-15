<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 27/09/2022
    Descripcion: "versión 2 de ejercicio 13"
-->
	<head>
		<title></title>
	</head>
	<body>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>¿Cu&aacute;ntas veces?</p>
            <input type="text" name="number">
            <input type="submit" value="Enviar">
            </form>
            <P>
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
            </P>
	</body>
</html>