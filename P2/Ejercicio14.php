<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 27/09/2022
    Descripcion: "Analísis de formulario"
-->
	<head>
            <title>ANALISIS DE FORMULARIO</title>
	</head>
	<body>
            <h1> ANALISIS DE FORMULARIO</h1><br>
            <br>
            <h2>Rellena los campos (form.html)</h2>
            <br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> Tu nombre: <input type="text" name="firstname">
		<p>
			<?php
                        if (isset ($_POST['firstname']))
                        {
                              $nom = $_POST['firstname'];
                              echo "Hola <b>$nom</b>, encantado de saludarte.";
                        }
			?>
		</p>
	</body>
</html>