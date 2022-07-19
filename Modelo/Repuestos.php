<?php
require_once("Conexion.php");
class Repuestos
{
	public function ObtenerTodos()
	{
		$conexion = new Conexion;
		$area = $conexion->consultar('repuestos');
		return $area;
	}
	public function nuevo($datos)
	{
		$conexion = new Conexion;
		$area = $conexion->insertar('repuestos', $datos);
		return $area;
	}
	public function Guardar($datos, $filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->actualizar('repuestos', $datos, $filtro);
		return $area;
	}

	public function ObtenerFiltro($filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->consultarFiltro('repuestos', $filtro);
		return $area;
	}
}
