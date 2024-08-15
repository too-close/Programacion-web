<html>
      <head>
         <title></title>
      </head>
      <body>
            <h1>Primer ejemplo de Variables </h1>
            <p>
                  <?php
                        $name = "Arturo";
                        $apep = "Davila";
                        $apem = "Esquivel";
                        $completo = $name." ".$apep." ".$apem;
                        echo "Hola <b>$completo</b>, encantado de conocerte";
                        //para concatenación se usa . o basta con poner una variable despues de la otra
                        //para concatenar espacios es: " ".
                  ?>
            </p>
      </body>
</html>