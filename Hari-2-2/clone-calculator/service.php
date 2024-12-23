<?php
 class serviceMath{
    function plus($a,$b){
        return $a + $b;
    }
    function min($a,$b){
        return $a - $b;
    }
    function kali($a,$b){
        return $a * $b;
    }
    function bagi($a,$b){
        if($b == 0){
            echo "tak terhingga";
        }
        return $a / $b;
    }
 }