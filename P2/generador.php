<!DOCTYPE html>
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web I
    Fecha: 19/10/2022
    Descripcion: "generador de contraseñas"
-->
<html lang="es">
    <head>
        <title>Generador de contraseñas</title>
        <meta charset="utf-8" />
		<meta name="author" content="Dávila Esquivel Arturo de Jesús 177234" />
		<meta name="revised" content="Jueves, 06 de Octubre 2022" />
            <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <h1>Password generator</h1><br>
      <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post"> 
      <p>Indique longitud de contraseñas</p><input type = "text" name = "long"><br>
      <br>
      <p>Indique cantidad de contraseñas</p><input type = "text" name = "cant"><br>
      <br>
      <input type="submit" value="Enviar" class="botones"> 
      </form>
      <div>
      <p>
            <?php
                  $long = $_POST ["long"]; $cant = $_POST ["cant"]; 
                  $may = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&/|¬\?¡¿0123456789";
                  for ($i = 0; $i < $cant ; $i++)
                  {    
                         for($j = 0; $j < $long ; $j++)
                        {
                              $nose = rand(0,74);
                              echo "$may[$nose]";
                        }
                        echo "<br>";
                  }
            ?>
      </p>
      </div>
    </body>
    </html>