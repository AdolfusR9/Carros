<?php
$conexion = mysqli_connect("localhost", "root", "", "DIADEMUERTOS") or
    die("Problemas con la conexión");

mysqli_query($conexion, "INSERT INTO DATOS (nombre, apellidos, correo, telefono, res1, res2, res3, res4, res5, res6, res7, res8, res9, res10) VALUES 
    ('$_REQUEST[nombre]', '$_REQUEST[apellidos]', '$_REQUEST[correo]', '$_REQUEST[telefono]', '$_REQUEST[res1]', '$_REQUEST[res2]', '$_REQUEST[res3]', '$_REQUEST[res4]', '$_REQUEST[res5]', '$_REQUEST[res6]', '$_REQUEST[res7]', '$_REQUEST[res8]', '$_REQUEST[res9]', '$_REQUEST[res10]')")
    or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);

header("Location: index.html");
exit;
?>