<?php

//codigo jquery 
//<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "host";
$database_db = "nombre";
$username_db = "usuario";
$password_db = "password";
//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
//Seleccionar la base de datos
mysqli_select_db($conexion,$database_db) or die ("Ninguna DB seleccionada");



//CONSULTA A LA BASE DE DATOS
$accion_nm="SELECT * FROM tabla WHERE columna1='algo'";
$consulta_nm=mysqli_query($conexion,$accion_nm);
$datos_nm=mysqli_fetch_assoc($consulta_nm);

//Cantidad de registros
$cantidad_nm=mysqli_num_rows($consulta_nm);
//Sacar datos con $datos;

mysqli_free_result($consulta_nm);



//ACTUALIZAR REGISTRO
$accion_nm = "UPDATE tabla SET columna1='algo' WHERE columna2='algo'";
$consulta_nm = mysqli_query($conexion,$accion_nm) or die(mysqli_error());



//BORRAR REGISTRO
$accion_nm = "DELETE FROM tabla WHERE columna1='algo'";
$consulta_nm = mysqli_query($conexion,$accion_nm) or die(mysqli_error());



//INSERTAR REGISTRO
$accion_nm = "INSERT INTO tabla (columna1) VALUES ('algo')";
$consulta_nm = mysqli_query($conexion,$accion_nm) or die(mysqli_error());

//funsion que elimine los espacios en blanco
function limpiar(valor){
    var cadenavalor.split(' ').join('');
    return cadena;
?>