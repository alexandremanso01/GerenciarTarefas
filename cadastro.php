<?php 
session_start();
if($_SESSION['sessao'] != null){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de tarefas</title>
	<link rel="stylesheet" type="text/css" href="main.css" media="screen" />
</head>
<body>
	<form  class="gravartarefa" action="grava_tarefa.php" method="post">
		<p class="tarefa">Listar Tarefa:<input type="text" name="tarefa"></p>
		<p class="btgravar"><input type="submit" name="enviar" value="Gravar"></p>
		<a href="listar_tarefas.php">Tarefas</a>
	</form>
</body>
</html>
<?php
}else{
	echo ("<script>alert('É preciso logar para acessar essa página.');window.location.href='index.html';</script>");
	}
?>