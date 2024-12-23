<?php

require_once "MathOperations.php";
 
 class Calculator {

    private $mathOperation;

    public function __construct()
    {
        $this->mathOperation = new MathOperation();
    }

    public function calculate($a,$b,$operation){
        
        switch($operation) {
            case "+";
            return $this->mathOperation->add($a,$b);
            // break;
            case "-";
            return $this->mathOperation->min($a,$b);
            // break;
            case "/";
            return $this->mathOperation->bagi($a,$b);
            // break;
            case "x";
            return $this->mathOperation->x($a, $b);
            // break;
            case "%";
            return $this->mathOperation->Modulus($a,$b);
            // break;
            case "^";
            return $this->mathOperation->Pangkat($a,$b);
            default;
            echo "Operation yang anda masukan salah";
        }

    }
 }