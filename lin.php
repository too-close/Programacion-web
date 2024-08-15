<?php
/*---------------------------variables-----------------*/           
    require "conn.php";
    $usuariosv = array();
    $passwordsv = array();
    $tipo = array();

    $usuario = $_POST["username"];
    $pass = $_POST["password"];
/*----------------------------conexion-----------------*/                
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
/*-----------------------obtencion de datos----------------*/ 
    $sql = "SELECT usuario, password FROM usuarios";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    {
        
    }
    $conn->close();
/*---------------------------comprobacion-----------------*/    
    if ($usuario === $usuariosv && $pass === $passwordsv)
    {
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: secreta.php");
    } 
    else 
    {
        echo "El usuario o la contraseña son incorrectos";
    }
//https://parzibyte.me/blog/2019/01/22/ejemplo-simple-login-php/    
?>
