<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <script type='text/javascript' src="../../js/jquery-1.7.1.min.js"> </script>
    <title>Document</title>

    <script type='text/javascript'>
        $(function() {
            $("#guardar").click(function() {
                $.post("../../Controlador/RepuestosController.php",
                    $("#datos").serialize(), respuesta);
                window.location.href = "tablaRepuestos.php";
            });
        });

        function respuesta(arg) {
            alert(arg);
        }
        window.onload = cargarcontroladorCombo;
    </script>

</head>

<body>
    <a href="tablaRepuestos.php" class="boton regresar">Regresar</a>
    <main class="contenedor seccion">
        <form id="datos">
        <input type="hidden" class="form-control" name="opcion" value="ingresar" />
            <fieldset>
                <legend>Datos Repuesto</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">
                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion"></textarea>
                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="stock" placeholder="EJ: 4">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio del repuesto">
            </fieldset>
            </form>
            <button type="button" class="boton" name="opcion" value="ingresar" id="guardar">Enviar Formulario</button>
    </main>
</body>

</html>