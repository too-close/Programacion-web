<html lang = "es">
<!--
    Nombre: "D�vila Esquivel Arturo de Jes�s 177234
    Materia: Programacion Web II
    Fecha: 03/10/2022
    Descripcion: "Alb�m de im�genes"
-->
<head>
		<title>Vocaci&oacute;n</title>
            <meta charset="UTF-8">
</head>
<body>
      <h1>Vocaciones</h1>
      <p>
            <?php
                  require ('fpdf.php');
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "myDB1";
                  $mensajea = "Tus actividades van encaminadas hacia los aspectos administrativos, econ�micos y de organizaci�n. Tu inter�s es generar riquezas mediante planeaci�n de procedimientos, as� como encaminar el logro de objetivos del alg�n grupo de personas.";
                  $mensajea = "Contadur�a P�blica, Econom�a, Administraci�n de Empresas, Mercadotecnia, Comercio Internacional, Ciencias Pol�ticas, Derecho, Relaciones Industriales, Turismo.";
                  $mensajeb = "Ser anal�tico es parte de tu esencia, el dise�o y construcci�n de mecanismos para satisfacer necesidades es parte de tu inter�s ya que facilitar�as la vida diaria. El manejo de materiales para crear algo original y que mejore los avances cient�ficos.";
                  $mensajebb = "Ingenier�a civil, Ingeniero Arquitecto, Ingenier�a Industrial y de Sistemas, Ingenier�a en Computaci�n.";
                  $mensajec = "El bienestar y la mejora de calidad de vida de otros es una de tus motivaciones para que las mismas puedan lograr una salud f�sica y mental, la convivencia con la gente te permite conocer su comportamiento para llegar a un objetivo determinado.";
                  $mensajecc = "Enfermer�a, Pedagog�a, Nutrici�n, Trabajo Social, Psicolog�a, Sociolog�a, Educaci�n.";
                  $mensajed = "Tu desarrollo se lograr� cuando interact�es con seres vivos y organismos. Te interesa conocer c�mo es el funcionamiento de diversas sustancias, si es necesario, buscar su equilibrio y restablecer el funcionamiento previo a una alteraci�n. La modificaci�n y preservaci�n de componentes org�nicos y naturales son tambi�n parte de tu inter�s.";
                  $mensajedd = "Biolog�a, Qu�mica, Ecolog�a, Medicina, Veterinaria, Biotecnolog�a, Ciencias Naturales.";
                  $mensajee = "Te apasiona todo aquello que se encuentra relacionado con el arte, la m�sica, lo bello y lo est�tico. Es de suma importancia tu sensibilidad y tu imaginaci�n. Para comunicar tus ideas y emociones utilizas tu creatividad de manera visual o auditiva pero siempre son atractivas.";
                  $mensajeee = "Dise�o Ambiental, Arquitectura, Ciencias y t�cnicas de la Comunicaci�n, Artes, Comunicaci�n Gr�fica.";
                  $resp = array();
                  $a = 0; $b = 0; $c = 0; $d = 0; $e = 0;
                  $x = 1;
		  $pdf = new FPDF();
		  $pdf->AddPage();
		  $pdf->SetFont('Arial','B',16);
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
        
                  
                  if(($a > $b) && ($a > $c) && ($a > $d) && ($a > $e))
                  {
                        $pdf->Cell(40,10,'�Mayoria de A!',0,1);
                        $pdf->Cell(40,10,'$mensajea',0,1);
                        $pdf->Cell(40,10,'carreras relacionadas',0,1);
                        $pdf->Cell(40,10,'$mensajeaa',0,1);
                  }
                  else
                  {
                        if(($b > $a) && ($b > $c) && ($b > $d) && ($b > $e))
                        {
                              $pdf->Cell(40,10,'�Mayoria de B!',0,1);
                              $pdf->Cell(40,10,'$mensajeb',0,1);
                              $pdf->Cell(40,10,'carreras relacionadas',0,1);
                              $pdf->Cell(40,10,'$mensajebb',0,1);
                        }
                        else
                        {
                              if(($c > $a) && ($c > $b) && ($c > $d) && ($c > $e))
                              {
                                    $pdf->Cell(40,10,'�Mayoria de C!');
				    $pdf->Ln(10);
                                    $pdf->Cell(40,10,'$mensajec',0,1);
                                    $pdf->Cell(40,10,'carreras relacionadas',0,1);
                                    $pdf->Cell(40,10,'$mensajecc',0,1);
                              }
                              else
                              {
                                    if(($d > $a) && ($d > $b) && ($d > $c) && ($d > $e))
                                    {
                                          $pdf->Cell(40,10,'�Mayoria de D!',0,1);
                                          $pdf->Cell(40,10,'$mensajed',0,1);
                                          $pdf->Cell(40,10,'carreras relacionadas',0,1);
                                          $pdf->Cell(40,10,'$mensajedd',0,1);
                                    }
                                    else
                                    {
                                          if(($e > $a) && ($e > $b) && ($e > $c) && ($e > $d))
                                          {
                                                $pdf->Cell(40,10,'�Mayoria de E!',0,1);
                                                $pdf->Cell(40,10,'$mensajee',0,1);
                                                $pdf->Cell(40,10,'carreras relacionadas',0,1);
                                                $pdf->Cell(40,10,'$mensajeee',0,1);
                                          }
                                    }
                              }
                        }
                  }
                  $pdf->Output();
                  /*
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
                  $conn->close();*/
            ?>
      </p>
</body>
</html>