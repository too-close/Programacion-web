<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Ejercicio 23"
-->
<head>
		<title>Test Adicci&oacute;n a los videojuegos</title>
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
                        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                        VALUES ('John', 'Doe', 'john@example.com')";//timestamp automático, por ello se omite
                        if ($conn->query($sql) === TRUE)
                        {
                              echo "New record created successfully";
                        } 
                        else 
                        {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        $conn->close();
                  ?>
            </p>
      </div>
</body>
</html>