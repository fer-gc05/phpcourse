<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<nav class="bg-white p-6 rounded-lg shadow-lg w-96">
    <form action="login.php" method="post" class="space-y-4">
        <div>
            <label for="username" class="block text-gray-700 font-medium">Usuario</label>
            <input type="text" name="username" id="username"  class="w-full p-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Ingresa tu usuario">
        </div>
        <div>
            <label for="password" class="block text-gray-700 font-medium">Contraseña</label>
            <input type="password" name="password" id="password" class="w-full p-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Ingresa tu contraseña">
        </div>
        <div>
            <input type="submit" value="Iniciar sesión" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer">
        </div>
    </form>
</nav>
</body>
</html>
