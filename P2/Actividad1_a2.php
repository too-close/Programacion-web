<html lang="es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 28/09/2022
    Descripcion: "Actividad 1 archivo 2"
-->
	<head>
		<title>actividad para obtener factorial</title>
            <link rel = "stylesheet" href = "style.css">
	</head>
	<body>
            <h1>Actividad 1</h1>
		<p>
			<?php
                        if ((isset( $_POST['user'])) && (isset ($_POST['password']))) //verifica que el campo no venga vacío
                        {
                              $user = $_POST['user'];
                              $pass = $_POST['password'];
                              if(($user == "admin") && ($pass == "12345admin"))
                              {
                                    echo "Bienvenido al sitio";
                              }
                              else
                              {
                                    echo "usuario o password incorrecto";
                              }
                        }
                        else
                        {
                              echo "No debe haber campos vac&iacute;os";
                        } 
			?>
		</p>
	</body>
</html>