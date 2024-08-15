<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Ejercicio 21(crear database)"
-->
<head>
		<title>Test Adicci&oacute;n a los videojuegos</title>
            <meta charset="UTF-8">
            <link rel = "stylesheet" href="style.css">
</head>
<body>
      <p>
            <?php
                  include 'conn.php';
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password);
                  // Check connection
                  if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                  }
                  // Create database
                  $sql = "CREATE DATABASE myDB1";
                  if (mysqli_query($conn, $sql)) {
                  echo "Database created successfully";
                  } else {
                  echo "Error creating database: " . mysqli_error($conn);
                  }
                  mysqli_close($conn);
                  $sql = "CREATE DATABASE myDB1";
                  if(mysqli_query($conn,$sql))
                  {
                        echo "database created succesfully";
                  }
                  else
                  {
                        echo "Error creating database", mysqli_error($conn);
                        mysqli_close($conn);
                  }
                  /* habrá warnings, más no serán errores, estos son avisos de que se está desprotegiendo la información*/
            ?>
      </p>
</body>
</html>