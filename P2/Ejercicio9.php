<html>
<head>
<title>Condicion IF</title>
</head>
<body>
<h1>Condicional IF</h1>
<?php
$a = 8;
$b = 3;
echo "Valor de a: ",$a," y el valor de b:",$b,"<br>";
if ($a<$b)
{
echo "a es menor que b";
}
else
{
echo " a no es menor que b";
}
$dia=date("d");
if ($dia<=10)
{
echo "sitio activo";
}
else
{
echo "sitio fuera de servicio";
}
?>
</body>
</html>