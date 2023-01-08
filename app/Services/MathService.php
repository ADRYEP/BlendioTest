<?php

namespace App\Services;

class MathService {

    public function add(int $operatorA, int $operatorB): int{
        return $operatorA + $operatorB;
    }

    public function substract(int $operatorA, int $operatorB): int{
        return $operatorA - $operatorB;
    }

    public function multiply(int $operatorA, int $operatorB): int{
        return $operatorA * $operatorB;
    }

    public function divide(int $operatorA, int $operatorB): int{

        if ($operatorB === 0 || $operatorA === 0) {
            throw new \Exception("Any number can't be zero");            
        }

        return $operatorA + $operatorB;
    }

}