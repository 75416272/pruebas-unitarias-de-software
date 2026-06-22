<?php

use PHPUnit\Framework\TestCase;
use App\Habitacion;

/**
 * @covers \App\Habitacion
 * @group habitacion
 */
class HabitacionTest extends TestCase
{
    public function testNumeroCero()
    {
        $this->expectException(Exception::class);
        new Habitacion(0, "Simple", 80);
    }

    public function testNumeroNegativo()
    {
        $this->expectException(Exception::class);
        new Habitacion(-5, "Simple", 80);
    }

    public function testPrecioCero()
    {
        $this->expectException(Exception::class);
        new Habitacion(101, "Simple", 0);
    }

    public function testPrecioNegativo()
    {
        $this->expectException(Exception::class);
        new Habitacion(101, "Simple", -50);
    }

    public function testReservarHabitacionDisponible()
    {
        $habitacion = new Habitacion(101, "Simple", 100);

        $this->assertTrue($habitacion->isDisponible());
        $this->assertEquals(101, $habitacion->getNumero());
        $this->assertEquals("Simple", $habitacion->getTipo());
        $this->assertEquals(100, $habitacion->getPrecio());

        $habitacion->reservar();

        $this->assertFalse($habitacion->isDisponible());
    }

    public function testReservarHabitacionNoDisponible()
    {
        $this->expectException(Exception::class);

        $habitacion = new Habitacion(101, "Simple", 100);
        $habitacion->reservar();
        $habitacion->reservar();
    }
}