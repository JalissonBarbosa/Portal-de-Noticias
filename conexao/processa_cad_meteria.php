<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Cadastro de Materias</h1>

<?php

$conexao = mysqli_connect("localhost", "root", "", "jbc_noticias");

$idNoticia = $_GET["idNoticia"];
$Categoria = $_POST["Categoria"];
$Titulo = $_POST["Titulo"];
$Subtitulo = $_POST["Subtitulo"];
$Materia = $_POST["Materia"];

$sql = "INSERT INTO Noticias (Categoria, Titulo, Subtitulo, Materia) VALUES ('$Categoria', '$Titulo', '$Subtitulo', '$Materia')";
$rs = mysqli_query($conexao, $sql);

if ($rs){
	echo "Materia cadastrada com sucesso!";
} else {
	echo "Erro ao cadastrar a materia!";
}

?>
	<p><a href="lista_materia.php">Lista de Materias</a>
	<br>
	<a href="cad_materia.php">Cadastro de Materias</a></p>

</body>
</html>