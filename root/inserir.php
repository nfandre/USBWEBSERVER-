<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Music </title>
	<link rel="Stylesheet" href="estilo.css" type="text/css">
	
</head>
<body>
<?php
//inserir.php
//recebendo dados do form
$cod=$_REQUEST['cod'];
$cod=$_POST['cod'];
$nome=$_REQUEST['nome'];
$nome=$_POST['nome'];

$conexao=mysql_connect('localhost','root','usbw','music') or die('Erro...');
$db=mysql_select_db('music') or die ('Erro..');

//$resultado="insert info aluno(ra,nome)("'.$_POST['ra'].'"."'.$_POST['nome'].'")";
//verificar se ja existe ra cadastrado
$sql_selecao="SELECT cod, nome FROM instrumentos WHERE cod = $cod";
$res = mysql_query($sql_selecao);

//Se já existir solicitar nova inclusao
if (mysql_num_rows ($res)!=0){
	echo "Cadastro existente, Por favor, inserir outro intrumento.";
echo "<br> <a href='cadastra.php'>Voltar</a>";
}
//caso nao exista cadastrar novo aluno
else{
	$sql_inserir = " INSERT INTO instrumentos (cod,nome) VALUES ('$cod','$nome')";
	$res = mysql_query($sql_inserir);
	echo "<br><a href='cadastra.php'>Voltar</a>";
	echo "<br>Parabens Dados inseridos com sucesso!<br>";
     }
	mysql_close($conexao);
	echo "<h1><center>CADASTRO EFETUADO COM SUCESSO!</center></h1>";
	echo "<br><center><a href='../pagina.html' target='_self'> <em>Voltar ao menu </em></a>";
?>
</body>
</html>