<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Validador;

class ValidadorTest extends TestCase
{
    private $validador;

    protected function setUp(): void
    {
        $this->validador = new Validador();
    }

    public function testValidarEdadNormal()
    {
        $resultado = $this->validador->validarEdad(18);

        $this->assertTrue($resultado);
    }

    public function testValidarEdadNegativa()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("La edad no puede ser un numero negativo");

        $this->validador->validarEdad(-5);
    }

    public function testValidarEdadMenor()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Es menor de edad");

        $this->validador->validarEdad(15);
    }

    public function testValidarEmailNormal()
    {
        $resultado = $this->validador->validarEmail('correo@ejemplo.com');

        $this->assertTrue($resultado);
    }

    public function testValidarEmailInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("El email ingresado no es válido");

        $this->validador->validarEmail("correoinvalido");
    }
    


    public function testValidarPasswordNormal()
    {
        $resultado = $this->validador->validarPassword("Abc12345");

        $this->assertTrue($resultado);
    }

    public function testValidarPasswordCorta()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Contraseña demasiado corta");

        $this->validador->validarPassword("aBc123");
    }

    public function testValidarPasswordSinNumero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Debe contener al menos un número");

        $this->validador->validarPassword("Abcdefgh");
    }
}