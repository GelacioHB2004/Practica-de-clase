<?php

function suma($val1, $val2) {
    return $val1 + $val2;
}

function resta($val1, $val2) {
    return $val1 - $val2;
}

function multiplicacion($val1, $val2) {
    return $val1 * $val2;
}

function division($val1, $val2) {
    if ($val2 == 0) {
        return "División por cero no es válida";
    } else {
        return $val1 / $val2;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $opcion = $_POST['opcion'];
    $resultado = ''; 
    if(is_numeric($valor1) && is_numeric($valor2)) {
        switch (strtolower($opcion)) 
        {
            case 'suma':
                $resultado = suma($valor1, $valor2);
                break;
            case 'resta':
                $resultado = resta($valor1, $valor2);
                break;
            case 'multiplicacion':
                $resultado = multiplicacion($valor1, $valor2);
                break;
            case 'division':
                $resultado = division($valor1, $valor2);
                break;
            default:
                $resultado = 'Operación no válida';
        }
    } else {
        $resultado = 'ingrese valores numéricos válidos';
    }
    
    echo "Resultado de la operación $opcion de $valor1 y $valor2 el resultado es: $resultado";
}
?>

