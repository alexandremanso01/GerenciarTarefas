<?php
session_start();
if($_SESSION['sessao'] != null){
$tarefa = $_POST["tarefa"];
$sessao = ($_SESSION['sessao']);
$id = $_GET["id"];
try {
  $pdo = new PDO('mysql:host=localhost;dbname=alexandre', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM tarefa WHERE id= :id');
  $stmt->bindParam(':id', $id); 
  $stmt->execute();
     
  echo ("<center><font size='17'>Excluido ".$stmt->rowCount()." registro\"s\"...</font></center>");  
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
echo("<center><br><br><a href='listar_tarefas.php'><img src='img/voltar.png'></a></center>");
}
?>