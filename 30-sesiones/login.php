<?php

if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    echo 'Bienvenido ' . $_SESSION['username'];

    /*
    Para redirigir al usuario a otra página, podemos utilizar la función header() de PHP.
    Esta función nos permite enviar encabezados HTTP al navegador del usuario.
    Para usarla, debemos asegurarnos de que no se haya enviado ningún contenido al navegador antes de llamar a esta función.
    */

    # Si los encabezados ya fueron enviados, utilizamos JavaScript para redirigir al usuario.
    if(headers_sent()){
        echo '<script>window.location.href="sesiones.php";</script>';
    }else{
        header('Location: sesiones.php');
    }

}else{
    echo 'Usuario o contraseña incorrectos';
}