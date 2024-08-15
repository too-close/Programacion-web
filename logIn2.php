<html>
    <head>
        <title>Portafolio</title>
        <link rel="stylesheet" href="estilotabla.css">
    </head>
</html>
<?php
include 'proycon.php';
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die ("There was an error ".$conn->connect_error);
}
if (isset($_POST['user_field']) && isset($_POST['pass_field'])) {
    $user=$_POST['user_field'];
    $pass=$_POST['pass_field'];
    $sql="SELECT id,usuario,password,tipo FROM usuarios WHERE usuario='".$user."' and password='".$pass."'";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        $row = $result->fetch_assoc();
        echo"<p>Bienvenido <b>".$row['usuario']."</b></p>";
    }else{
        echo "<p>Usuario no encontrado</p>";
    }
}
//SELECT alumnos.matricula,alumnos.nombre,alumnos.carrera, kardex.periodo FROM alumnos,kardex where alumnos.matricula=177393
$sql = "SELECT alumnos.matricula,alumnos.nombre,alumnos.carrera, kardex.periodo FROM alumnos,kardex where alumnos.matricula=".$user;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
 echo "<table border=2>";
 echo "<tr>";
 echo "<th></th>";
 echo "<th>Matricula</th>";
 echo "<th>Nombre</th>";
 echo "<th>Carrera</th>";
 echo "<th>Periodo</th>";
 echo "</tr>";
 echo"<tr>";
 echo "<td bgcolor=white>'<img src=https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.prsindia.org%2Fsites%2Fdefault%2Ffiles%2Fdefault_images%2Ficon-user-default_0.png&f=1&nofb=1&ipt=a62dc959248e263621804350d582de45765b9e4906d49b9a6b0ed85d5693951f&ipo=images alt=icono width=100px height=100px'";
 echo"<td>";
 echo"<td bgcolor=white><font color=black>".$row["matricula"]."</td></font>";
 echo"<td bgcolor=white><font color=black>".$row["nombre"]."</td></font>";
 echo"<td bgcolor=white><font color=black>".$row["carrera"]."</td></font>";
 echo"<td bgcolor=white><font color=black>".$row["periodo"]."</td></font>";
 echo"</tr>";
 echo "</table>";
} else {
 echo "No existen datos para ese usuarios";
}
if (isset($_POST['user_field'])) {
    $sql2="SELECT id,matricula,status,materia,seccion,periodo FROM kardex WHERE matricula='".$user."'";
    $result2 = $conn->query($sql2);
    if ($result->num_rows > 0){
        echo "<h1>TU AVANCE</h1><table border=1>";
        echo"<tr><td bgcolor='#B1B1B1'><font color=black>Materia</td></font>
	<td bgcolor='#B1B1B1 '><font color=black>Estatus</td></font>
	<td bgcolor='#B1B1B1 '><font color=black>Periodo</td></font>	
	<td bgcolor='#B1B1B1'><font color=black>Seccion</td></font></tr>";
        while($row = $result2->fetch_assoc()) {
            echo"<tr>";
            echo"<td bgcolor='#DADADA '><font color=black>".$row['materia']."</td></font>";
            if($row['status']==="Aprobado"){
                echo "<td bgcolor='#8DFF33'><font color=black>".$row['status']."</td></font>"; 
            }else if($row['status']==="cursando"){
                echo "<td bgcolor='#F5F24A'><font color=black>".$row['status']."</td></font>"; 
            }else {
                echo "<td bgcolor='#FF5630 '><font color=black>".$row['status']."</td></font>"; 
            }
            echo"<td bgcolor='#DADADA'><font color=black>".$row['periodo']."</td><td bgcolor='#DADADA '><font color=black>".$row['seccion']."</td></font></font>";
            echo"</tr>";
        }
        echo "</table>";
    }else{
        echo "<p>Alumno no encontrado</p>";
    }
}
$conn->close();
?>