<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Ejercicio 23 a"
-->
<head>
		<title>Ejercicio 23a</title>
            <meta charset="UTF-8">
            <link rel = "stylesheet" href="style.css">
</head>
<body>
      <div>
            <p>
                  <?php
                        include 'conn.php';
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error)
                        {
                              die("Connection failed: " . $conn->connect_error);
                        }
                        for ($i  = 0; $i < 10; $i++)
                        {
                              $sql = "INSERT INTO MyGuests (firstname, lastname, email) <- Esta parte es la inserción con el mismo nombre
                              VALUES ('John', 'Doe ', 'john@example.com')";//timestamp automático, por ello se omite
                              if ($conn->query($sql) === TRUE)
                              {
                                    echo "New record created successfully <br>";
                              } 
                              else 
                              {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                        }
                        $conn->close();
                  ?>
            </p>
      </div>
</body>
</html>
<!-- puede ser array (columna,fila);-->