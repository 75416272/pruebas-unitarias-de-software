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
        new Cliente("", "correo@gmail.com", "921398632");
    }

    public function testEmailInvalido()
    {
        $this->expectException(Exception::class);
        new Cliente("Angel", "angelgmail.com", "921398632");
    }
}