<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen">
<header class="bg-white shadow-md py-4">
    <nav class="container mx-auto flex justify-between items-center px-6">
        <h1 class="text-2xl font-bold text-purple-600">Mi Sitio</h1>
        <ul class="flex space-x-4">
            <li><a href="#" class="text-gray-600 hover:text-purple-500 transition">Inicio</a></li>
            <li><a href="#" class="text-gray-600 hover:text-purple-500 transition">Acerca</a></li>
            <li><a href="#" class="text-gray-600 hover:text-purple-500 transition">Contacto</a></li>
        </ul>
    </nav>
</header>

<main class="flex items-center justify-center h-full">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-center text-purple-600 mb-4">Calculadora Básica</h2>
        <form method="POST" class="space-y-4">
            <div>
                <label for="numero1" class="block text-gray-700">Número 1:</label>
                <input type="number" id="numero1" name="numero1" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label for="numero2" class="block text-gray-700">Número 2:</label>
                <input type="number" id="numero2" name="numero2" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label for="operacion" class="block text-gray-700">Operación:</label>
                <select id="operacion" name="operacion" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                    <option value="sumar">Sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="dividir">Dividir</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition">Calcular</button>
        </form>

        <?php

        /*
        Incluimos el archivo funcionesBasicas.php que contiene las funciones necesarias para realizar las operaciones matemáticas.
        Utilizamos include_once para incluir el archivo una sola vez.

        Usamos $_SERVER['REQUEST_METHOD'] para verificar si el formulario ha sido enviado con el metodo POST.
        Si es así, obtenemos los valores de los campos número1, número2 y operación.
        Dependiendo de la operación seleccionada, realizamos la operación correspondiente y mostramos el resultado.

        $_POST es un array asociativo que contiene variables pasadas al script a través del metodo POST de un formulario HTML.

        $_POST['numero1'] contiene el valor del campo número1.
        $_POST['numero2'] contiene el valor del campo número2.
        $_POST['operacion'] contiene el valor del campo operación.

        Dependiendo de la operación seleccionada, realizamos la operación correspondiente y mostramos el resultado.
        Esto mediante un switch que evalúa el valor de $_POST['operacion'] y realiza la operación correspondiente.

        Y finalmente, mostramos el resultado en un div con el mensaje "Resultado" y el valor del resultado.

        */

        include_once "funciones/funcionesBasicas.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];
            $resultado = null;

            switch ($operacion) {
                case 'sumar':
                    $resultado = sumarexample($numero1, $numero2);
                    break;
                case 'restar':
                    $resultado = restarexample($numero1, $numero2);
                    break;
                case 'multiplicar':
                    $resultado = multiplicarexample($numero1, $numero2);
                    break;
                case 'dividir':
                    $resultado = dividirexample($numero1, $numero2);
                    break;
                default:
                    $resultado = 'Operación no válida';
            }

            echo '<div class="mt-4 text-center">';
            echo '<p class="text-lg text-gray-700">Resultado: <span class="font-bold text-purple-600">' . $resultado . '</span></p>';
            echo '</div>';
        }

        /*
        Ejericios:
        Aplicar las otras funciones a la calculadora, como potenciacion y modulo.
        Nota: Primero realiza las funciones en el archivo funcionesBasicas.php
        */
        ?>
    </div>
</main>
</body>
</html>
