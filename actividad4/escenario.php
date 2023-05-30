<?php
function Escenario($ListEscenario){
    //Se crea la tabla y sus encabezados
echo "<table class='tg' border='1' style='margin:auto;'>";
            echo "<tr>";
            echo "<th colspan='6'>Escenario</th>";
            echo "<tr>";
                /*-- Se crean los encabezados de las tabla*/
                echo "<th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th> 
                <th>5</th>
            </tr>";
    //Se recorre el Array mediante con un foreach y se imprime cada fila y columna de la tabla
$i=1;
foreach ($ListEscenario as $fila) {
    echo "<tr>";
       echo "<th>";
       echo $i;
       echo "</th>";
    foreach ($fila as $silla) {
        echo "<td>";
        echo $silla;
        echo "</td>";
    }
    echo "</tr>";
    $i++;
    }
echo "</table>";
}
?>
Se crea la función responsable de procesar las acciones del usuario, al liberar, reservar o comprar un puesto ubicado en determinada fila, la biblioteca que contiene la acción se llamará "accion.php"

<?php
function Accion($fila,$puesto,$accion,$ListEscenario){
        //Se evalua la opción del usuario dependiendo de lo contenido en el Array
        //Si el puesto elegido por el usuario esta libre se modifica el Array con la acción elegida
        if($ListEscenario[$fila-1][$puesto-1]=="L"){
            $ListEscenario[$fila-1][$puesto-1]=$accion;
        }
        //Si el puesto elegido por el usuario esta vendido se muestra una alerta con notificando en cada caso lo sucedido
        else if($ListEscenario[$fila-1][$puesto-1]=="V"){
            echo "<script>alert('El puesto ya esta vendido";
            if($accion=="L"){echo " no se puede liberar";}
            else if($accion=="R"){echo " no se puede reservar";}
            else if($accion=="V"){echo " no se puede volver a vender";}
            echo "')";
            echo "</script>'";
        }
        //Si el puesto elegido por el usuario esta reservado y la accion es reservar se muestra una alerta indicando que ya esta reservado
        else if($ListEscenario[$fila-1][$puesto-1]=="R" && $accion=="R"){
            echo "<script>
            alert('El puesto ya esta Reservado');
            </script>'";
        }
        //Si el puesto esta reservado y la accion es diferente a reservar se modifica el array con la accion elegida por el usuario
        else if($ListEscenario[$fila-1][$puesto-1]=="R" && $accion!="R"){
            $ListEscenario[$fila-1][$puesto-1]=$accion;
        }
        //Se retorna el Array modificado
        return $ListEscenario;
}
?>