<!doctype html>
<html>
 <head>
  <title>AutoComand</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .container {
      padding: 50px 10px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 35%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color: #93BB6" href="#">AutoComand - Simples, Fácil e Ágil</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../cardapio/">Cardápio</a></li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../produto/listagemprodutos.php">Produtos</a></li>
        <li class="nav-item">
        <a class="nav-link" href="../index.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>


<?php
include("../dbaseSQL/database.php");
 $conn = getConnection();
 $query = $conn->query("SELECT ID, NOME, CAPACIDADE FROM MESA");

?>
<br> <br>
<div class="container text-center" style="background:#F2F2F2">
<div class="row">
    <?php
      foreach ($query as $dados){
    ?>
    <div class="col-sm-3">
      <p class="text-center"><strong><?=$dados['NOME']?></strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="https://images.vexels.com/media/users/3/137663/isolated/lists/38ea2c1ddb93693926e4ff1cc389f57d-isom-trico-mesa-com-cadeiras.png" class="img-circle person" alt="Random Name" width="100" height="100" style="border-color: #EA4335">
      </a>
      <div id="demo" class="collapse">
        <a href="comand.php?mesa=<?=$dados['ID']?>">Abrir Comanda</a>
        <p>Capacidade para <?=$dados['CAPACIDADE']?> pessoas</p>
      </div>
    </div>
    <?php 
    }
    ?>

<div class="col-sm-3">
      <p class="text-center"><strong>MESA 4</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="https://images.vexels.com/media/users/3/137663/isolated/lists/38ea2c1ddb93693926e4ff1cc389f57d-isom-trico-mesa-com-cadeiras.png" class="img-circle person" alt="Random Name" width="100" height="100" style="border-color: #34A853">
      </a>
      <div id="demo4" class="collapse">
         <p>Capacidade para 4 pessoas</p>
      </div>
    </div>

  </div>



</div>
</body>
</html>
