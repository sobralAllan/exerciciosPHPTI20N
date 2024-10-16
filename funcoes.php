<?php
    $num1 = 0;
    $num2 = 0;

    function somar($num1, $num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do método

    function dividir($num1, $num2){
        if($num2 > 0){
            return $num1 / $num2;
        }else{
            return "Impossível dividir por zero!";
        }
    }//fim do método

    function mostrarNumeros($num1, $num2){
        $resultado = "";
        for($i=$num1; $i <= $num2; $i++){
            $resultado .= "\n".$i;
        }//fim do for
        return $resultado;
    }//fim do método






?>