<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>JBC Notícias</title>
</head>
<body>
    <!--Menu inicial-->
    <div class="row">
      <div class="col-md-12">
    <nav class="navbar navbar-expand-lg  navbar-light" style="background-color: #003366; font-size: 22px;">
      <a style="font-size: 30px;" class="navbar-brand text-light" href="index.php"><strong>JBC Notícias</strong></a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a style="margin-right: 30px;" class="nav-link text-light" href="index.php"><strong>Início</strong></a>
            </li>
          <li class="nav-item">
            <a style="margin-right: 30px;" class="nav-link text-light" href="maintecnologia.php"><strong>Tecnologia</strong></a>
          </li>
          <li class="nav-item">
            <a style="margin-right: 30px;" class="nav-link text-light" href="maincultura.php"><strong>Cultura</strong></a>
          </li>
        </ul>
      </div>
  </div>
</div>
        <!--Destaque-->
       <div style="margin-top: 50px;" class="row">
           <div class="col-md-12">
               <h1 class="animate__animated animate__fadeInLeft" style="text-align: center;">CULTURA</h1>
               <hr>    
      <!--Materias-->
       <div style="margin-top: 100px;" class="row">
          <div class="col-md-12">
          <div style="margin-left: 20px;">
      
      <?php

$conexao = mysqli_connect("localhost","root","","jbc_noticias");

$sql = "SELECT * FROM Noticias WHERE Categoria = 2  ORDER BY idNoticia ASC";
$rs = mysqli_query($conexao, $sql);

while($reg = mysqli_fetch_assoc($rs)){
?>
  
              <h3><strong><a style="text-decoration: none; color: inherit;" href=""><?php echo $reg["Titulo"]; ?></a></strong></h3>
              
              <br><br><br><br><br>

              <p><?php echo $reg["Subtitulo"]; ?></p>
              <a href="noticia.php?idNoticia=<?php echo $reg["idNoticia"]; ?>" class="btn btn-danger btn-sm">Ler mais...</a> <hr>
<?php
}
?>
        <footer style="background-color: #003366; padding: 20px; text-align:center; color: white;">
          IFGoiano - Trabalho Final Programação WEB - Jalisson Barbosa Campos - 2020
        </footer>
        </div>  


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>