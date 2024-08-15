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
                        $nom = array ("Juan","Jose","Santiago","Mateo","Daniel","Sebastian","Diego","Alexander","Leonardo","Jeremias");
                        $ape = array ("Hernandez","Madero","Vizcaino","Garcia","Lopez","Gonzalez","Perez","Rodriguez","Sanchez","Cruz");
                        $em = array ("juan@hotmail.com","jmv@outlook.com","santi@hotmail.com","mateo@outlook.com","dan@hotmail.com","sebas@gmail.com","diego@Yahoo.com","alex@gmail.com","leo@example.com","17:5@Yahoo.com");
                        for ($i  = 0; $i < 10; $i++)
                        {
                              $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                              VALUES ('$nom[$i]','$ape[$i]','$em[$i]')";//timestamp automático, por ello se omite
                              if ($conn->query($sql) === TRUE)
                              {
                                    echo "New record created successfully <br>";
                              } 
                              else 
                              {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                        }
                        /*for ($i  = 0; $i < 10; $i++)
                        {
                              $sql = "INSERT INTO MyGuests (firstname, lastname, email) <- Esta parte es la inserción con el mismo nombre
                              VALUES ('John.$i', 'Doe.$i ', 'john.$i@example.com')";//timestamp automático, por ello se omite
                              if ($conn->query($sql) === TRUE)
                              {
                                    echo "New record created successfully <br>";
                              } 
                              else 
                              {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                        }*/
                        $conn->close();
                  ?>
            </p>
      </div>
</body>
</html>
<!-- puede ser array (columna,fila);-->