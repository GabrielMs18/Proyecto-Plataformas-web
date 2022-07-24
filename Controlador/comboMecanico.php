<?php
require_once("../Modelo/sucursal.php");
$objSucursal=new sucursal;
switch($_POST['opcion'])
{ 
	case 'consultar':
		$datos=$objSucursal->ObtenerTodos();
		$tabla="";
		
		foreach($datos as $fila)
		{
			$tabla.="<tr>";
			$tabla.="<th scope='row'>".$fila['id_sucursal']."</th>";
			$tabla.="<td>".$fila['sucursal']."</td>";
			$tabla.="<td><button type='button' class='btn btn-outline-dark' onclick='editar(".$fila['id_sucursal'].")'>Editar</button></td>";
			$tabla.="<tr>";
		}
		echo $tabla;
		break;
		
	case 'combo':
		$datos=$objSucursal->ObtenerTodos();
		$combo="";
		foreach($datos as $fila)
		{
			$combo.="<option value=".$fila['sucursal'].">".$fila['sucursal']."</option>";
		}
		echo $combo;	
		break;	
		
	case 'ingresar':
		$datos['sucursal']=$_POST['sucursal'];
		
			if($objJefe->nuevoJefe($datos))
			{
				echo "Registro ingresado";
			}
			else
			{
				echo "Error al registrar".$objJefe->geterror();
			}
		break;
		
	case 'actualizar':
		$filtro['id_sucursal']=$_POST['id_sucursal']; 
		$datos['area']=$_POST['area'];
		echo $datos=$objJefe->GuardarJefe($datos,$filtro);
		break;
		
	case 'consultaxcodigo':
		$filtro['id_sucursal']=$_POST['id_sucursal'];
		echo json_encode($datos=$objSucursal->ObtenerFiltroArea($filtro));
		break;

}
?>