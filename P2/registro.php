<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Albúm de imágenes"
-->
<head>
		<title>Alb&uacute;m</title>
            <meta charset="UTF-8">
</head>
<body>
      <h1>Vocaciones</h1>
      <p>
            <?php
                  //conn.php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "myDB1";
                  /*include->si no encuentra el archivo continua con el restode las instrucciones
                   require-> si no encuantra el archivo detiene todas las instrucciones siguientes*/   
                  $resp = array();
                  $a = 0; $b = 0; $c = 0; $d = 0; $e = 0;
                  $x = 1;
                  for ($i = 0; $i < 25; $i++)
                  {
                        $resp[$i] = $_POST["q$x"];
                        $x++;
                        if ($resp[$i] === "a")
                        {
                              $a++;
                        }
                        else
                        {
                              if ($resp[$i] === 'b')
                              {
                                    $b++;
                              }
                              else
                              {
                                    if ($resp[$i] === 'c')
                                    {
                                          $c++;
                                    }
                                    else
                                    {
                                          if ($resp[$i] === 'd')
                                          {
                                                $d++;
                                          }
                                          else
                                          {
                                                if ($resp[$i] === 'e')
                                                {
                                                      $e++;
                                                }
                                          }
                                    }
                              }
                        }
                  }
                  echo "<p>Contabiliza tus puntos, si tienes: </p>";
                  if(($a > $b) && ($a > $c) && ($a > $d) && ($a > $e))
                  {
                        echo "<h3>Mayoría en A: </h3>
                        <p>Tus actividades van encaminadas hacia los aspectos administrativos, económicos y de organización. Tu interés es generar riquezas mediante planeación de procedimientos, así como encaminar el logro de objetivos del algún grupo de personas. </p>
                        <h3>Carreras relacionadas:</h3>
                        <p> Contaduría Pública, Economía, Administración de Empresas, Mercadotecnia, Comercio Internacional, Ciencias Políticas, Derecho, Relaciones Industriales, Turismo.</p>";
                        $perfil = "A";
                  }
                  else
                  {
                        if(($b > $a) && ($b > $c) && ($b > $d) && ($b > $e))
                        {
                              echo "<h3>Mayoría de B: </h3>
                              <p>Ser analítico es parte de tu esencia, el diseño y construcción de mecanismos para satisfacer necesidades es parte de tu interés ya que facilitarías la vida diaria. El manejo de materiales para crear algo original y que mejore los avances científicos. </p>
                              <h3>Carreras relacionadas:</h3>
                              <p> Ingeniería civil, Ingeniero Arquitecto, Ingeniería Industrial y de Sistemas, Ingeniería en Computación.</p>";
                              $perfil = "B";
                        }
                        else
                        {
                              if(($c > $a) && ($c > $b) && ($c > $d) && ($c > $e))
                              {
                                    echo "<h3>Mayoría de C: </h3>
                                    <p>El bienestar y la mejora de calidad de vida de otros es una de tus motivaciones para que las mismas puedan lograr una salud física y mental, la convivencia con la gente te permite conocer su comportamiento para llegar a un objetivo determinado. </p>
                                    <h3>Carreras relacionadas:</h3>
                                    <p>Enfermería, Pedagogía, Nutrición, Trabajo Social, Psicología, Sociología, Educación. </p>";
                                    $perfil = "C";
                              }
                              else
                              {
                                    if(($d > $a) && ($d > $b) && ($d > $c) && ($d > $e))
                                    {
                                          echo "<h3>Mayoría de D: </h3>
                                          <p>Tu desarrollo se logrará cuando interactúes con seres vivos y organismos. Te interesa conocer cómo es el funcionamiento de diversas sustancias, si es necesario, buscar su equilibrio y restablecer el funcionamiento previo a una alteración. La modificación y preservación de componentes orgánicos y naturales son también parte de tu interés. </p>
                                          <h3>Carreras relacionadas:</h3>
                                          <p> Biología, Química, Ecología, Medicina, Veterinaria, Biotecnología, Ciencias Naturales.</p>";
                                          $perfil = "D";
                                    }
                                    else
                                    {
                                          if(($e > $a) && ($e > $b) && ($e > $c) && ($e > $d))
                                          {
                                                echo "<h3>Mayoría de E: </h3>
                                                <p>Te apasiona todo aquello que se encuentra relacionado con el arte, la música, lo bello y lo estético. Es de suma importancia tu sensibilidad y tu imaginación. Para comunicar tus ideas y emociones utilizas tu creatividad de manera visual o auditiva pero siempre son atractivas. </p>
                                                <h3>Carreras relacionadas:</h3>
                                                <p>Diseño Ambiental, Arquitectura, Ciencias y técnicas de la Comunicación, Artes, Comunicación Gráfica.</p>";
                                                $perfil = "E";
                                          }
                                    }
                              }
                        }
                  }
                  $nom = $_POST['nom'];
                  $age = $_POST['age'];
                  $email = $_POST['email'];
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  if ($conn->connect_error)
                  {
                        die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "INSERT INTO resultados (nombre, edad, email, perfil)
                  VALUES ('$nom', '$age ', '$email','$perfil')";
                  if ($conn->query($sql) === TRUE)
                  {
                        echo "Registro exitoso!!! <br>";
                  } 
                  else 
                  {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  $conn->close();
            ?>
            <a href="mostrarResultados.php" target="_blank">Ver Todos los resultados</a>
            <br>
            <a href="formulario.html" target="_blank">Regresar</a>
      </p>
</body>
</html>