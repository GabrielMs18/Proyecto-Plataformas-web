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
				$.post("../../Controlador/MecanicosController.php", {
					'opcion': 'consultaxcodigo',
					'codigo': $("#codigo").val()
				}, respuesta1, 'json');
			});

			$("#guardar").click(function() {
				$.post("../../Controlador/MecanicosController.php",
					$("#datos").serialize(), respuesta2);
				window.location.href = "tablaMecanicos.php";
			});
		});

		function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
				results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		function cargardatos() {
			$.post("../../Controlador/MecanicosController.php", {
				'opcion': 'consultaxcodigo',
				'codigo': getParameterByName('id')
			}, respuesta1, 'json');
		}

		function respuesta1(arg) {
			$("#codigo").val(arg[0].id);
			$("#nombre").val(arg[0].nombre);
			$("#apellido").val(arg[0].apellido);
			$("#telefono").val(arg[0].telefono);
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
                <input type="text" class="form-control" name="opcion" value="actualizar" hidden />
                <legend>Datos Mecanico</legend>
                <label for="codigo">Nombre:</label>
                <input type="number" id="codigo" name="codigo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido del cliente">
                <label for="telefono">Telefono:</label>
                <input type="number" id="telefono" name="telefono" placeholder="EJ: 0923377972">
            </fieldset>
            <button type="button" class="boton"  id="guardar">Guardar</button>
        </form>
        <!-- <input type="submit" value="Enviar formulario" class="boton"> -->
    </main>
</body>
</html>
