<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Ejercicio 20(comprobar conexión entre ph y mysql)"
-->
<head>
		<title>conection</title>
            <meta charset="UTF-8">
            <link rel = "stylesheet" href="style.css">
</head>
<body>
      <p>
            <?php
                  /*$servername = "localhost";//cuando usemos 0 fees cambiará a la liga de 0fees
                  $username = "root";//cuando usemos 0 fees cambiará al usuario de 0fees
                  $password = "";//cuando usemos 0 fees cambiará a la pw de 0fees
                  // Create connection*/
                  include 'conn.php';
                  $conn = new mysqli($servername, $username, $password);//puede no ser detectado
                  // Check connection
                  if ($conn->connect_error) 
                  {
                  die("Connection failed: " . $conn->connect_error);//similar al exit pero muestra que error aparece
                  }
                  echo "Connected successfully";
            ?>
      </p>
</body>
</html>
