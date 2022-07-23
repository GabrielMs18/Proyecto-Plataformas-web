<?php
require_once("Conexion.php");
class Mecanicos
{
	public function ObtenerTodos()
	{
		$conexion = new Conexion;
		$area = $conexion -> consultar('mecanicos');
		return $area;
	}
	public function nuevo($datos)
	{
		$conexion = new Conexion;
		$area = $conexion->insertar('mecanicos', $datos);
		return $area;
	}
	public function Guardar($datos, $filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->actualizar('mecanicos', $datos, $filtro);
		return $area;
	}

	public function ObtenerFiltro($filtro)
	{
		$conexion = new Conexion;
		$area = $conexion->consultarFiltro('mecanicos', $filtro);
		return $area;
	}
	public function Eliminar($filtro)
	{
		$conexion=new Conexion;
		$area = $conexion -> eliminar('mecanicos',$filtro);
		return $area;
	}
}
