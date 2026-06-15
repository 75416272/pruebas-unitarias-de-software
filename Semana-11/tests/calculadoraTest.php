<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    private $calculadora;

    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }

    public static function proveedorDivisionNormal(): array
    {
        return [
            [10, 2, 5],
            [20, 4, 5],
            [15, 3, 5],
        ];
    }

    #[DataProvider('proveedorDivisionNormal')]
    public function testDividirNormal($dividendo, $divisor, $esperado): void
    {
        $resultado = $this->calculadora->dividir($dividendo, $divisor);

        $this->assertEquals($esperado, $resultado);
    }

    public function testDividirEntreCero(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->calculadora->dividir(35, 0);
    }

    public function testRaizCuadradaNormal(): void
    {
        $resultado = $this->calculadora->raizCuadrada(25);

        $this->assertEquals(5, $resultado);
    }

    public function testRaizCuadradaNegativa(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->calculadora->raizCuadrada(-25);
    }

    public function testFactorialNormal()
    {
        $resultado = $this->calculadora->factorial(5);

        $this->assertEquals(120, $resultado);
    }

    public function testFactorialCero()
    {
        $resultado = $this->calculadora->factorial(0);
        $this->assertEquals(1, $resultado);
    }

    public function testFactorialNegativo()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("No se puede calcular el factorial de un número negativo");

        $this->calculadora->factorial(-5);
    }
    
}