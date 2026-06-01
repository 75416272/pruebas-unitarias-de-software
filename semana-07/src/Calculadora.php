<?php

namespace App;

class Calculadora
{
    public function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function restar($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function dividir($num1, $num2)
    {
        if ($num2 == 0) {
            throw new \Exception("División entre cero");
        }

        return $num1 / $num2;
    }
}