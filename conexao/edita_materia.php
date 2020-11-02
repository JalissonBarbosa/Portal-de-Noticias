<?php

$conexao = mysqli_connect("localhost","root","","jbc_noticias");

$idNoticia = $_GET["idNoticia"];

$sql = "SELECT * FROM Noticias WHERE idNoticia = $idNoticia";
$rs = mysqli_query($conexao, $sql);
$reg = mysqli_fetch_assoc($rs);

?>

<html>
<head>
	<title>Edição de Materias</title>
</head>
<body>
	<h1>Edição de Materias</h1>

	<form action="processa_edita_cliente.php" method="POST">
		<p>ID: <input type="text" name="Categoria" readonly="readonly" value="<?php echo $reg["idNoticia"]; ?>"></p>
        <p>Categoria: <input type="text" name="Categoria" value="<?php echo $reg["Categoria"]; ?>"></p>
		<p>Titulo: <input type="text" name="Titulo" value="<?php echo $reg["Titulo"]; ?>"></p>
		<p>Subtitulo: <input type="text" name="Subtitulo" value="<?php echo $reg["Subtitulo"]; ?>"></p>
        <p>Materia: <input type="text" name="Materia" value="<?php echo $reg["Materia"]; ?>"></p>
        <p><input type="submit" value="Alterar">
	</form>


	<p><a href="lista_materia.php">Listagem de Materias</a>
		<br>
	<p><a href="cad_materia.php">Cadastro de Materias</a></p>

</body>
</html>