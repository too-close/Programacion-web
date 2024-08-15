<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Mostrar</title>
</head>
<body>
<?php
    include 'conn.php';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT id, nombre, edad, email, perfil, fecha FROM resultados";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    ?>
    <table border = "1">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Perfil</th>
            <th>Fecha</th>
        </tr>
    </table>
    <table border="1">
<?php
    while($row = $result->fetch_assoc()) {
    echo"<tr>";
    echo"<td>".$row["id"]."</td>";//Para cada celda
    echo"<td>".$row["nombre"]."</td>";
    echo"<td>".$row["edad"]."</td>";
    echo"<td>".$row["email"]."</td>";
    echo"<td>".$row["perfil"]."</td>";
    echo"<td>".$row["fecha"]."</td>";
    echo"</tr>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>
</table>
</body>
</html>
