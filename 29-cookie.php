<?php
/*
Las cookies son pequeños archivos de texto que se almacenan en la computadora del usuario.
Las cookies se pueden usar para rastrear la información del usuario.

En php se pueden crear cookies con la función setcookie().
La función setcookie() toma tres argumentos:
1. El nombre de la cookie
2. El valor de la cookie
3. El tiempo de vida de la cookie (opcional)

Ejemplo:
setcookie("user", "John Doe", time() + 3600, "/");
En este ejemplo, la cookie llamada "user" se establece con el valor "John Doe" y expira después de 3600 segundos (1 hora).

Para acceder a las cookies, se puede usar la variable global $_COOKIE.
Ejemplo:
echo $_COOKIE["user"];
Este código imprimirá el valor de la cookie "user".
*/
setcookie('Idioma', 'es', time()+60*60*24*30, '/', 'localhost', false, false);

# Para eliminar una cookie, se puede establecer el tiempo de vida de la cookie a una fecha pasada.
# Ejemplo:
# setcookie("user", "", time() - 3600);
?>

<!doctype html>x
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1><?php echo $_COOKIE['Idioma']; ?></h1>
</body>
</html>
