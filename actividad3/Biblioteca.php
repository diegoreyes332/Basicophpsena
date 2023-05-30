<?php
class Biblioteca{
    public static function operacioneseraciones($n1, $n2, $op){
        $num1=$_POST[$n1];
        $num2=$_POST[$n2];
        $operacioneseraciones=$_POST[$op];  
     
        if( $op=="sumar"){
            $suma=$n1+$n2;
            return "el resultado de la suma es : ".$suma;
        }
        elseif ($op=="restar"){
            $resta=$n1-$n2;
            return "el resultado de la resta es : ".$resta;
        }
        elseif ($op=="multiplicar"){
            $mul=$n1*$n2;
            return "el resultado de la multiplicacion es : ".$mul;
        }
        elseif ($op=="dividir"){
            $div=$n1/$n2;
            return "el resultado de la division es : ".$div;
        }    
    }
}
?>