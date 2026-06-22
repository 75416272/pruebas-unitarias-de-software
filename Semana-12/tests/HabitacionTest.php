<?php

use PHPUnit\Framework\TestCase;
use App\Habitacion;

/**
 * @covers \App\Habitacion
 * @group habitacion
 */
class HabitacionTest extends TestCase
{
    public function testNumeroInvalido()
    {
        $this->expectException(Exception::class);

        new Habitacion(0, "Simple", 80);
    }

    public function testPrecioInvalido()
    {
        $this->expectException(Exception::class);

        new Habitacion(101, "Simple", 0);
    }

    public function testReservarHabitacion()
    {
        $habitacion = new Habitacion(101, "Simple", 80);

        $habitacion->reservar();

        $this->assertFalse($habitacion->isDisponible());
    }

    public function testReservarHabitacionNoDisponible()
    {
        $this->expectException(Exception::class);

        $habitacion = new Habitacion(101, "Simple", 80);

        $habitacion->reservar();
        $habitacion->reservar();
    }
}