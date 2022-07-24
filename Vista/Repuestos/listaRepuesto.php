<?php

require '../../Modelo/cn.php';
$db = new DataBase();
$con = $db->conectar();
$sql = $con->prepare("SELECT id, nombre, descripcion, precio FROM respuestos");
$sql->execute();
$resultado = $sql->fetchALL(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['codigo'];
    $repuesto =  $_POST['repuesto'];
    $precio = $_POST['precio'];
    $repuesto1 =  $_POST['repuesto1'];
    $precio1 =  $_POST['precio1'];

    $query = $con->prepare("UPDATE reparacion SET repuesto = '$repuesto + $repuesto1',  precio = '$precio ' WHERE id = $id");
    $query->execute();
    $resultado = $query->fetchALL(PDO::FETCH_ASSOC);
}

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

            // $("#guardar").click(function() {
            //     $.post("../../Controlador/ReparacionActivaController.php",
            //         $("#datos").serialize(), respuesta2);
            //     window.location.href = "../Reparaciones/reparacionesActiva.php";
            // });
        });

        function guardarv() {
            header('Location: ../Reparaciones/reparacionesActiva.php');
        }

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
            $("#repuesto1").val(arg[0].repuesto);
            $("#precio1").val(arg[0].precio);

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
        <form id="datos" method="post" action="listaRepuesto.php">
            <!-- <input type="hidden" class="form-control" name="opcion" value="actualizar" /> -->
            <legend>Datos Orden de pago</legend>

            <div class="container py-3 m-auto-righ m-auto-left">
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <?php foreach ($resultado as $row) { ?>
                        <label for="codigo">ID:</label>
                        <input type="number" id="codigo" name="codigo">
                        <input type="number" id="codigo" name="codigo">

                        <div class="col">

                            <div class="card mb-1 rounded-3 shadow-sm border-primary">
                                <form id="datos" method="post">

                                    <div class="card-body">
                                        <input type="text" id="repuesto" name="repuesto" value="<?php echo $row['nombre'] ?>"></input>
                                        <input type="hidden" id="repuesto1" name="repuesto1"></input>

                                        <label for="descripcion">Descripcion</label>
                                        <p><?php echo $row['descripcion'] ?></p>

                                        <label for="precio">Precio</label>
                                        <input type="number" id="precio" name="precio" value="<?php echo $row['precio'] ?>"></input>
                                        <input type="hidden" id="precio1" name="precio1"></input>


                                        <button type="submit" class="boton" id="guardar" onClick="guardarv()">Recarga ahora!!</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php    } ?>
                </div>
            </div>
            <!-- <div class="contenedor_repuestos">

                <?php foreach ($resultado as $row) { ?>

                    <article class="repuestos">

                        <input type="text" id="repuesto" name="repuesto" value="<?php echo $row['nombre'] ?>"  ></input>
                        <label for="descripcion">Descripcion</label>
                        <p><?php echo $row['descripcion'] ?></p>

                        <label for="precio">Precio</label>
                        <input type= "number" id="precio" name="precio" value= "<?php echo $row['precio'] ?>" ></input>

                        <div class="boton-centrado">
                            <button type="button" class="boton" name="btneviar" id="guardar">Seleccionar</button>
                        </div>
                    </article>

                <?php } ?>
            </div>
        </form> -->
    </main>
</body>

</html>