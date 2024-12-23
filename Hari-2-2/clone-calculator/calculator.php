<?php

require_once "service.php";

class calculator{
    private $service;

    function __construct(){
        $this->service = new serviceMath();
    }
    function calculate($a,$b,$operation){
     
        switch($operation){
            case "+";
            return $this->service->plus($a,$b);         
            
            case "-";
            return $this->service->min($a,$b);

            case "x";
            return $this->service->kali($a,$b);

            case "/";
            return $this->service->bagi($a,$b);
        }

    }
}