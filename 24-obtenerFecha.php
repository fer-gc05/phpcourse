<?php
ini_set('display_errors', 1);

/*
En php podemos obtener la fecha actual utilizando la función date(). La función date() devuelve la fecha actual en el formato especificado. La sintaxis de la función date() es la siguiente:

date(formato, timestamp)

formato (opcional): especifica el formato de la fecha. Puede ser una cadena de formato predefinida o una cadena de formato personalizada. Si no se especifica el formato, se utiliza el formato predeterminado 'Y-m-d H:i:s'.

timestamp (opcional): especifica la marca de tiempo a partir de la cual se calculará la fecha. Si no se especifica el timestamp, se utiliza la fecha y hora actuales.

Ejemplo:

echo date('Y-m-d H:i:s'); // Salida: 2021-01-01 12:00:00

En este ejemplo, la función date() devuelve la fecha y hora actuales en el formato 'Y-m-d H:i:s'.

Formatos de fecha predefinidos
La función date() acepta una serie de formatos predefinidos para mostrar la fecha y la hora en diferentes formatos. Algunos de los formatos de fecha predefinidos más comunes son los siguientes:

d: Día del mes, con ceros iniciales (01 a 31)
j: Día del mes, sin ceros iniciales (1 a 31)
m: Mes, con ceros iniciales (01 a 12)
n: Mes, sin ceros iniciales (1 a 12)
Y: Año con cuatro dígitos (ej. 2021)
y: Año con dos dígitos (ej. 21)
H: Hora en formato de 24 horas, con ceros iniciales (00 a 23)
h: Hora en formato de 12 horas, con ceros iniciales (01 a 12)
i: Minutos, con ceros iniciales (00 a 59)
s: Segundos, con ceros iniciales (00 a 59)

A continuación se muestra un ejemplo de cómo utilizar la función date() con diferentes formatos predefinidos:

echo date('d/m/Y'); // Salida: 01/01/2021
echo date('H:i:s'); // Salida: 12:00:00
echo date('d/m/Y H:i:s'); // Salida: 01/01/2021 12:00:00
echo date('Y-m-d H:i:s'); // Salida: 2021-01-01 12:00:00
echo date('l, j F Y'); // Salida: Friday, 1 January 2021
echo date('D, j M y'); // Salida: Fri, 1 Jan 21
echo date('h:i A'); // Salida: 12:00 PM
echo date('h:i a'); // Salida: 12:00 pm
echo date('D, j M y h:i:s A'); // Salida: Fri, 1 Jan 21 12:00:00 PM
echo date('d/m/Y H:i:s A'); // Salida: 01/01/2021 12:00:00 PM

Antes de obtener la fecha actual, es importante establecer la zona horaria predeterminada en la que se encuentra el servidor. Esto se puede hacer utilizando la función date_default_timezone_set(). La función date_default_timezone_set() establece la zona horaria predeterminada utilizada por todas las funciones de fecha y hora en el script. La sintaxis de la función date_default_timezone_set() es la siguiente:

date_default_timezone_set(zona_horaria)

zona_horaria: especifica la zona horaria a utilizar. Puede ser una cadena de zona horaria válida (ej. 'America/New_York', 'Europe/Madrid', 'Asia/Tokyo', etc.).

Ejemplo:

date_default_timezone_set('America/New_York');

En este ejemplo, la función date_default_timezone_set() establece la zona horaria predeterminada en 'America/New_York'. A continuación, se puede utilizar la función date() para obtener la fecha y hora actual en la zona horaria especificada.
*/


date_default_timezone_set('America/Bogota');

# Obtener la fecha y hora actual
$horaActual = date('d-m-Y H:i:s');
echo 'La fecha y hora actual es: '.$horaActual;
echo '<br><br>';

# Obtener el día de la semana actual
$diaSemana = date('l');
echo 'Hoy es: '.$diaSemana;
echo '<br><br>';

# Obtener el día del mes actual
$diaMes = date('d');
echo 'Hoy es el día: '.$diaMes;
echo '<br><br>';

# Obtener el mes actual
$mes = date('F');
echo 'Estamos en el mes de: '.$mes;
echo '<br><br>';

# Obtener el año actual
$anio = date('Y');
echo 'Estamos en el año: '.$anio;
echo '<br><br>';

# Obtener la hora actual
$hora = date('H');
echo 'La hora actual es: '.$hora;
echo '<br><br>';

# Para que me devuelva las fechas en español haremos lo siguiente:
function fechaSpanol()
{
    $diaActual = date('d');
    $fechaDia = date('l');
    $fechaMes = date('F');
    $fechaAnio = date('Y');
    $dias = [
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado',
        'Sunday' => 'Domingo'
    ];
    $meses = [
        'January' => 'Enero',
        'February' => 'Febrero',
        'March' => 'Marzo',
        'April' => 'Abril',
        'May' => 'Mayo',
        'June' => 'Junio',
        'July' => 'Julio',
        'August' => 'Agosto',
        'September' => 'Septiembre',
        'October' => 'Octubre',
        'November' => 'Noviembre',
        'December' => 'Diciembre'
    ];
    $dia = $dias[$fechaDia];
    $mes = $meses[$fechaMes];

    $fechaFinal = $diaActual.' '.$dia.' de '.$mes.' del '.$fechaAnio;

    return $fechaFinal;
}

$fechaActual = fechaSpanol();
echo 'La fecha en español es: '.$fechaActual;

/*
Ejericio:
1. Obtener la fecha y hora actual en diferentes formatos utilizando la función date().
2. Crear una funcion a la cual le pases una fecha en el formato 'Y-m-d' y te devuelva la fecha en español,
   por ejemplo, si le pasas la fecha '2021-01-01', la función debería devolver '01 de Enero del 2021'.
   Ademas si no se introduce una fecha, la función debería devolver la fecha actual en español.
*/

