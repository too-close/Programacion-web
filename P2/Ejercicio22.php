<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Ejercicio 22(crear database)"
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
                        // sql to create table
                        $sql = "CREATE TABLE MyGuests (
                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        firstname VARCHAR(30) NOT NULL,
                        lastname VARCHAR(30) NOT NULL,
                        email VARCHAR(50),
                        reg_date TIMESTAMP
                        )";
                        if ($conn->query($sql) === TRUE)
                        {
                              echo "Table MyGuests created successfully";
                        } 
                        else 
                        {
                              echo "Error creating table: " . $conn->error;
                        }
                        $conn->close();
                  ?>
            </p>
      </div>
</body>
</html>