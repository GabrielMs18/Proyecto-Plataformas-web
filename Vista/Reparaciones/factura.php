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
        $(function() {
            $("#codigo").focusout(function() {
                $.post("../../Controlador/ReparacionActivaController.php", {
                    'opcion': 'consultaxcodigo',
                    'codigo': $("#codigo").val()
                }, respuesta1, 'json');
            });

            $("#guardar").click(function() {
                $.post("../../Controlador/ReparacionActivaController.php",
                    $("#datos").serialize(), respuesta2);
                window.location.href = "index.html";
            });
        });

        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        function cargardatos() {
            $.post("../../Controlador/ReparacionActivaController.php", {
                'opcion': 'consultaxcodigo',
                'codigo': getParameterByName('id')
            }, respuesta1, 'json');
        }

        function respuesta1(arg) {
            $("#codigo").val(arg[0].Id);
            $("#descripcion").val(arg[0].descripcion);
            $("#fecha").val(arg[0].fecha_creacion);
            $("#estado").val(arg[0].estado);
        }

        function respuesta2(arg) {
            alert(arg);
        }
        window.onload = cargardatos;
    </script>
</head>

<body>
    <a href="tablaMecanicos.php" class="boton regresar">Regresar</a>
    <main class="contenedor seccion">
        <form id="datos" method="post" action="../../js/FPDF/facturas.php">
            <fieldset>
                <input type="hidden" name="opcion" value="ingresar" />
                <legend>Datos Mecanico</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">

                <label for="cedula">Apellido:</label>
                <input type="text" id="cedula" name="cedula" placeholder="Apellido del cliente">

                <label for="telefono">Telefono:</label>
                <input type="number" id="telefono" name="telefono" placeholder="EJ: 0923377972">

                <label for="mecanico">Telefono:</label>
                <input type="number" id="mecanico" name="mecanico" placeholder="EJ: 0923377972">

                <label for="vehiculo">Telefono:</label>
                <input type="number" id="vehiculo" name="vehiculo" placeholder="EJ: 0923377972">

                <label for="marca">Telefono:</label>
                <input type="number" id="marca" name="marca" placeholder="EJ: 0923377972">

                <label for="modelo">Telefono:</label>
                <input type="number" id="modelo" name="modelo" placeholder="EJ: 0923377972">

                <label for="placa">Telefono:</label>
                <input type="number" id="placa" name="placa" placeholder="EJ: 0923377972">

                <label for="fallas">Telefono:</label>
                <input type="number" id="fallas" name="fallas" placeholder="EJ: 0923377972">
            </fieldset>
            <input type="hidden" name="generar_factura" value="true">
            <button type="submit" class="boton" id="guardar">Guardar</button>
        </form>
    </main>
</body>

</html>