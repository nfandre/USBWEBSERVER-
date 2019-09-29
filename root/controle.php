<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Music </title>
	<link rel="Stylesheet" href="estilo.css" type="text/css">
	
</head>
<body>
<?php
//controle.php
//session_start();
echo"<link rel='Stylesheet' href='controle.css' type='text/css'>";

$conexao=mysql_connect('localhost','root','usbw','music') or die ('Erro...');
$db=mysql_select_db('music') or die ('Erro...');

$resultado=mysql_query("SELECT cod, nome from instrumentos");
mysql_close($conexao);

echo "<h1> <center> Sistema de Cadastro de Instrumentos</center></h1>";
echo "<hr> <br>";

echo "<table width=740 align=center border =1 cellpadding =1 cellspacing=1>";
echo "<tr>";
echo "<th width = '100'> CÓDIGO </th>";
echo "<th width = '200'> INSTRUMENTO </th>";
echo "<th width = '100'> ALTERAR </th>";
echo "<th width = '100'> EXCLUIR </th>";
echo "</tr>";
while($linha=mysql_fetch_array($resultado)){
	$cod=$linha['cod'];
	$nome=$linha['nome'];
echo"<tr>";
echo"<th width = 100>$cod<br></th>";
echo"<th width = 200>$nome<br></th>";
echo"<th width = 100>
<a href = 'alterar.php?cod=$cod'>Alterar</a><br></th>";
echo"<th width = 100><a href = 'excluir.php?cod=
$cod'>Excluir</a><br></th>";
echo"</tr>";
echo"<br>";
}
echo"</table>";
echo"<hr><br>";
echo"<br><center>";
echo"<br><center><a href='pagina.html'>Menu Principal</a>"; 
?>
</body>
</html>
