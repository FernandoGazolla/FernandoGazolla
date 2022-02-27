</!DOCTYPE html>
<html>
<head>
	<title>AutoComand | Mesas</title>
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


<?php

  include_once("_conexao.php");
  $conn = getConnection();
  $query = $conn->prepare("SELECT * FROM MESA");
  $query->execute();

?>

<div class="container text-center" style="background:#F2F2F2">
<div class="row">
    <?php
      foreach ($query as $dados){
    ?>
    <div class="col-sm-3">
      <p class="text-center"><strong><?=$dados['NOME']?></strong></p><br>
       <a href="#demo" data-toggle="collapse">       
        <?php      
         switch ($dados['STATUS']) {
          case 0:
            # code...
        ?>
        <img src="https://images.vexels.com/media/users/3/137663/isolated/lists/38ea2c1ddb93693926e4ff1cc389f57d-isom-trico-mesa-com-cadeiras.png" class="img-circle person" alt="Random Name"       width="100" height="100" style="border-color: #00FF00">
        <?php
        break;
        
        case 1:
            # code..
        ?>
        <img src="https://images.vexels.com/media/users/3/137663/isolated/lists/38ea2c1ddb93693926e4ff1cc389f57d-isom-trico-mesa-com-cadeiras.png" class="img-circle person" alt="Random Name"       width="100" height="100" style="border-color: #FF0000">
        <?php  
          default:
            # code...
            break;
         }
        ?>
       </a>
      <div id="demo" class="collapse">
       <a href="_comand.php?mesa=<?=$dados['ID']?>">Abrir Comanda</a>
        <p>Capacidade para <?=$dados['CAPACIDADE']?> pessoas</p>
      </div>
    </div>
    
      <?php 
        }
      ?>
    </div>
   </div>

</body>
</html>