<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">

  <title>Perfil</title>
  <script type='text/javascript' src="../../js/jquery-1.7.1.min.js"> </script>
  <script type='text/javascript'>
    function cargarcontrolador() {

      $.post("../../Controlador/RepuestosController.php", {
        'opcion': 'consultar'
      }, respuesta);
    }

    function respuesta(arg) {
      $("#datos tbody").append(arg);
    }

    function eliminar(codigo)
    {
      $.post("../../Controlador/RepuestosController.php",
        { 'opcion': 'eliminar', 'id': codigo }, respuesta);

      window.location.href = "tablaRepuestos.php";
    }

    function editar(codigo) {
      document.location.href = "updateRepuesto.php?id=" + codigo;
    }
    window.onload = cargarcontrolador;
  </script>
</head>

<body
  background="https://blakesguam.com/wp-content/uploads/2016/08/photodune-6207464-geometric-polygon-abstract-background-l-4.jpg"
  class="cuerpo">

  <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 970px;">
      <a href="../index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Taller Juan Pueblo</span>
      </a>
      <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="../Opciones.html" class="nav-link text-white  " aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Reparaciones
                </a>
            </li>
            <li>
                <a href="../Reparaciones/reparacionesActiva.php" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Reparaciones en curso
                </a>
            </li>
            <li>
                <a href="../Mecanicos/tablaMecanicos.php" class="nav-link text-white ">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Mecanicos
                </a>
            </li>
            <li>
                <a href="" class="nav-link text-white active">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Repuestos
                </a>
            </li>
        </ul>
        <hr>
    </div>

    <div class="edi">
      <h1 class="text-center">Repuestos</h1>
      <button type="button" class="btn btn-outline-dark"><a href="newRepuesto.php">Nuevo Repuesto</a></button>
      <br />
      <table class="table" id="datos">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">descripcion</th>
            <th scope="col">stock</th>
            <th scope="col">precio</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>