<?php
namespace App;

class Calc{
    public function sum (int $a, int $b):int{
        return $a+$b;
    }
    public function dif (int $a, int $b):int{
        return $a-$b;
    }
    public function mul (int $a, int $b):int{
        return $a*$b;
    }
}