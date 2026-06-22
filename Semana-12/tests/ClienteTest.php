<?php

use PHPUnit\Framework\TestCase;
use App\Cliente;

/**
 * @covers \App\Cliente
 * @group cliente
 */
class ClienteTest extends TestCase
{
    public function testNombreVacio()
    {
        $this->expectException(Exception::class);

        new Cliente("", "correo@gmail.com", "999999999");
    }

    public function testEmailInvalido()
    {
        $this->expectException(Exception::class);

        new Cliente("Angel", "correo_malo", "999999999");
    }

    public function testClienteValido()
    {
        $cliente = new Cliente(
            "Angel",
            "angel@gmail.com",
            "999999999"
        );

        $this->assertEquals(
            "Angel",
            $cliente->getNombre()
        );
    }
}