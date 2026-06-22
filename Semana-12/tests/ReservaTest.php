<?php

use PHPUnit\Framework\TestCase;
use App\Cliente;
use App\Habitacion;
use App\Reserva;

/**
 * @covers \App\Reserva
 * @group reserva
 */
class ReservaTest extends TestCase
{
    public function testFechaIngresoInvalida()
    {
        $this->expectException(Exception::class);

        $cliente = new Cliente("Angel", "angel@gmail.com", "999999999");
        $habitacion = new Habitacion(101, "Simple", 100);

        new Reserva($cliente, $habitacion, "fecha-mal", "2026-12-20");
    }

    public function testFechaIngresoPasada()
    {
        $this->expectException(Exception::class);

        $cliente = new Cliente("Angel", "angel@gmail.com", "999999999");
        $habitacion = new Habitacion(101, "Simple", 100);

        new Reserva($cliente, $habitacion, "2020-01-01", "2026-12-20");
    }

    public function testFechaSalidaMenorIngreso()
    {
        $this->expectException(Exception::class);

        $cliente = new Cliente("Angel", "angel@gmail.com", "999999999");
        $habitacion = new Habitacion(101, "Simple", 100);

        new Reserva($cliente, $habitacion, "2026-12-20", "2026-12-19");
    }

    public function testCalcularTotal()
    {
        $cliente = new Cliente("Angel", "angel@gmail.com", "999999999");
        $habitacion = new Habitacion(101, "Simple", 100);

        $reserva = new Reserva($cliente, $habitacion, "2026-12-20", "2026-12-23");

        $this->assertEquals(300, $reserva->calcularTotal());
    }
}