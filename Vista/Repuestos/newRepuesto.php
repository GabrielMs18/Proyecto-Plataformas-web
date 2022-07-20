<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <a class="boton regresar">Regresar</a>
    <main class="contenedor seccion">
        <form action="">
            <fieldset>
                <legend>Datos Repuesto</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">
                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion"></textarea>
                <label for="Stock">Stock:</label>
                <input type="number" id="Stock" name="Stock" placeholder="EJ: 4">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio del repuesto">
            </fieldset>
        </form>
        <input type="submit" value="Enviar formulario" class="boton">
    </main>
</body>
</html>