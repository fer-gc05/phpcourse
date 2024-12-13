<?php
ini_set('display_errors', 1);
/*
Para cargar un archivo en PHP, se utiliza el atributo enctype="multipart/form-data" en el formulario HTML. De esta forma, se indica al navegador que el formulario va a contener un archivo que se va a enviar al servidor.

Con la funcion $_FILES de PHP, se pueden obtener los datos del archivo que se ha subido al servidor. Esta función devuelve un array con la información del archivo, como el nombre, el tipo, la ruta temporal, el tamaño, etc.

Sintaxis:
$_FILES['nombre_del_campo']['propiedad'];

Ejemplos:

- $_FILES['archivo']['name']: Nombre del archivo.
- $_FILES['archivo']['type']: Tipo de archivo.
- $_FILES['archivo']['tmp_name']: Ruta temporal del archivo.
- $_FILES['archivo']['size']: Tamaño del archivo.
- $_FILES['archivo']['error']: Código de error.


*/

# Comprobamos el tipo de archivo usando la función mime_content_type()
/*
mime_content_type() es una función de PHP que devuelve el tipo MIME de un archivo.
Se puede utilizar para comprobar si un archivo es de un tipo concreto, como una imagen, un vídeo, un audio, etc.
*/
if (
    mime_content_type($_FILES['archivo']['tmp_name']) != 'image/jpeg' &&
    mime_content_type($_FILES['archivo']['tmp_name']) != 'image/png' &&
    mime_content_type($_FILES['archivo']['tmp_name']) != 'image/jpg'
) {
    echo 'Tipo de archivo incorrecto';
    exit();
} else {
    echo 'Tipo de archivo correcto';
}

echo '<br>';


/*
Para calcular el tamaño de un archivo en kilobytes (KB):
1. Se divide el tamaño del archivo en bytes (obtenido con $_FILES['archivo']['size']) entre 1024.
2. Si necesitas convertir a megabytes (MB), divide nuevamente entre 1024.

Por ejemplo:
- Un archivo de 3 MB equivale a 3 * 1024 KB, que son 3072 KB.
- Si se compara el tamaño del archivo en KB con un tamaño máximo permitido (en KB), simplemente usa la fórmula:

   $tamanoEnKB = $_FILES['archivo']['size'] / 1024;

Luego, puedes verificar si el tamaño está dentro del límite permitido:

   if ($tamanoEnKB > $maximoEnKB) {
       echo 'El archivo excede el tamaño permitido';
   } else {
       echo 'El archivo está dentro del tamaño permitido';
   }
*/
# Comprobamos el tamaño del archivo
if($_FILES['archivo']['size'] /1024 > 3072 ){
    echo 'El archivo es demasiado grande';
    exit();
} else {
    echo 'El archivo es correcto';
}

echo '<br>';

# Comprobamos la existencia del directorio y lo creamos si no existe
/*
Usamos la función file_exists() para comprobar si un directorio existe o no.
*/
!file_exists('archivos') ? mkdir('archivos', 0777) : 'El directorio ya existe';
chmod('archivos', 0777);

# Movemos el archivo a la carpeta archivos
/*
Usamos la función move_uploaded_file() para mover el archivo a la carpeta archivos.
*/
if (move_uploaded_file($_FILES['archivo']['tmp_name'], 'archivos/' . $_FILES['archivo']['name'])) {
    echo 'El archivo se ha subido correctamente';
} else {
    echo 'Ha ocurrido un error al subir el archivo';
}

/*
Ejericio:
- Realiza un pequeño programa que permita subir archivos al servidor. El programa debe comprobar el tipo de archivo, el tamaño y la existencia del directorio donde se van a guardar los archivos.
- Si el archivo es correcto, se debe mover a la carpeta archivos.
- Si el archivo no es correcto, se debe mostrar un mensaje de error.
- Si el directorio no existe, se debe crear.
- Si el directorio ya existe, se debe mostrar un mensaje indicándolo.
- Si el archivo se ha subido correctamente, se debe mostrar un mensaje de éxito.
- Si ha ocurrido un error al subir el archivo, se debe mostrar un mensaje de error.
- Utiliza las funciones mime_content_type(), file_exists() y move_uploaded_file() para realizar las comprobaciones necesarias.
- Nota: solo que acepte tipos de archivos de texto como:
  - .txt
   - .doc
   - .docx
   - .pdf
   - .xls
   - .xlsx
  Y de un tamaño máximo de 2.5MB.
*/