<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
    <script type='text/javascript' src="../../js/jquery-1.7.1.min.js"> </script>
    <script type='text/javascript'>
        $(function () {
            $("#guardar").click(function () {
                $.post("../../Controlador/MecanicosController.php ",
                    $("#datos").serialize(), respuesta);
                window.location.href = "tablaMecanicos.php";
            });
        });

        function respuesta(arg) {
            alert(arg);
        }
        window.onload = cargarcontroladorCombo;
    </script>
</head>
<body>
    <a href="tablaMecanicos.php" class="boton regresar">Regresar</a>
    <main class="contenedor seccion">
        <form id="datos">
            <fieldset>
                <input type="hidden" name="opcion" value="ingresar" />
                <legend>Datos Mecanico</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido del cliente">
                <label for="telefono">Telefono:</label>
                <input type="number" id="telefono" name="telefono" placeholder="EJ: 0923377972">
            </fieldset>
            <button type="button" class="boton"  id="guardar">Guardar</button>
        </form>
    </main>
</body>
</html>
