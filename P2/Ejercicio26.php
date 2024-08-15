<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 06/10/2022
    Descripcion: "EJERCICIO 26"
-->
	<head>
      <title>Alta de registros</title>
        <meta charset="utf-8" />
		<meta name="author" content="Dávila Esquivel Arturo de Jesús 177234" />
		<meta name="description" content="Ejercicio 26" />
            <meta nam="keywords" content="html, "/>
		<meta name="revised" content="Jueves, 06 de Octubre 2022" />
      <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<p>
                  <?php
                        include 'conn.php';
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "UPDATE MyGuests SET lastname='D' WHERE id=2";
                        if (mysqli_query($conn, $sql)) {
                        echo "Record updated successfully";
                        } else {
                        echo "Error updating record: " . mysqli_error($conn);
                        }
                        mysqli_close($conn);
                  ?>
            </p>
      </body>
</html>