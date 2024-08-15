<?php
      setcookie("check", 1);
      if (isset($_POST['submit'])) 
      {
            setcookie("vote", 1);
      }
?>
<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: //
    Descripcion: ""
-->
	<head>
		<title>Encuesta de opini&oacute;n</title>
            <link rel = "stylesheet" href="style.css">
            <meta charset="UTF-8">
	</head>
	<body>
      <h1>Encuesta</h1>
      <h3>¿Que opinas de este curso de php?</h3>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="radio" name="reply" value="0">
            <p>Excelente, he aprendido mucho.</p><br>
            <input type="radio" name="reply" value="1">
            <p>Mas o menos, es muy complicado.</p><br>
            <input type="radio" name="reply" value="2">
            <p>¡Patrañas! para que quiero aprender php</p>
      <br><br>
		<p>
                  <?php
                  if (empty($_POST['submit']) && empty($_COOKIE['voted'])) {
                  //Mostrar el botòn submit solo si el formulario todavia
                  // no se ha enviado y el usuario no ha votado.
                  ?>
            </p>
                  <input name="submit" type="submit" value="vota!">
            </p>
            <p>
                  <?php
                        } 
                        else
                        {
                              echo "<p>Gracias por tu voto.</p>\n";
                              //¿Formulario enviado? ¿cookies activas? ¿pero todavia no se ha votado?
                              if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])) 
                              {
                                    //Guardar nombre de archivo en la variable
                                    $file="results.txt";
                                    $fp=fopen($file, "r+");
                                    $vote=fread($fp, filesize($file));
                                    //Descomponer la string del archivo en array con coma como separador
                                    $arr_vote = explode("," , $vote); //explode convierte la string en array
                                    //¿que valor se ha selleccionado en el formulario?
                                    //¡El recuento aumenta en 1!
                                    $reply = $_POST['reply'];
                                    $arr_vote[$reply]++;
                                    //volver a montar la string
                                    $vote = implode(",", $arr_vote); // implode vincula elementos de la array a string
                                    rewind($fp);
                                    //Escribir nueva string en el archivo
                                    fputs($fp, $vote);
                                    fclose($fp);
                              }
                        }
                  ?>
		</p>
      </form>
      </form>
            <p>[<a href="results.txt" target="_blank">ver resultados de la encuesta</a>
	</body>
</html>