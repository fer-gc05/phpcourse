<?php

/*
Las sesiones son un mecanismo que nos permite almacenar información del usuario en el servidor.
Para iniciar una sesión, debemos llamar a la función session_start() al principio de nuestro script.

*/
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<nav class="bg-blue-500 text-white p-4 shadow-lg">
    <ul class="flex justify-center space-x-4">
        <li><a href="index.php" class="hover:underline">Inicio</a></li>
        <li><a href="login.php" class="hover:underline">Login</a></li>
        <li><a href="logout.php" class="hover:underline">Logout</a></li>
    </ul>
</nav>
<div class="flex-grow flex items-center justify-center">
    <p class="text-gray-700 text-lg">Bienvenido al sistema de sesiones</p>
</div>
<footer class="bg-gray-800 text-white text-center p-4">
    <p>&copy; 2024 Sistema de Sesiones</p>
</footer>
</body>
</html>
