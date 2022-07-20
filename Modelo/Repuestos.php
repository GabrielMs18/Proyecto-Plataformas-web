<?php
require_once("Conexion.php");
class Repuestos
{
	public function ObtenerTodos()
	{
		$conexion = new Conexion;
		$area = $conexion->consultar('respuestos');
		return $area;
	}
	public function nuevo($datos)
	{
		$conexion = new Conexion;
		$area = $conexion->insertar('respuestos', $datos);
		return $area;
	}
	public function Guardar($datos, $filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->actualizar('respuestos', $datos, $filtro);
		return $area;
	}

	public function ObtenerFiltro($filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->consultarFiltro('respuestos', $filtro);
		return $area;
	}
	public function Eliminar($filtro)
	{
		$conexion=new Conexion;
		$area = $conexion -> eliminar('respuestos',$filtro);
		return $area;
	}
}
