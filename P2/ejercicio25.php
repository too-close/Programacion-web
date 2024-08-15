<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Ejercicio 25 Eliminación de registros"
-->
<head>
		<title>Ejercicio 25</title>
            <meta charset="UTF-8">
            <link rel = "stylesheet" href="style.css">
</head>
<body>
      <div>
            <h1>Ejercicio 25</h1><br>
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
                        // sql to delete a record
                        $sql = "DELETE FROM MyGuests WHERE id=5";
                        if ($conn->query($sql) === TRUE) 
                        {
                              echo "Record deleted successfully";
                        } 
                        else 
                        {
                              echo "Error deleting record: " . $conn->error;
                        }
                        $conn->close();
                  ?>
            </p>
      </div>
</body>
</html>
<!-- -->