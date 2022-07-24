<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type='text/javascript' src="../../js/jquery-1.7.1.min.js"> </script>
	<script type='text/javascript'>
		$(function() {
			$("#codigo").focusout(function() {
				$.post("../../Controlador/RepuestosController.php", {
					'opcion': 'consultaxcodigo',
					'codigo': $("#codigo").val()
				}, respuesta1, 'json');
			});

			$("#guardar").click(function() {
				$.post("../../Controlador/RepuestosController.php",
					$("#datos").serialize(), respuesta2);
				window.location.href = "tablaRepuestos.php";
			});
		});

		function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
				results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		function cargardatos() {
			$.post("../../Controlador/RepuestosController.php", {
				'opcion': 'consultaxcodigo',
				'codigo': getParameterByName('id')
			}, respuesta1, 'json');
		}

		function respuesta1(arg) {
			$("#codigo").val(arg[0].id);
			$("#nombre").val(arg[0].nombre);
			$("#descripcion").val(arg[0].descripcion);
			$("#stock").val(arg[0].stock);
			$("#precio").val(arg[0].precio);
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
        <form id="datos">
            <fieldset>
                <input type="hidden" class="form-control" name="opcion" value="actualizar"/>
                <legend>Datos Mecanico</legend>
                <label for="codigo">ID:</label>
                <input type="number" id="codigo" name="codigo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del repuesto">
                <label for="descripcion">descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" placeholder="descripcion del repuesto">
				<label for="stock">stock:</label>
                <input type="text" id="stock" name="stock" placeholder="stock del repuesto">
                <label for="precio">precio:</label>
                <input type="precio" id="precio" name="precio" placeholder="EJ: 0923377972">
            </fieldset>
            <button type="button" class="boton"  id="guardar">Guardar</button>
        </form>
        <!-- <input type="submit" value="Enviar formulario" class="boton"> -->
    </main>
</body>
</html>
