<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Materias</title>
</head>
<body>

	<h1>Cadastro de materias</h1>

	<form action="processa_cad_meteria.php" method="POST">
	<p>Categoria: <input type="text" name="Categoria" ></p>
	<p>Titulo: <input type="text" name="Titulo"></p>
    <p>Subtitulo: <input type="text" name="Subtitulo"></p>
    <p>Materia: <input type="text" name="Materia"></p>
    
		<p><input type="submit" value="Cadastrar Materia"></p>
	</form>

	<p><a href="lista_materia.php">Lista de materias</a> </p>


</body>
</html>