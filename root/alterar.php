<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Music </title>
	<link rel="Stylesheet" href="estilo.css" type="text/css">
	
</head>
<body>
<?php
//alterar.php
//$ra = $-POST["ra"];
//echo $_POST['ra'];
$cod = $_REQUEST['cod'];

$conexao=mysql_connect('localhost','root','usbw','music')or die ("Erro...");
$db=mysql_select_db("music") or die ("Erro...");
$resultado=mysql_query("SELECT cod,nome FROM instrumentos where
cod='$cod'");
mysql_close($conexao);
while ($linha=mysql_fetch_array($resultado)){
$cod = $linha['cod'];
$nome = $linha['nome'];
echo "<center><h1>Alterar
Cadastro</h1></center>";
echo"<hr><br>"; echo"<form
// é outro arquivo que iremos usar
action='alterar_db.php?cod=$cod' method='post'>";
echo "Código: <input type='text' name='cod_novo'
value='$cod' size=10><br>";
echo "Instrumento:<input type='text' name='nome_novo'
value='$nome' size=30><br>";
echo "<input type='submit' value='Alterar'>";
echo "</form>";
echo "<br><hr>";
}
?>
</body>
</html>