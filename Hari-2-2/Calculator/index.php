<?php

require_once "Calculator.php";

try{
    $calculator = new Calculator();

    echo "Masukan Angka Pertama : ";

    $a = (float) trim(fgets(STDIN));

    echo "Masukan Angka Kedua : ";

    $b = (float) trim(fgets(STDIN));

    echo "Operation yang di gunakan : ";

    $operation = trim(fgets(STDIN));

    if($operation != "+" && $operation != "-" && $operation != "/" && $operation != "*" && $operation != "%" && $operation != "^") {
        throw new Exception(' Operation yang anda masukan tidak valid \n');
    }

    $result = $calculator->calculate($a,$b,$operation);

    echo "Hasil dari " . $a . " " .$operation . " " . $b . " = " . $result . "\n";
   
} catch (Exception $e) {
    echo "Terjadi kesalahan". $e->getMessage() . "\n";
}