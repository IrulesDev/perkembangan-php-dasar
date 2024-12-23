<?php

class MathOperation {

    public function add($a,$b){
        return $a + $b;
    }

    public function min($a,$b){
        return $a - $b;
    }

    public function x($a,$b){
        return $a * $b;
    }

    public function bagi($a,$b){
        if($b == 0) {
            throw new Exception(' Angka 0 tidak bisa di bagi');
        }
        return $a / $b;
    }

    public function Modulus($a,$b){
        return $a % $b ;
    }

    public function Pangkat($a,$b){
        return $a ** $b;
    }

}