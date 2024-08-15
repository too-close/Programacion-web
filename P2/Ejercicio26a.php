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
                        $nom = array ("Juan","Jose","Santiago","Mateo","Daniel","Sebastian","Diego","Alexander","Leonardo","Jeremias");
                        $ape = array ("Hernandez","Madero","Vizcaino","Garcia","Lopez","Gonzalez","Perez","Rodriguez","Sanchez","Cruz");
                        $em = array ("juan@hotmail.com","jmv@outlook.com","santi@hotmail.com","mateo@outlook.com","dan@hotmail.com","sebas@gmail.com","diego@Yahoo.com","alex@gmail.com","leo@example.com","17:5@Yahoo.com");
                        $id = array();
                        for ($i = 0; $i < 5; $i++)
                        {
                              $id[$i] = rand(1,10);
                        }
                        include 'conn.php';
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) 
                        {
                              die("Connection failed: " . mysqli_connect_error());
                        }
                        for ($i = 0; $i < 5; $i++)
                        {
                              $sql = "UPDATE MyGuests SET lastname ='$ape[$i]' WHERE id = $id[$i]";
                               if (mysqli_query($conn, $sql)) 
                              {
                                    echo "Record updated successfully <br>";
                              } 
                              else 
                              {
                                    echo "Error updating record: " . mysqli_error($conn)."<br>";
                              }
                        }          
                        mysqli_close($conn);
                  ?>
            </p>
      </body>
</html>