<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
    <link rel="stylesheet" href="CSS/style.css">
    <title>JBC Notícias</title>
</head>
<body>
 <!--Carousel-->
    <div class="container">
      <div class="row">
        <div class="col-12" >
            <img class="cards" src="img/card1.png">
        </div>    
      </div>
    </div>    
    <!--Menu inicial-->
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg  navbar-light" style="background-color: #003366; font-size: 22px;">
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
                  <a class="nav-link text-light" href="maincultura.php"><strong>Cultura</strong></a>
                </li>
              </ul>
            </div>
      </div>
    </div>
        <!--Destaque-->
  <div style="margin-top: 50px;">
        <h2 class="animate__animated animate__fadeInLeft" style="text-align: center;">NOTÍCIAS EM DESTAQUE</h2>
        <hr>
    </div>
       <!--Cards -->
<section>
  <div class="container">
    <div class="row">
<?php

$conexao = mysqli_connect("localhost","root","","jbc_noticias");

$sql1 = "SELECT * FROM Noticias WHERE Categoria = 2  ORDER BY idNoticia ASC LIMIT 2";
$rs1 = mysqli_query($conexao, $sql1);


while($reg1 = mysqli_fetch_assoc($rs1)){
?>


      <div style="left: 100px;" class="animate__animated animate__fadeInLeft col-md-4 col-sm-6 col-s-12">
        <div style="background-color: #f2f2f2;" class="card" style="width: 18rem;">
          <img src="img/card2.png" class="card-img-top cards-pad">
            <div class="card-body">
              <h5 class="card-title"><strong><?php echo $reg1["Titulo"]; ?></strong></h5>
                <p class="card-text"><?php echo $reg1["Subtitulo"]; ?></p> <br>
                <a href="noticia.php?idNoticia=<?php echo $reg1["idNoticia"]; ?>" class="btn btn-danger btn-sm">Ler mais...</a>
            </div>
        </div>
      </div>


<?php
}

$sql2 = "SELECT * FROM Noticias WHERE Categoria = 1 ORDER BY idNoticia ASC LIMIT 1";
$rs2 = mysqli_query($conexao, $sql2);

$reg2 = mysqli_fetch_assoc($rs2);

?>


      <div style="left: 100px;" class="animate__animated animate__fadeInLeft col-md-4 col-sm-6 col-s-12">
        <div style="background-color: #f2f2f2;" class="card" style="width: 18rem;">
          <img src="./img/card2.png" class="card-img-top cards-pad">
            <div class="card-body">
              <h5 class="card-title"><strong><?php echo $reg2["Titulo"]; ?></strong></h5>
                <p class="card-text"><?php echo $reg2["Subtitulo"]; ?></p>
                <br><br><br>
              <a href="noticia.php?idNoticia=<?php echo $reg2["idNoticia"]; ?>" class="btn btn-danger btn-sm">Ler mais...</a>
            </div>
         </div>
      </div>
    </div>
    </div>
  </div>
</section>




      <!--Materias-->




<?php

$conexao = mysqli_connect("localhost","root","","jbc_noticias");

$sql1 = "SELECT * FROM Noticias WHERE Categoria = 1  ORDER BY idNoticia ASC LIMIT 3";
$rs1 = mysqli_query($conexao, $sql1);

while($reg1 = mysqli_fetch_assoc($rs1)){
?>

          <div style="margin-top: 50px;" class="col-md-12 espaco-noticias">
              <h3><?php echo $reg1["Titulo"]; ?></h3>
              
              <br><br><br>
              <p><?php echo $reg1["Subtitulo"]; ?></p>              
              <a href="noticia.php?idNoticia=<?php echo $reg1["idNoticia"]; ?>" class="btn btn-danger btn-sm">Ler mais...</a>
              <hr>
            </div> 
<?php
}
?> 

<footer style="background-color: #003366; padding: 20px; text-align:center; color: white;">
        IFGoiano - Trabalho Final Programação WEB - Jalisson Barbosa Campos - 2020
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>