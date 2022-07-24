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
                window.location.href = "reparacionesActiva.php";
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
            $("#codigo").val(arg[0].id);
            $("#nombre").val(arg[0].nombre);
            $("#cedula").val(arg[0].cedula);
            $("#telefono").val(arg[0].telefono);
            $("#mecanico").val(arg[0].mecanico);
            $("#vehiculo").val(arg[0].vehiculo);
            $("#marca").val(arg[0].marca);
            $("#modelo").val(arg[0].modelo);
            $("#placa").val(arg[0].placa);
            $("#fallas").val(arg[0].fallas);
            $("#repuesto").val(arg[0].repuesto);
            $("#precio").val(arg[0].precio);
        }

        function respuesta2(arg) {
            alert(arg);
        }
        window.onload = cargardatos;
    </script>
</head>

<body>
    <a href="reparacionesActiva.php" class="boton regresar">Regresar</a>
    <main class="contenedor seccion">
        <form id="datos" method="post" action="../../js/FPDF/facturas.php">
            <fieldset>
                <input type="hidden" name="opcion" value="actualizar" />
                <input type="hidden" id="codigo" name="codigo">
                <legend>Datos Mecanico</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">

                <label for="cedula">Cedula:</label>
                <input type="text" id="cedula" name="cedula" placeholder="Apellido del cliente">

                <label for="telefono">Telefono:</label>
                <input type="number" id="telefono" name="telefono" placeholder="EJ: 0923377972">

                <label for="mecanico">Mecanico:</label>
                <input type="text" id="mecanico" name="mecanico" placeholder="EJ: 0923377972">

                <label for="mecanico">Mecanico:</label>
                <input type="text" id="vehiculo" name="vehiculo" placeholder="EJ: 0923377972">

                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" placeholder="EJ: 0923377972">

                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" placeholder="EJ: 0923377972">

                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa" placeholder="EJ: 0923377972">

                <label for="fallas">Fallas:</label>
                <input type="text" id="fallas" name="fallas" placeholder="EJ: 0923377972">

                <input type="hidden" id="repuesto" name="repuesto" placeholder="EJ: 0923377972">

                <input type="hidden" id="precio" name="precio" placeholder="EJ: 0923377972">
            </fieldset>
            <input type="hidden" name="generar_factura" value="true">
            <div class="botones">
            <button type="button" class="boton" id="guardar">Guardar</button>
            <button type="submit" class="boton">Generar Factura</button>
            </div>
        </form>
    </main>
</body>

</html>