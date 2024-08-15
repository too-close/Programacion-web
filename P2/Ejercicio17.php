<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 12/10/2022
    Descripcion: "Ejercicio 17 contador de visitas"
-->
<head>
		<title>Ejercicio 17</title>
            <meta charset="UTF-8">
            <link rel = "stylesheet" href="style.css">
</head>
<body>
      <div>
            <h1>Ejercicio 17</h1>
            <p>
                  <?php
                        // Para el contador necesitamos un archivo de texto externo donde almacenamos
                        // las visitas
                        // Aqui se veran las funciones para trabajar con archivos, en este caso
                        // abrir, leer, grabar y cerrar. El contador simplemente se va sumando.
                        $fp = fopen("counter.txt", "r+");
                        $counter = fgets($fp, 7);
                        echo $counter;
                        $counter ++;
                        rewind($fp);
                        fputs($fp, $counter);
                        fclose($fp);
                  ?>
            </p>
      </div>
</body>
</html>