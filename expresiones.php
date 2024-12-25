<?php

/**
 * Las expresiones regulares en PHP son patrones utilizados para buscar, coincidir o manipular
 * secuencias de caracteres en cadenas de texto.
 *
 * PHP proporciona funciones como `preg_match`, `preg_match_all`, `preg_replace`, y `preg_split`
 * para trabajar con expresiones regulares basadas en la sintaxis de PCRE (Perl Compatible Regular Expressions).
 *
 * Ejemplo de uso:
 * - Validación de formatos (como correos electrónicos, números de teléfono, etc.).
 * - Extracción de partes específicas de una cadena.
 * - Reemplazo de patrones en texto.
 */

// Ejemplo 1: Validar un número de teléfono
$telefono = '+34 600 123 456';
$patronTelefono = '/^\+?\d{1,4}[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{3}$/';
if (preg_match($patronTelefono, $telefono)) {
    echo "Ejemplo 1: El número de teléfono es válido.\n";
} else {
    echo "Ejemplo 1: El número de teléfono no es válido.\n";
}

// Ejemplo 2: Extraer hashtags de un texto
$textoConHashtags = 'Este es un #ejemplo de texto con #hashtags para #PHP8';
$patronHashtags = '/#(\w+)/';
preg_match_all($patronHashtags, $textoConHashtags, $hashtags);
echo "Ejemplo 2: Hashtags encontrados:\n";
print_r($hashtags[0]);

// Ejemplo 3: Verificar si una cadena contiene solo letras y números
$cadena = 'abc123';
$patronAlfanumerico = '/^[a-zA-Z0-9]+$/';
if (preg_match($patronAlfanumerico, $cadena)) {
    echo "Ejemplo 3: La cadena contiene solo letras y números.\n";
} else {
    echo "Ejemplo 3: La cadena contiene caracteres no válidos.\n";
}

// Ejemplo 4: Validar una dirección IP
$ip = '192.168.1.1';
$patronIP = '/^(\d{1,3}\.){3}\d{1,3}$/';
if (preg_match($patronIP, $ip)) {
    echo "Ejemplo 4: La dirección IP es válida.\n";
} else {
    echo "Ejemplo 4: La dirección IP no es válida.\n";
}

// Ejemplo 5: Extraer palabras que comienzan con una letra específica
$texto = 'Rápido y radiante el río rueda por la roca';
$patronLetra = '/\b[rR]\w*/';
preg_match_all($patronLetra, $texto, $palabras);
echo "Ejemplo 5: Palabras que comienzan con 'R' o 'r':\n";
print_r($palabras[0]);

// Ejemplo 6: Reemplazar múltiples espacios por uno solo
$textoConEspacios = 'Esto   es  un    texto   con   muchos   espacios.';
$textoNormalizado = preg_replace('/\s+/', ' ', $textoConEspacios);
echo "Ejemplo 6: Texto normalizado: $textoNormalizado\n";

// Ejemplo 7: Validar un código postal (formato 5 dígitos)
$codigoPostal = '28080';
$patronCP = '/^\d{5}$/';
if (preg_match($patronCP, $codigoPostal)) {
    echo "Ejemplo 7: El código postal es válido.\n";
} else {
    echo "Ejemplo 7: El código postal no es válido.\n";
}

// Ejemplo 8: Extraer las etiquetas HTML de un texto
$html = '<p>Esto es un <b>ejemplo</b> de texto con <i>etiquetas</i>.</p>';
$patronHTML = '/<[^>]+>/';
preg_match_all($patronHTML, $html, $etiquetas);
echo "Ejemplo 8: Etiquetas HTML encontradas:\n";
print_r($etiquetas[0]);

// Ejemplo 9: Reemplazar todas las vocales por un asterisco
$textoConVocales = 'Las vocales serán reemplazadas.';
$textoSinVocales = preg_replace('/[aeiouáéíóú]/i', '*', $textoConVocales);
echo "Ejemplo 9: Texto sin vocales: $textoSinVocales\n";

// Ejemplo 10: Validar un nombre de usuario
$usuario = 'user_123';
$patronUsuario = '/^[a-zA-Z0-9_]{3,20}$/';
if (preg_match($patronUsuario, $usuario)) {
    echo "Ejemplo 10: El nombre de usuario es válido.\n";
} else {
    echo "Ejemplo 10: El nombre de usuario no es válido.\n";
}

// Ejemplo 11: Extraer todas las URLs de un texto
$textoConURLs = 'Visita https://example.com o http://test.com para más información.';
$patronURL = '/https?:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,}(\/\S*)?/';
preg_match_all($patronURL, $textoConURLs, $urls);
echo "Ejemplo 11: URLs encontradas:\n";
print_r($urls[0]);

// Ejemplo 12: Validar una fecha en formato DD/MM/YYYY
$fecha = '25/12/2024';
$patronFecha = '/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/';
if (preg_match($patronFecha, $fecha)) {
    echo "Ejemplo 12: La fecha es válida.\n";
} else {
    echo "Ejemplo 12: La fecha no es válida.\n";
}

// Ejemplo 13: Dividir una cadena en oraciones
$textoOraciones = 'Hola. ¿Cómo estás? Esto es un ejemplo. ¡Dividimos por oraciones!';
$oraciones = preg_split('/(?<=[.?!])\s+/', $textoOraciones);
echo "Ejemplo 13: Oraciones divididas:\n";
print_r($oraciones);
