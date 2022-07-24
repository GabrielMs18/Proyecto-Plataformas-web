<?php

require '../../Modelo/cn.php';
$db = new DataBase();
$con = $db->conectar();
$sql = $con->prepare("SELECT id, nombre, descripcion, precio FROM respuestos");
$sql->execute();
$resultado = $sql->fetchALL(PDO::FETCH_ASSOC);

?>
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
                window.location.href = "../Reparaciones/reparacionesActiva.php";
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
        }

        function respuesta2(arg) {
            alert(arg);
        }
        window.onload = cargardatos;
    </script>

</head>

<body>
    <a href="../Reparaciones/reparacionesActiva.php" class="boton regresar">Regresar</a>
    <h1 class="titulo">Escoger el repuesto</h1>
    <main class="contenedor seccion">
        <form id="datos">
            <input type="hidden" class="form-control" name="opcion" value="actualizar" />
            <legend>Datos Orden de pago</legend>
            <label for="codigo">ID:</label>
            <input type="number" id="codigo" name="codigo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <label for="cedula">cedula:</label>
            <input type="text" id="cedula" name="cedula">
            <label for="telefono">telefono:</label>
            <input type="text" id="telefono" name="telefono">
            <label for="mecanico">mecanico:</label>
            <input type="text" id="mecanico" name="mecanico">
            <label for="vehiculo">vehiculo:</label>
            <input type="text" id="vehiculo" name="vehiculo">
            <label for="marca">marca:</label>
            <input type="text" id="marca" name="marca">
            <label for="modelo">modelo:</label>
            <input type="text" id="modelo" name="modelo">
            <label for="placa">placa:</label>
            <input type="text" id="placa" name="placa">
            <label for="fallas">fallas:</label>
            <input type="text" id="fallas" name="fallas">

            <div class="contenedor_repuestos">

                <?php foreach ($resultado as $row) { ?>

                    <article class="repuestos">

                        <input type="text" id="repuesto" name="repuesto" value="<?php echo $row['nombre'] ?>"  ></input>
                        <label for="descripcion">Descripcion</label>
                        <p><?php echo $row['descripcion'] ?></p>

                        <label for="precio">Precio</label>
                        <input type= "number" id="precio" name="precio" value= "<?php echo $row['precio'] ?>" ></input>

                        <div class="boton-centrado">
                            <button type="button" class="boton" id="guardar">Seleccionar</button>
                        </div>
                    </article>

                <?php } ?>
            </div>
        </form>
    </main>
</body>

</html>