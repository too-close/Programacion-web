<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Ejercicio 24 consulta de registros"
-->
<head>
		<title>Ejercicio 24a</title>
            <meta charset="UTF-8">
            <link rel = "stylesheet" href="style.css">
</head>
<body>
      <div>
            <h1>Ejercicio 24a</h1>
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
                        $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                        {
                        // output data of each row
                              echo "<table border = 1>";
                              echo "<tr bgcolor = white> <font color=white>";
                              echo "<th>ID</th>";
                              echo "<th>NOMBRE</th>";
                              echo "<th>APELLIDO</th>";
                              echo "<th>E-MAIL</th>";
                              echo "</tr>";
                              while($row = $result->fetch_assoc())
                              {
                                    /*echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " .
                                    $row["lastname"]." " ." - correo: ".$row["email"]. "<br>";*/
                                    echo "<tr>";
                                    echo "<td>".$row["id"]."</td>";
                                    echo "<td>".$row["firstname"]."</td>";
                                    echo "<td>".$row["lastname"]."</td>";
                                    echo "<td>".$row["email"]."</td>";
                                    echo "</tr>";
                              }
                              echo "</table>";
                        } 
                        else
                        {
                              echo "0 results";
                        }
                        $conn->close();
                  ?>
            </p>
      </div>
</body>
</html>
<!-- puede ser array (columna,fila);
para recorrer el arreglo bidimensional fetch_assoc()va a ir obteniendo una linea  y va a ir recorriendo al apuntador -->