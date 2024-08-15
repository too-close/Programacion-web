<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 18/10/2022
    Descripcion: "Alta"
-->
<head>
		<title>Sign up</title>
            <meta charset="UTF-8">
            <!--<link rel = "stylesheet" href="style.css">-->
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
                        $nom = $_POST["nom"];
                        $em = $_POST["email"];
                        $u = $_POST["usr"];
                        $p = $_POST["psw"];

                        $sql = "INSERT INTO usuarios (user, pass, nombre,email)
                        VALUES ('".$u."','".$p."','".$nom."','".$em."')";//timestamp automático, por ello se omite
                        if ($conn->query($sql) === TRUE)
                        {
                              echo "Nuevo usuario registrado<br>";
                              echo "Bienvenido Sr.".$nom."<br>";
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