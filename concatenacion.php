<?php

/*
Concatenación e Interpolación en PHP

1. Concatenación:
   - Es el proceso de unir dos o más cadenas de texto usando el operador `.` (punto).
   - No modifica las variables originales; genera una nueva cadena.
   - Es útil para construir cadenas dinámicamente.
   - Ejemplo:
     $nombre = "Juan";
     $apellido = "Pérez";
     $nombreCompleto = $nombre . " " . $apellido; // Salida: Juan Pérez

2. Interpolación:
   - Consiste en insertar variables directamente dentro de una cadena de texto.
   - Solo funciona con cadenas delimitadas por comillas dobles (`"`) o heredoc (`<<<`).
   - Es más legible y conveniente para cadenas complejas.
   - Permite el uso de expresiones con `{}` para evitar ambigüedades.
   - Ejemplo:
     $nombre = "Juan";
     $edad = 25;
     echo "Hola, mi nombre es $nombre y tengo $edad años."; // Salida: Hola, mi nombre es Juan y tengo 25 años.

Diferencias clave:
- Concatenación:
  * Usa `.` para unir cadenas.
  * Menos legible en cadenas largas.
  * Ejemplo: "Hola, " . $nombre . "!"
- Interpolación:
  * Inserta variables dentro de `"..."`.
  * Solo se puede hacer cuando se usa comillas dobles.
  * Más legible y permite expresiones con `{}`.
  * Ejemplo: "Hola, $nombre!"

Ambos métodos son válidos, pero la interpolación es más limpia en la mayoría de los casos.
*/

$nombre = "Juan";
$apellido = "Pérez";
$nombreCompleto = $nombre . " " . $apellido; // Salida: Juan Pérez

# Usando concatenación
echo "Usando concatenación:";
echo '<br>';
echo "El nombre completo es: " . $nombreCompleto;

echo "<br><br>";

$nombre = "Juan";
$edad = 25;
# Usando interpolación
echo "Usando interpolación:";
echo '<br>';
echo "Hola, mi nombre es $nombre y tengo $edad años.";

echo "<br><br>";

# Interpolacion usando heredoc
$nombre = "Juan";
$pais = "México";

/*
Heredoc es una sintaxis en PHP diseñada para definir cadenas de texto multilínea de manera sencilla y legible.

Características principales:
- Permite escribir cadenas largas o estructuradas sin necesidad de concatenar o escapar caracteres especiales.
- Admite la interpolación de variables, lo que facilita incluir valores dinámicos.
- Es ideal para manejar contenido HTML, JSON, SQL o grandes bloques de texto.

Ejemplo de uso:
$nombre = "Juan";
$texto = <<<EOT
Hola, mi nombre es $nombre.
Este es un ejemplo de texto multilínea
escrito con la sintaxis Heredoc.
EOT;
echo $texto;
*/

echo '<br><br>';
echo "Usando heredoc:";
$mensaje = <<<MENSAJE
Hola, mi nombre es $nombre y vivo en $pais.
MENSAJE;
echo '<br><br>';
echo $mensaje;
