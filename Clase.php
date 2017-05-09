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

}
