<?php

session_start();
if($_SESSION['sessao'] != null){
$tarefa = $_POST["tarefa"];
$sessao = ($_SESSION['sessao']);

  try {

$pdo = new PDO('mysql:host=localhost;dbname=alexandre', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->query("SELECT * FROM tarefa ;");

$cor='#00FFFF';
$arquivo=("<meta charset='UTF-8'><center>");
  
echo $arquivo.=("
       <table id='tabela1' border='1' bgcolor='#40E0D0'>
        <tr>
        <td width='40'><center>ID</center></td>
        <td width='200'><center>Tarefa</center></td>
        <td width='200'><center>Data de Execução</center></td> 
        <td width='200'><center>Data de Cadastro</center></td> 
        <td width='80'><center>Excluir</center></td> 
        <td width='160'><center>Status Tarefa</center></td> 
        </tr>
        </table>
        ");
$arquivo.=("<table id='tabela2' border='20'>");

  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
      if($linha['executado']!=0){
        $arr1 = $linha;
        $cor='#E0FFFF';
          echo ("
            <table border='1' bgcolor='$cor'>
            <tr>
            <td width='40'><center>{$arr1['id']}</center></td>
            <td width='200'><center>{$arr1['descricao']}</center></td>
            <td width='200'><center>{$arr1['datahora']}</center></td>
            <td width='200'><center>---------</center></td> 
            <td width='80'><center><a href=deletar.php?id={$arr1['id']} onclick=\"return confirm('Tem certeza que deseja excluir esta tarefa?'); return false;\"><img src='img/del.png'>
            <td width='160'><center>Tarefa Executada</center></td> 

            </a>
            </tr>
            </table>
        ");
      }else{
        $arr2 = ($linha);     
        $cor='#00FFFF';
            echo ("
                <table border='1' bgcolor='$cor' name='tabela2'>
                <tr>
                <td width='40'><center>{$arr2['id']}</center></td>
                <td width='200'><center>{$arr2['descricao']}</center></td>
                <td width='200'><center>--------</center></td>
                <td width='200'><center>{$arr2['datahora']}</center></td>
                <td width='80'><center><a href=deletar.php?id={$arr2['id']} onclick=\"return confirm('Tem certeza que deseja excluir esta tarefa?'); return false;\"><img src='img/del.png'></a> 
                <td width='160'><center><a href=executar.php?id={$arr2['id']} onclick=\"return confirm('Tem certeza que deseja executar esta tarefa?'); return false;\">Executar</a> 
                </tr>
                </table>
                ");
          }
        }
      $arquivo.=('</table>');
    }catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  }
}

echo(
  '<a href="cadastro.php">[  CADASTRAR NOVA TAREFA  ]</a>
  <a href="logout.php">[ SAIR ]</a><br>'
);

?>