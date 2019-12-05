<?php
$user = $_POST["user"];
$senha   = $_POST["senha"];
$aux = 0;
$pdo = new PDO('mysql:host=localhost;dbname=Alexandre', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->query("SELECT * FROM dados");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	 if(($user == $linha['user']) && ($senha == $linha['senha'])){
     	if($linha != ""){
     		$aux++;
     	}
     }
     	if($aux > 0){
      		session_start();
      		$_SESSION['sessao'] = $user;
      		echo("<script>window.location.href='listar_tarefas.php';</script>");
     }
     elseif($aux == 0){
     	echo("<script>alert('Login ou senha são invalidos.');window.history.back();</script>");
     }  
}
?>