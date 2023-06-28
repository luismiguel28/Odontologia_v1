<?php
class OperacionesBd
{
	private $servidor = "localhost";
	private $usuario = "root";
	private $bd = "odontologia";
	private $password = "";

	public function conexion()
	{
		$conexion = mysqli_connect(
			$this->servidor,
			$this->usuario,
			$this->password,
			$this->bd
		);
		return $conexion;
	}
	public function ultimoid($sql)
	{
		$obj = new OperacionesBd;
		$conexion = $obj->conexion();

		mysqli_query($conexion, $sql);

		// Obtener el último ID insertado
		$lastId = mysqli_insert_id($conexion);

		return $lastId;
	}

	public function guardardatos($sql)
	{
		$obj = new OperacionesBd;
		$conexion = $obj->conexion();


		mysqli_query($conexion, $sql);
	}


	public function mostrardatos($sql)
	{
		$obj = new OperacionesBd;
		$conexion = $obj->conexion();

		$resultado = mysqli_query($conexion, $sql);

		return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
	}


	public function eliminardatos($sql)
	{
		$obj = new OperacionesBd;
		$conexion = $obj->conexion();

		mysqli_query($conexion, $sql);
	}

	public function actualizadatos($sql)
	{
		$obj = new OperacionesBd;
		$conexion = $obj->conexion();

		mysqli_query($conexion, $sql);
	}


	public function views()
	{
		include '../views/views.php';
	}
}
