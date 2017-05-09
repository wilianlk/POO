<?php
Class Conexion extends mysqli{
	private $db_host="localhost";
	private $db_user="root";
	private $db_pass="";
	private $db_name="agenda";

	public function __construct(){
		parent:: __construct($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		$this->connect_errno ? die('Error de conexion' . mysqli_connect_errno()) : $C = "Conectado";
		//exit($C);
	}
}