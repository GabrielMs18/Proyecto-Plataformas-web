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
			$("#cedula").val(arg[0].descripcion);
			$("#telefono").val(arg[0].stock);
			$("#mecanico").val(arg[0].precio);
            $("#vehiculo").val(arg[0].precio);
            $("#marca").val(arg[0].precio);
            $("#modelo").val(arg[0].precio);
            $("#placa").val(arg[0].precio);
            $("#fallas").val(arg[0].precio);
		}
		function respuesta2(arg) {
			alert(arg);
		}
		window.onload = cargardatos;

    </script>
        
</head>

<body>
<a href="tablaRepuestos.php" class="boton regresar">Regresar</a>
<h1 class="titulo">Escoger el repuesto</h1>
    <main class="contenedor seccion">
        <form id="datos">
            <input type="hidden" class="form-control" name="opcion" value="actualizar"/>
            <input type="hidden" id="id" name="id" >
            <input type="hidden" id="nombre" name="nombre" >
            <input type="hidden"  id="cedula" name="cedula">
            <input type="hidden" id="telefono" name="telefono" >
            <input type="hidden" id="mecanico" name="mecanico" >
            <input type="hidden" id="vehiculo" name="vehiculo" >
            <input type="hidden" id="marca" name="marca" >
            <input type="hidden" id="modelo" name="modelo" >
            <input type="hidden" id="placa" name="placa" >
            <input type="hidden" id="fallas" name="fallas" >

            <div class="contenedor_repuestos">
            <?php foreach ($resultado as $row){ ?>
            <input type="hidden" name="opcion" value="ingresar" />
            <article class="repuestos">
                <h2 id="repuesto" name="repuesto"><?php echo $row['nombre'] ?></h2>
                <label for="descripcion">Descripcion</label>    
                <p><?php echo $row['descripcion'] ?></p>
                <label for="precio">Precio</label>
                <p id="precio" name="precio"><?php echo $row['precio'] ?></p> 
                <div class="boton-centrado">
                <button  type="button" class="boton"  id="guardar">Seleccionar</button>
                </div>
                
            </article>
            <?php } ?>
        </div>
        </form>
    </main>
</body>
</html>

