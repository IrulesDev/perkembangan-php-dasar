<?php

require_once "calculator.php";

try{
    $calculator = new calculator();

    echo "angka pertama : ";
    
    $a = (float)trim(fgets(STDIN));

    echo "angka kedua : ";
    
    $b = (float)trim(fgets(STDIN));

    echo "operasi yang di gunakan : ";
    
    $operation = trim(fgets(STDIN));
    if ($operation =! "+" && $operation =! "x" && $operation =! "-" && $operation =! "/"){
        throw new Exception("opertion tidak valid \n");
    }
    $result = $calculator->calculate($a,$b,$operation);
    
    echo "Hasil dari " . " $a " . " $operation " . " $b " . " = " . " $result ";
}
catch (Exception $e) {
    echo "Terjadi kesalahan ". $e->getMessage() . "\n";
}
