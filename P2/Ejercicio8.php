<html>
<head>
<title>Ejemplo de operaciones</title>
</head>
<body>
<h1>Ejemplo de operaradores en PHP</h1>
<?php
$a = 8;
$b = 3;
echo $a + $b, "<br>";
echo $a - $b, "<br>";
echo $a * $b, "<br>";
echo $a / $b, "<br>";
$a++ ;
echo $a,"<br>";
$b--;
echo $b,"<br>";
$a = 8;
$b = 3;
$c = 3;
echo $a == $b, "<br>";
echo $a != $b, "<br>";
echo $a < $b, "<br>";
echo $a > $b, "<br>";
echo $a >= $c, "<br>";
echo $a <= $c, "<br>";
$a = 8;
$b = 3;
$c = 3;
echo ($a == $b) && ($c > $b), "<br>";
echo ($a == $b) || ($b == $c), "<br>";
echo !($b <= $c)b, "<br>";
?>
</body>
</html>
