<?php
require_once('config/conexion.php');

Class Clase{
	protected $nombre;
	protected $id;

	public function __construct($nom, $id=""){
		$Conn = new Conexion();
		$this->nombre = $nom;
		$this->id = $id;
	}

	static function ningunDato(){
		return new self('');
	} 
	static function soloId($id){
		return new self('', $id);
	}

	public function select(){
		$conn = new Conexion();
		$sql = "SELECT * FROM contactos";
		$result = $conn->query($sql);
		return $result;
	}

	public function insert(){
		$db = new Conexion();
		$sql = "INSERT INTO `contactos`(`nombre`) VALUES ('$this->nombre')";
		$db->query($sql) ? header("location: Vista.php?res=insertado") : header("location: Vista.php?res=error");
	}

	public function update(){
		$db = new Conexion();
		$sql = "UPDATE `contactos` SET `$this->nombre` WHERE `id` `$this->id`";
	}

}
