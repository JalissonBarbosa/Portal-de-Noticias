<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<h1>Apagar Materias</h1>

<?php

$conexao = mysqli_connect("localhost", "root", "", "jbc_noticias");

$idNoticia = $_GET ["idNoticia"];

$sql = "DELETE FROM Noticias WHERE idNoticia = $idNoticia";
$rs = mysqli_query($conexao, $sql);

if($rs){
	echo "Materia apagado com sucesso!";
}else{
	echo "Erro ao apagar Materia!";
}


?>


<p><a href="lista_materia.php">Lista de Materias</a></p>
<p><a href="cad_materia.php">Cadastro de Materias</p>

</body>
</html>