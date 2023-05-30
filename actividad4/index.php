<!DOCTYPE html>
<html>

<head>
    <title>Actividad Semana 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include("biblioteca.php");

if(isset($_POST("enviar")))(
    $fila=$_POST("fila");
    $columna= $_POST("columna");
    $accion= $_POST("accion");
    $stringEscenario= $_POST("List_sillas");
)
?>