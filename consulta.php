<html lang = "es">
<!--
    Nombres: "Dávila Esquivel Arturo de Jesús 177234
    Hernandez Ortiz Diego->177232"
    Materia: Programacion Web II
    Fecha: 04/10/2022
    Descripcion: "proyecto a1"
-->
<head >
		<title>Proyecto programación web II</title>
        <meta charset="UTF-8">
        <link href="Estilo/estilologin.css" rel="stylesheet" type="text/css" />
        <link href="multimedia/imagenes/favicon-2.jpg" rel="shortcut icon">
    </head>
<body>
    <div class="mat"><br></div>
    <header>
        
    <span class="ima">
       <a href="https://www.upslp.edu.mx/upslp/" target="_blank"><img src="multimedia/imagenes/up.png" alt="poli"></a>
    </span>
        <h1>Proyecto programaci&oacute;n web II</h1>
    </header>
    <p>
        <?php
            /*---------------------------variables-----------------*/           
            require "conn.php";

            $mat = $_POST['matricula'];
            /*----------------------------conexion-----------------*/                
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error)
            {
              die("Connection failed: " . $conn->connect_error);
            }
            /*--------------------------consulta------------------*/
            
            $sql = "SELECT id, matricula, semestre, materia, seccion, periodo, cfo, ext, reg, cf, creditos, status FROM kardex";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
                // output data of each row
                echo "<table border = 1>";
                echo "<tr bgcolor = white> <font color=white>";
                echo "<th>ID</th>";
                echo "<th>MATRICULA</th>";
                echo "<th>SEMESTRE</th>";
                echo "<th>MATERIA</th>";
                echo "<th>SECCION</th>";
                echo "<th>PERIODO</th>";
                echo "<th>CFO</th>";
                echo "<th>EXT</th>";
                echo "<th>REG</th>";
                echo "<th>CF</th>";
                echo "<th>CREDITOS</th>";
                echo "<th>STATUS</th>";
                echo "</tr>";
                while($row = $result->fetch_assoc())
                {
                /*echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " .
                $row["lastname"]." " ." - correo: ".$row["email"]. "<br>";*/
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["matricula"]."</td>";
                    echo "<td>".$row["semestre"]."</td>";
                    echo "<td>".$row["materia"]."</td>";
                    echo "<td>".$row["seccion"]."</td>";
                    echo "<td>".$row["periodo"]."</td>";
                    echo "<td>".$row["cfo"]."</td>";
                    echo "<td>".$row["ext"]."</td>";
                    echo "<td>".$row["reg"]."</td>";
                    echo "<td>".$row["cf"]."</td>";
                    echo "<td>".$row["creditos"]."</td>";
                    echo "<td>".$row["status"]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                } 
                else
                {
                    echo "No hay resultados papu :(";
                }
                $conn->close();
        ?>
    </p>

<!--  ******************************footer**************************************-->
    <section class="fin">
        <br>
      </section>
    <div class="mat"><br></div>
    <footer> 
      <div class="izq" style="text-align: center;"> 
          <h4>Devolped by:</h4>
          <p class="nose">
          <a style="color: white;" href="mailto: 177234@upslp.edu.mx">D&aacute;vila Esquivel Arturo de Jes&uacute;s->177234</a><br>
          <a style="color: white;" href="mailto: 177232@upslp.edu.mx">Hern&aacute;ndez Ortiz Diego->177232</a>  
          </p>
      </div>
  </footer> 
    </body>
    </html>
