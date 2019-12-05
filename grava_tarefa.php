<?php
session_start();
if($_SESSION['sessao'] != null){
$tarefa = $_POST["tarefa"];
$sessao = ($_SESSION['sessao']);
$datahora = (string)(date('d-m-y/H:i:s'));
try {
$pdo = new PDO('mysql:host=localhost;dbname=Alexandre', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('INSERT INTO tarefa VALUES(:id,:descricao,:sessao,:executado,:datahora)');
  $stmt->execute(array(
    ':id' => null,
    ':descricao' => $tarefa,
    ':sessao'    => $sessao,
    ':executado' => 0,
    ':datahora' => $datahora
  ));
   
  echo ("<script>alert('Dados registrados com sucesso.');window.history.back();</script>"); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
}
?>