<?php
require_once("Conexion.php");
class Area
{
	public function ObtenerTodos()
	{
		$conexion = new Conexion;
		$area = $conexion->consultar('mecanico');
		return $area;
	}
	public function nuevo($datos)
	{
		$conexion = new Conexion;
		$area = $conexion->insertar('mecanico', $datos);
		return $area;
	}
	public function Guardar($datos, $filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->actualizar('mecanico', $datos, $filtro);
		return $area;
	}

	public function ObtenerFiltro($filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->consultarFiltro('mecanico', $filtro);
		return $area;
	}
}
