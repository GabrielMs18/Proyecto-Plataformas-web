<?php
require_once("../Modelo/Reparacion.php");
$objregistro = new Reparacion;
switch ($_POST['opcion']) {
    case 'consultar':
        $datos = $objregistro->ObtenerTodos();
        $tabla = "";

        foreach ($datos as $fila) {
            $tabla .= "<tr>";
            $tabla .= "<th scope='row'>" . $fila['id'] . "</th>";
            $tabla .= "<td>" . $fila['nombre'] . "</td>";
            $tabla .= "<td>" . $fila['cedula'] . "</td>";
            $tabla .= "<td>" . $fila['telefono'] . "</td>";
            $tabla .= "<td>" . $fila['mecanico'] . "</td>";
            $tabla .= "<td>" . $fila['vehiculo'] . "</td>";
            $tabla .= "<td>" . $fila['marca'] . "</td>";
            $tabla .= "<td>" . $fila['modelo'] . "</td>";
            $tabla .= "<td>" . $fila['placa'] . "</td>";
            $tabla .= "<td>" . $fila['fallas'] . "</td>";
            $tabla .= "<td><button type='button' class='btn btn-success' onclick='repuesto(" . $fila['id'] . ")'>repuestos</button></td>";
            $tabla .= "<td> <button type='button' class='btn btn-danger' onclick='eliminar(" . $fila['id'] . ")' </button>
            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='Black' class='bi bi-pencil' viewBox='0 0 16 16' onclick='eliminar(" . $fila['id'] . ")'>Eliminar>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
            </svg></td>";
            $tabla .= "<td><button type='button' class='btn btn-success' onclick='editar(" . $fila['id'] . ")'>Ver Detalles</button></td>";
            $tabla .= "<tr>";
        }
        echo $tabla;
        break;

    case 'ingresar':
        $datos['nombre'] = $_POST['nombre'];
        $datos['cedula'] = $_POST['cedula'];
        $datos['telefono'] = $_POST['telefono'];
        $datos['mecanico'] = $_POST['mecanico'];
        $datos['vehiculo'] = $_POST['vehiculo'];
        $datos['marca'] = $_POST['marca'];
        $datos['modelo'] = $_POST['modelo'];
        $datos['placa'] = $_POST['placa'];
        $datos['fallas'] = $_POST['fallas'];

        if ($objregistro->nuevo($datos)) {
            echo "Registro ingresado";
        } else {
            echo "Error al registrar";
        }
        break;

    case 'actualizar':
        $filtro['id'] = $_POST['codigo'];
        $datos['nombre'] = $_POST['nombre'];
        $datos['cedula'] = $_POST['cedula'];
        $datos['telefono'] = $_POST['telefono'];
        $datos['mecanico'] = $_POST['mecanico'];
        $datos['vehiculo'] = $_POST['vehiculo'];
        $datos['marca'] = $_POST['marca'];
        $datos['modelo'] = $_POST['modelo'];
        $datos['placa'] = $_POST['placa'];
        $datos['fallas'] = $_POST['fallas'];
        $datos['repuesto'] = $_POST['repuesto'];
        $datos['precio'] = $_POST['precio'];

        echo $datos = $objregistro->Guardar($datos, $filtro);
        break;

    case 'consultaxcodigo':
        $filtro['id'] = $_POST['codigo'];
        echo json_encode($datos = $objregistro->ObtenerFiltro($filtro));
        break;
    case 'eliminar':
        echo json_encode($datos = $objregistro->Eliminar($_POST['id']));
        break;
}
