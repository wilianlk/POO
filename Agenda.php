<?php
require_once('Clase.php');
if (isset($_POST['Enviar'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$nom = $_POST['nom'];
		
		$agenda = new Clase($nom);
		$agenda->insert();
	}
}

?>