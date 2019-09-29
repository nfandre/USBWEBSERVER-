<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Music/Exibir </title>
	<link rel="Stylesheet" href="estilo.css" type="text/css">
	
</head>
<body>
<?php
//exibir.php
//conectando ao B.D.
$conexao=mysql_connect
('localhost','root','usbw','music');
$db=mysql_select_db('music');
//Comando SQL consulta
$resultado=mysql_query('SELECT * FROM instrumentos');
mysql_close($conexao);

	echo" <center> <img src='imagens/music.png'> </br> </center>  "; 

// Fazendo a busca na tabela Aluno
while ($linha=mysql_fetch_array($resultado)){
	$cod = $linha['cod'];
	$nome = $linha['nome'];
	//Exibindo as informações dentro do while
	echo "<font face=Verdana>";
	echo "Código: $cod<br>";
	echo "Nome: $nome<br>";
	echo "<hr>";
}

echo "<br><center><a href='../pagina.html' target='_self'> <em>Voltar ao menu </em></a>";

?>
</body>
</html>