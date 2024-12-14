<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carga de archivos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Sube tu archivo</h2>
    <form action="carga.php" method="post" enctype="multipart/form-data" class="formulario-ajax">
        <div class="mb-4">
            <label for="archivo" class="block text-sm font-medium text-gray-700">Selecciona un archivo:</label>
            <input type="file" name="archivo" id="archivo" accept=".jpeg, .png, .jpg" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                Enviar
            </button>
        </div>
    </form>
</div>
<script src="ajax.js"></script>
</body>
</html>
