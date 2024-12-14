<?php

session_start();

/*
Para cerrar una sesión, debemos llamar a la función session_destroy().
*/
session_destroy();

echo '<script>
window.location.href="index.php";
</script>';
