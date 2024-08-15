<html>
<!--Arturo D�vila 177234!-->
	<head>
		<title>Hola Mundo</title>
	</head>
	<body>
		<h1> El famoso script Hello World</h1>
		<p>
			<?php
				echo "Hola Mundo!";
				$name = "Arturo";
				echo "<br>Hola <b>$name</b>, Encantado de conocerte";
				$num1 = 10.5;
				$num2 = 5.5;
				$resultado = 0.0;
				$resultado = $num1 + $num2;
				echo "<br>La suma es: <b>$resultado</b>";
				
				$resultado = $num1 - $num2;
				echo "<br>La resta es: <b>$resultado</b>";
				
				$resultado = $num1 * $num2;
				echo "<br>La multiplicacion es: <b>$resultado</b>";
				
				$resultado = $num1 / $num2;
				echo "<br>La division es: <b>$resultado</b>";
				
				$name2 = "D�vila";
				$resultado1 = $num1 + $name;
				echo "<br>Tu nombre completo es: <b>$resultado1</b>";
				/*En esta version el + no concatena, 
				la preferencia la tienen los numeros
				*/
			?>
		</p>
	</body>
</html>