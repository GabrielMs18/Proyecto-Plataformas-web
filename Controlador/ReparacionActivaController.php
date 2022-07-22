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
            $tabla .= "<td> <button type='button' class='btn btn-warning' onclick='editar(" . $fila['id'] . ")'</button>
            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='Black' class='bi bi-pencil' viewBox='0 0 16 16' onclick='editar(" . $fila['id'] . ")'>Editar>
            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
            </svg></td>";
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

