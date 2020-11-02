<!DOCTYPE html>
<html>
<head>
	<title>Lista de Materias</title>
</head>
<body>

<?php

$conexao = mysqli_connect("localhost","root","","jbc_noticias");

$sql = "SELECT * FROM Noticias";
$rs = mysqli_query($conexao, $sql);

while($reg = mysqli_fetch_assoc($rs)){
	echo $reg["idNoticia"];
    echo "<br>";
    echo $reg["Categoria"];
	echo "<br>";
	echo $reg["Titulo"];
    echo "<br>";
    echo $reg["Subtitulo"];
	echo "<br>";
	echo $reg["Materia"];
	echo "<br>";
	echo "<a href='edita_materia.php?idNoticia=".$reg["idNoticia"]."''>Editar</a>";
	echo "<br>";
	echo "<a href='apaga_materia.php?idNoticia=".$reg["idNoticia"]."''>Apagar</a>";
	echo "<br><br>";
}

?>

<a href="cad_materia.php">Cadastro de Materias</a></p>

</body>
</html>