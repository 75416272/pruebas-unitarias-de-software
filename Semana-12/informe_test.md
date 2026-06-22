# Reporte de Pruebas Unitarias

**Fecha:** 22/06/2026
**Responsable:** Solano Villaneda Angel

## Resultados

* **Total de pruebas:** 11
* **Pruebas pasadas:** 11
* **Pruebas fallidas:** 0

## Errores encontrados y corregidos

1. Cliente: No validaba nombre vacío → Se agregó validación.
2. Cliente: No validaba formato de email → Se agregó `filter_var()`.
3. Habitación: No validaba número positivo → Se agregó validación.
4. Habitación: No validaba precio positivo → Se agregó validación.
5. Habitación: Permitía reservar una habitación no disponible → Se agregó verificación y excepción.
6. Reserva: No validaba formato de fecha → Se agregó validación de fechas.
7. Reserva: Permitía fechas de ingreso en el pasado → Se agregó validación.
8. Reserva: No validaba que la fecha de salida sea posterior al ingreso → Se agregó validación.
9. Reserva: Calculaba incorrectamente los días de estadía → Se implementó `DateTime::diff()`.

## Conclusión

Las pruebas unitarias permitieron identificar y corregir errores en las clases Cliente, Habitación y Reserva. Después de realizar las correcciones, todas las pruebas fueron ejecutadas exitosamente obteniendo un resultado de 11 pruebas aprobadas y ninguna fallida, garantizando un funcionamiento más confiable del sistema.
