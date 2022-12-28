<?php
 $server="%localhost";
 $contrasena = "pepe";
 $usuario = "user";
 $nombre_bd = "helio_rivera_software";
try {
    $bd = new PDO('mysql:host=' . $server . ';dbname=' . $nombre_bd, $usuario, $contrasena);
    $bd->query("set names utf8;");
    $bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    die("<script>alert('Conectado con la base de datos')</script>");
} catch (Exception $e) {
    die("<script>alert('Conexion fallida a la base de datos')</script>");
}

function conectarse()
{
    // Datos de conexión a la base de datos
    $host="localhost";
    $password = "cutelqui2022";
    $usuario = "cutelqui_user1";
    $base_datos = "cutelqui_database";

    // Realiza la conexión a la base de datos y la retorna
    $conn = mysqli_connect($host, $usuario, $password, $base_datos);
    return $conn;
}
