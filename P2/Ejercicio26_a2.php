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
                        $fn = $_POST['fn'];
                        $ln = $_POST['ln'];
                        $email = $_POST['email'];
                        if ( (isset( $_POST['fn'])) && (isset( $_POST['ln'])) && (isset( $_POST['email'])))
                        {
                              // Create connection
                              $conn = new mysqli($servername, $username, $password, $dbname);
                              // Check connection
                              if ($conn->connect_error)
                              {
                                    die("Connection failed: " . $conn->connect_error);
                              }
      
                              $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                              VALUES ('".$fn."','".$ln."','".$email."')";//timestamp automático, por ello se omite
                              if ($conn->query($sql) === TRUE)
                              {
                                    echo "New record created successfully";
                              } 
                              else 
                              {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                    echo " ";
                              }
                              $conn->close();
                        }
                        else
                        {
                              echo "no has llenado el formulario";
                        }
                  ?>
		</p>
            <a href="Ejercicio26_a1.html" target="_self"><input type="button" value = regresar class="botones"></a>
            <a href="ejercicio24a.php" target="_self"><input type="button" value = tabla class="botones"></a>
	</body>
      
</html>