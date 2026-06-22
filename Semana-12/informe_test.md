# Reporte de Pruebas Unitarias

**Fecha:** 22/06/2026
**Responsable:** Solano Villaneda Angel Martin

## Resultados

* **Total de pruebas:** 12
* **Pruebas pasadas:** 12
* **Pruebas fallidas:** 0

## Errores encontrados y corregidos

1. Cliente: No validaba nombre vacío → Se agregó validación.
2. Cliente: No validaba formato de email → Se agregó `filter_var()`.
3. Habitación: No validaba número positivo → Se agregó validación.
4. Habitación: No validaba precio positivo → Se agregó validación.
5. Habitación: No verificaba la disponibilidad antes de reservar → Se agregó validación.
6. Habitación: Permitía reservar una habitación no disponible → Se agregó excepción.
7. Reserva: No validaba el formato de la fecha de ingreso → Se agregó validación.
8. Reserva: Permitía fechas de ingreso en el pasado → Se agregó validación.
9. Reserva: No validaba que la fecha de salida sea posterior a la fecha de ingreso → Se agregó validación.
10. Reserva: Calculaba incorrectamente los días de estadía → Se implementó `DateTime::diff()`.

## Resultado de ejecución

Las pruebas fueron ejecutadas utilizando PHPUnit con la opción:

```bash
vendor/bin/phpunit tests --testdox
```

Resultado obtenido:

```txt
OK (12 tests, 22 assertions)
```

## Conclusión

Las pruebas unitarias permitieron identificar y corregir errores en las clases Cliente, Habitación y Reserva. Después de realizar las correcciones, todas las pruebas fueron ejecutadas exitosamente obteniendo un resultado de 12 pruebas aprobadas y 22 verificaciones, garantizando un funcionamiento más confiable y seguro del sistema.
