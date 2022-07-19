<?php
require_once("Conexion.php");
class Reparacion
{
	public function ObtenerTodos()
	{
		$conexion = new Conexion;
		$area = $conexion->consultar('reparacion');
		return $area;
	}
	public function nuevo($datos)
	{
		$conexion = new Conexion;
		$area = $conexion->insertar('reparacion', $datos);
		return $area;
	}
	public function Guardar($datos, $filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->actualizar('reparacion', $datos, $filtro);
		return $area;
	}

	public function ObtenerFiltro($filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->consultarFiltro('reparacion', $filtro);
		return $area;
	}
}
