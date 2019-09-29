<html lang="pt-br">
<head>
	<link rel="Stylesheet" href="estilo.css" type="text/css">
</head>
<body>

<?php
//alterar_db.php
//include "controle.php";
//session_start();
$cod= $_REQUEST['cod'];
$conexao=mysql_connect
('localhost','root','usbw','music') or die ('Erro ...');
$db=mysql_select_db('music') or die ('Erro ...');

//recebendo dados do form
$cod_new = $_POST['cod_novo'];
$nome_new = $_POST['nome_novo'];

$resultado=mysql_query("UPDATE instrumentos SET
cod='$cod_new', nome='$nome_new' WHERE cod='$cod'");

echo "<h1><center>Cadastro alterado com sucesso!
</center></h1>";
echo "<br><center> <a href='../pagina.html'
target='_self'><em>Voltar ao menu </em></a>";
?>
</body>
</html>