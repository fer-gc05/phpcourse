<?php

/*
  Operadores de incremento y decremento en PHP

  Incremento (++):
  - Operador prefijo (++$variable): Incrementa primero, luego retorna el valor
  - Operador postfijo ($variable++): Retorna el valor actual, luego incrementa

  Decremento (--):
  - Operador prefijo (--$variable): Decrementa primero, luego retorna el valor
  - Operador postfijo ($variable--): Retorna el valor actual, luego decrementa

  Ejemplos:
  $x = 5;
  echo ++$x;  // Imprime 6 (incrementa primero)
  echo $x++;  // Imprime 6 (retorna el valor actual, luego incrementa)
  echo $x;    // Imprime 7
 */

$valor1 = 12;

# Operador de incremento

# Preincremento
//echo ++$valor1;
echo '<br>';

# Postincremento
//echo $valor1++;
echo '<br>';

# Predecremento
echo --$valor1;
echo '<br>';

# Postdecremento
echo $valor1--;
