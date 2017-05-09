<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="Agenda.php" method="POST" accept-charset="utf-8">
	<input type="text" name="nom" placeholder="">
	<input type="hidden" name="accion" value="insert">
	<input type="submit" name="Enviar" value="Enviar">
</form>
<br>
<br>
<?php include('Tabla.php'); ?>
</body>
</html>