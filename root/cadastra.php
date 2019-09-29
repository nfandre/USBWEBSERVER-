<html lang="pt-br">
<head>
	<link rel="Stylesheet" href="estilo.css" type="text/css">
</head>
<body>
<?php
//cadastra.php
echo"<h1><center>Sistema de Cadastro de
Instrumentos</center></h1>";
echo"<hr><br>";
echo"<form action='inserir.php'method='post'>";
echo"Código: <input type='text'name='cod'placeholder='cod'size=5/>
*<br>";
echo "Instrumento: <input type='text' name='nome' size=35
placeholder='instrumento'/>*<br>";
echo "<input type='submit' value='Cadastrar'>";
echo "</form>";
echo "<br><hr>";
echo "<i>Campos marcados com <b>*</b> são obrigatórios";
echo "<br><center><a href='../pagina.html' target='_self'> <em>Voltar ao menu </em></a>";
?>
</body>
</html>

