<html lang = "es">
<!--
    Nombre: "Dávila Esquivel Arturo de Jesús 177234
    Materia: Programacion Web II
    Fecha: 30/09/2022
    Descripcion: "Test archivo 2"
-->
	<head>
		<title>Test Adicci&oacute;n a los videojuegos</title>
        <meta charset="UTF-8">
        <style>
            h1
            {
                font-weight: bold;
                font-style: oblique;
                text-decoration: underline;
                text-align: center;
                text-transform: uppercase;
            }
            body
            {
                background-color: lightblue;
            }
            p
            {
                text-align: center;
                margin: 10px 5%;
	            padding: 2% 15%;
	            border: 5px solid transparent;
                border-radius: 20px;
                background-color: aliceblue;
                font-size:18px;
            }
            .botones
            {
                background-color: rgb(221, 159, 245);
                border-radius: 10px;
                padding: 15px;
                border: none;
                text-align: center;
                font-style: italic;
	            font-weight: 800;
                font-size: 16px;
                transition-duration: 0.4s;
                width: 250px;
            }
            .botones:hover 
            {
                color: rgb(219, 219, 219);
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }
        </style>
    </head>
    <body>
         <h1>Adicci&oacute;n a los videojuegos</h1><br>
         <p>
            <?php
                if (isset($_POST['p1']) && isset($_POST['p2']) && isset($_POST['p3']) && isset($_POST['p4']) && isset($_POST['p5']) && isset($_POST['p7']) && isset($_POST['p8']) && isset($_POST['p9']) && isset($_POST['p10']))
                {
                    $suma = 0;
                    $lim = 11;
                    $p1 = $_POST['p1'];
                    $p2 = $_POST['p2'];
                    $p3 = $_POST['p3'];
                    $p4 = $_POST['p4'];
                    $p5 = $_POST['p5'];
                    $p6 = $_POST['p6'];
                    $p7 = $_POST['p7'];
                    $p8 = $_POST['p8'];
                    $p9 = $_POST['p9'];
                    $p10 = $_POST['p10'];

                    $suma += $p1;
                    $suma += $p2;
                    $suma += $p3;
                    $suma += $p4;
                    $suma += $p5;
                    $suma += $p6;
                    $suma += $p7;
                    $suma += $p8;
                    $suma += $p9;
                    $suma += $p10;

                    if (($suma <= 23) || ($suma <= 16))
                    {
                        echo "Eres adicto, juntando $suma puntos";
                    }
                    else
                    {
                        if(($suma <= 15) || ($suma == 10))
                        {
                            echo "Probablemente tengas problemas con ellos, juntando $suma puntos";
                        }
                        else
                        {
                            if(($suma <= 9) || ($suma == 5))
                            {
                                echo "Aún no hay de que preocuparse, con $suma como tu puntaje";
                            }
                            else
                            {
                                if (($suma <= 4) || ($suma == 1))
                                {
                                    echo "waos!!!, eres saludable, $suma es tu puntaje";
                                }
                            }
                        }
                    }
                }
                else
                {
                    echo "No lo has llenado por completo >:(";
                }
            ?>
        </p>
        <div>
                <a class = "botones" href ="test_a1.html" target = "_self"><input type = "submit">Regresar</a>
         </div>
    </body>
</html>