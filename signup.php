<!DOCTYPE html>
<html lang = "es">
    <!--
    Nombres: "Dávila Esquivel Arturo de Jesús 177234
    Hernandez Ortiz Diego->177232"
    Materia: Programacion Web II
    Fecha: 04/10/2022
    Descripcion: "signup"
-->
	<head >
		<title>Proyecto programación web II(signup)</title>
        <meta charset="UTF-8">
        <link href="Estilo/estilologin.css" rel="stylesheet" type="text/css"/>
        <link href="multimedia/imagenes/favicon-2.jpg" rel="shortcut icon"/>
    </head>
    <body>
        <div class="mat"><br></div>
      <header>    
            <span class="ima">
            <a href="https://www.upslp.edu.mx/upslp/" target="_blank"><img src="multimedia/imagenes/up.png" alt="poli"></a>
            </span>
            <a href="main.html" target="_self"><h1>Proyecto programaci&oacute;n web II</h1></a>
      </header>
            <section>
                    <form autocomplete='off' class='form' action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                          <div class='control'>
                            <h1>
                              Registrarse
                            </h1>
                          </div>
                          <div class='control block-cube block-input'>
                          <input name='username' placeholder='Username' type='text'>
                          <div class='bg-top'>
                            <div class='bg-inner'></div>
                          </div>
                          <div class='bg-right'>
                            <div class='bg-inner'></div>
                          </div>
                          <div class='bg'>
                            <div class='bg-inner'></div>
                          </div>
                        </div>
                        <div class='control block-cube block-input'>
                          <input name='password' placeholder='Password' type='password'>
                          <div class='bg-top'>
                            <div class='bg-inner'></div>
                          </div>
                          <div class='bg-right'>
                            <div class='bg-inner'></div>
                          </div>
                          <div class='bg'>
                            <div class='bg-inner'></div>
                          </div>
                        </div>

<div>
  <center>
   <p style = "color:black;font-family: monospace, serif;">Alumno<input type="radio" name="perfil" value="Alumno"></p>
   <p style = "color:black;font-family: monospace, serif;">Maestro<input type="radio" name="perfil" value="Maestro"></p>
   <p style = "color:black;font-family: monospace, serif;">Tutor<input type="radio" name="perfil" value="Tutor"></p>
<!--<optgroup>
    <option value="selecciona una opci&oacute;n" name ="perfil">selecciona una opci&oacute;n</option>
    <option  name ="perfil">Alumno</option>
    <option  name ="perfil">Maestro</option>
    <option  name ="perfil">Tutor</option>
</optgroup>
<div class='bg-top'>
    <div class='bg-inner'></div>
  </div>
  <div class='bg-right'>
    <div class='bg-inner'></div>
  </div>
  <div class='bg'>
    <div class='bg-inner'></div>
  </div>-->
</div>                      



                        <button class='btn block-cube block-cube-hover' type='button'>
                          <div class='bg-top'>
                            <div class='bg-inner'></div>
                          </div>
                          <div class='bg-right'>
                            <div class='bg-inner'></div>
                          </div>
                          <div class='bg'>
                            <div class='bg-inner'></div>
                          </div>
                          <div class='text'>
                            <input type="submit" value="Registrame" class="btn block-cube">
                          </div>
                        </button>
                        [<a style="color: #f8851a;" href="login.html" target="_self">¿Ya tienes una cuenta?</a>]
                    </form>          
          </section>
          <p>
            <?php
/*---------------------------variables-----------------*/           
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "proyecto";

                $nom = $_POST["username"];
                $pass = $_POST["password"];   
                $perf = $_POST["perfil"];                 
/*----------------------------conexion-----------------*/                
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error)
                {
                  die("Connection failed: " . $conn->connect_error);
                }
/*--------------------------insercion-----------------*/
              $sql = "INSERT INTO usuarios (usuario, password, tipo) 
              VALUES ('$nom', '$pass', '$perf')";
              if ($conn->query($sql) === TRUE)
              {
                    echo "Usuario registrado con éxito <br>";
              } 
              else 
              {
                    echo "Error: " . $sql . "<br>" . $conn->error;
              }
            ?>
          </p>
          <section class="fin">
            <br>
          </section>
        <div class="mat"><br></div>
        <footer> 
          <div class="izq" style="text-align: center;"> 
              <h4>Devolped by:</h4>
              <p class="nose">
              <a style="color: white;" href="mailto: 177234@upslp.edu.mx">D&aacute;vila Esquivel Arturo de Jes&uacute;s->177234</a><br>
              <a style="color: white;" href="mailto: 177232@upslp.edu.mx">Hern&aacute;ndez Ortiz Diego->177232</a><br>
              <a style="color: white;" href="mailto: 177393@upslp.edu.mx">L&oacute;pez G&oacute;mez Samuel->177393</a>   
              </p>
          </div>
      </footer> 
    </body>
</html>