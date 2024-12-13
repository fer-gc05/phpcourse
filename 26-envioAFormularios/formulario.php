<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
    <h1>Formulario</h1>
    <form action="index.php" method="post">
        <div>
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" required />
        </div>
        <div>
            <label for="Apellido">Apellido</label>
            <input type="text" id="Apellido" name="Apellido" required />
        </div>
        <div>
            <label for="Edad">Edad</label>
            <input type="number" id="Edad" name="Edad" min="0" required />
        </div>
        <div>
            <label for="Asignatura">Asignatura</label>
            <select name="Asignatura[]" id="Asignatura" multiple>
                <option value="Matemáticas">Matemáticas</option>
                <option value="Lengua">Lengua</option>
                <option value="Inglés">Inglés</option>
                <option value="Historia">Historia</option>
                <option value="Geografía">Geografía</option>
            </select>
        </div>
        <div class="flex">
            <input type="checkbox" id="frutas" name="frutas">
            <label for="frutas">¿Te gustan las frutas?</label>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
</body>
</html>