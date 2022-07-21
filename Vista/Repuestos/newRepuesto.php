<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <script type='text/javascript' src="../../js/jquery-1.7.1.min.js"> </script>
    <title>Document</title>
<<<<<<< HEAD

    <script type='text/javascript'>
        $(function() {
            $("#guardar").click(function() {
=======
    <script type='text/javascript' src="../../js/jquery-1.7.1.min.js"> </script>
    <script type='text/javascript'>
        $(function () {
            $("#guardar").click(function () {
>>>>>>> 93ea0e8d31227d127f3a16c9dab0bdd12ff177e3
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
<<<<<<< HEAD

=======
>>>>>>> 93ea0e8d31227d127f3a16c9dab0bdd12ff177e3
</head>

<body>
    <a href="tablaRepuestos.php" class="boton regresar">Regresar</a>
    <main class="contenedor seccion">
        <form id="datos">
<<<<<<< HEAD
        <input type="hidden" class="form-control" name="opcion" value="ingresar" />
=======
>>>>>>> 93ea0e8d31227d127f3a16c9dab0bdd12ff177e3
            <fieldset>
                <input type="hidden" name="opcion" value="ingresar" />
                <legend>Datos Repuesto</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">
                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion"></textarea>
<<<<<<< HEAD
                <label for="stock">Stock:</label>
=======
                <label for="Stock">Stock:</label>
>>>>>>> 93ea0e8d31227d127f3a16c9dab0bdd12ff177e3
                <input type="number" id="stock" name="stock" placeholder="EJ: 4">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio del repuesto">
            </fieldset>
<<<<<<< HEAD
            </form>
            <button type="button" class="boton" name="opcion" value="ingresar" id="guardar">Enviar Formulario</button>
=======
            <button type="button" class="boton"  id="guardar">Guardar</button>
        </form>
        <!-- <input type="submit" value="Enviar formulario" class="boton"> -->
>>>>>>> 93ea0e8d31227d127f3a16c9dab0bdd12ff177e3
    </main>
</body>

</html>