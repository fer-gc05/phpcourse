<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen">
<header class="bg-white shadow-md py-4">
    <?php
    include "inc/nav.php";
    ?>
</header>

<main class="flex items-center justify-center h-full">
    <div class="text-center">
        <?php
        require_once "inc/table.php";
        ?>
    </div>
</main>
</body>
</html>

