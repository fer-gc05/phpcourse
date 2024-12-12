<?php
/**
 * Guía Completa de Asignación por Referencia en PHP
 *
 * La asignación por referencia permite que múltiples variables
 * apunten a la misma ubicación de memoria, compartiendo el mismo valor.
 */

// 1. Asignación por Valor (Comportamiento Predeterminado)
$original = 'Colombia';
$copia = $original;  // Se crea una copia independiente
$copia = 'Perú';     // Cambiar $copia NO afecta $original

echo "Asignación por Valor:\n";
echo "Original: $original\n";   // Imprimirá 'Colombia'
echo "Copia: $copia\n";         // Imprimirá 'Perú'

// 2. Asignación por Referencia (usando &)
$pais = 'Colombia';
$referencia = &$pais;  // $referencia apunta al MISMO espacio de memoria
$referencia = 'Perú';  // Cambiar $referencia MODIFICA $pais

echo "\nAsignación por Referencia:\n";
echo "País: $pais\n";           // Imprimirá 'Perú'
echo "Referencia: $referencia\n";  // Imprimirá 'Perú'

// 3. Referencias con Arreglos
$frutas = ['manzana', 'banana', 'naranja'];
$frutasCopia = $frutas;         // Copia independiente
$frutasReferencia = &$frutas;   // Referencia al mismo arreglo

$frutasReferencia[] = 'uva';    // Añade un elemento al arreglo original
echo "\nReferencias con Arreglos:\n";
print_r($frutas);               // Incluirá 'uva'
print_r($frutasCopia);          // NO incluirá 'uva'

/**
 * EJERCICIOS PARA PRACTICAR
 *
 * 1. Crea un programa que:
 *    - Declare un arreglo de números
 *    - Cree una referencia al arreglo
 *    - Modifica la referencia
 *    - Imprima el arreglo original
 *
 * 2. Escribe una función que reciba un arreglo por referencia
 *    y agregue un elemento al final sin usar return
 *
 * 3. Experimenta con referencias de variables escalares
 *    y observa cómo los cambios afectan a la variable original
 */