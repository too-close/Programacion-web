<html>
<head>
<title>arreglo random</title>
</head>
<body>
<h1>arreglo random</h1>
<?php
    $num = array ();
    $lim = 20;
    echo "<table border = 1>";
    echo "<tr>";
    for ($i = 0; $i < $lim ; $i++)
    {
        echo "<th bgcolor = blue><font color=white>","arreglo"," ",$i,"</th>";
    }
    echo "</tr>";
    for ($i = 0; $i < $lim ; $i++)
    {
        $num[$i] = rand(1,100); 
    } 
    echo "<tr>";
    for ($i = 0; $i < $lim ; $i++)
    {
        echo "<td>",$num[$i],"</td>";
    }
    echo "</tr>";
    echo "</table>";
    echo "<br>";
//---------------------------------------------------------------
    echo "<table border = 1>";
    echo "<tr>";
    for ($i = 0; $i < $lim ; $i++)
    {
        echo "<th bgcolor = blue><font color=white>","arreglo"," ",($lim-($i+1)),"</th>";
    }
    echo "</tr>";
    echo "<tr>";
    for ($i = 0; $i < $lim ; $i++)
    {
        echo "<td>",$num[$lim-($i+1)],"</td>";
    }
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>