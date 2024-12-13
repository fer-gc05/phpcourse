<?php
/*
Para el envío de datos a través de formularios, se utiliza el método POST.
Para recibir los datos enviados a través de un formulario, se utiliza la variable superglobal $_POST.

Para validar que los campos no estén vacíos podemos utilizar la función isset() o la función empty(),
pero la función empty() también valida si el campo tiene un valor diferente de 0, false, null o un string vacío.
Así podemos validar si el campo tiene un valor diferente de 0, false, null o un string vacío.
Asegurando que el campo no esté vacío y que tenga un valor válido.
*/

# Validar si los campos existen antes de procesarlos
$nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : 'No especificado';
$apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : 'No especificado';
$edad = isset($_POST['Edad']) ?  $_POST['Edad'] : 'No especificado';

# Mostrar los datos enviados por el formulario
echo "Nombre: $nombre";
echo '<br><br>';
echo "Apellido: $apellido";
echo '<br><br>';
echo "Edad: $edad";
echo '<br><br>';
# Validar si se enviaron asignaturas seleccionadas y verificar si es un array
if (isset($_POST['Asignatura']) && is_array($_POST['Asignatura'])) {
    $asignaturas = $_POST['Asignatura'];
    echo 'Asignaturas seleccionadas:';
    foreach ($asignaturas as $asignatura) {
        echo "- $asignatura";
    }
} else {
    echo 'Asignaturas seleccionadas: Ninguna';
}
echo '<br><br>';
if (isset($_POST['frutas'])) {
    echo 'Te gustan las frutas: Sí';
} else {
    echo 'Te gustan las frutas: No';
}