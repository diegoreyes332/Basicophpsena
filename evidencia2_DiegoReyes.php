<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Datos del desarrollador,
    nombre: DIEGO FERNANDO 
    apellido: REYES MOSQUERA
    programa de formacion: Desarrollo web con php
    evidencia: Taller "Uso de arreglos"
    Explicacion: Utilizar el arreglo dentro de una variable para despues imprimir o ser visible en el navegador
    en la sintaxis de php
     */
    /*Ejemplo 1:
        $colores = array (
        "Amarillo" => "Riqueza y alegria",
        "Verde" => "No se encuentra el significado.",
        "Rojo" => "No se encuentra el significado."
    );*/
    $personas = array (
        array ( "Juan Pérez", 
        "Cra. 45 # 45 - 56",
        "3456789", "23/12/1997", 
        "Amarillo", 
        "Riqueza y alegría."),
        array ( "Pablo Manrique",
        " Clle. 23 # 12 - 19 Sur",
        "3214567", "12/10/1980",
        "Verde",
        "No se encuentra el significado"),
        array ( "Nancy Peña", 
        " Av. 34 # 16 - 12 ", 
        "2135423", "07/06/2000", "Rojo",
         "No se encuentra el significado")
    );
    ?>
    <table width= "100%" border="1">
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha de cumpleaños</th>
            <th>Color favorito</th>
            <th>Significado</th>
        </tr>
        <?php
        /*$persona[0]=nombre */
        /*$persona[1]=direccion */
        foreach($personas as $persona){
            echo "
            <tr>
            <th>$persona[0]</th> 
            <th>$persona[1]</th>
            <th>$persona[2]</th>
            <th>$persona[3]</th>
            <th>$persona[4]</th>
            <th>$persona[5]</th>
        </tr>";
        }
        ?>
    </table>
</body>
</html>