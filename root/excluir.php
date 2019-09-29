<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Music </title>
	<link rel="Stylesheet" href="estilo.css" type="text/css">
	
</head>
<body>
<?php
//excluir.php
//Request recuperando variáveis das páginas anteriores
$cod=$_REQUEST['cod'];
//Itrim - retira os espaços em branco ( ou outros caracteres) do início da string
$cod = ltrim($cod);
//echo $ra;
$conexao=mysql_connect('localhost','root','usbw','music') or die('Erro...');
$db=mysql_select_db('music') or die ('Erro...');
//String SQL
$sql_del="DELETE FROM instrumentos WHERE cod='$cod'";
//
$res=mysql_query($sql_del);
mysql_close($conexao);
echo "<h1><center>O aluno foi excluido com sucesso!
</center></h1>";
echo"<br><center><a href='../pagina.html'
target='_self'><em>Voltar ao menu</em></a>";
?>
</body>
</html>