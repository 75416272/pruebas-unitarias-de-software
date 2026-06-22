<?php

namespace App;

class Reserva
{
    private Cliente $cliente;
    private Habitacion $habitacion;
    private string $fechaIngreso;
    private string $fechaSalida;
    
    public function __construct(Cliente $cliente, Habitacion $habitacion, string $fechaIngreso, string $fechaSalida)
    {
        $ingreso = \DateTime::createFromFormat('Y-m-d', $fechaIngreso);
        $salida = \DateTime::createFromFormat('Y-m-d', $fechaSalida);

        if (!$ingreso || $ingreso->format('Y-m-d') !== $fechaIngreso) {
            throw new \Exception("Fecha de ingreso inválida");
        }

        if ($ingreso < new \DateTime('today')) {
            throw new \Exception("La fecha de ingreso no puede ser pasada");
        }

        if (!$salida || $salida <= $ingreso) {
            throw new \Exception("La fecha de salida debe ser posterior al ingreso");
        }
        $this->cliente = $cliente;
        $this->habitacion = $habitacion;
        $this->fechaIngreso = $fechaIngreso;
        $this->fechaSalida = $fechaSalida;
    }
    
    public function calcularTotal(): float
    {
        $ingreso = new \DateTime($this->fechaIngreso);
        $salida = new \DateTime($this->fechaSalida);

        $dias = $ingreso->diff($salida)->days;

        return $dias * $this->habitacion->getPrecio();
    }
}
