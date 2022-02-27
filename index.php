
<?php
 session_start();
?>

<!doctype html>
<html>
 <head>
   <title>AutoComand</title>

    <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color: #93BB6" href="#">AutoComand - Simples, Fácil e Ágil</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Cardápio</a></li>
    </ul>
  </div>
</nav>


<div class="jumbotron text-center " ;color: #fff; style="background: white">
<!--Login no navbar -->
<center>     
<br>
<div class="container">
   <img src="imagens/logo_autoComand.png">


<!--  <label style="font-size: xx-large; font-family: all"> Login de Acesso</label> 
   <img src="../imagens/logo_autoComand_350_300.png">
-->
  <form class="form-horizontal" method="POST" action="validacao.php" >
    
 
      <div class="input-group col-xs-3">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="usuario" type="text" class="form-control" name="usuario" placeholder="Usuário">
      </div>

      <div class="input-group col-xs-3">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="pwd" placeholder="Senha">
      </div>



    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <center><label><input type="checkbox" name="lembrar"> Lembrar-me</label></center>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-primary btn-lg active">Entrar</button>
      </div>
    </div>
  </form>

  
<!--Alerta de usuario ou senha invalida-->
  <p class="text-center text-danger">
    <?php
       if(isset($_SESSION['loginErro'])){
     ?>

    <div class="alert alert-danger col-sm-4" role="alert">
      <?php
        echo $_SESSION['loginErro'];
      ?>
    </div>

      <?php 
        unset($_SESSION['loginErro']);
      }
    ?>

</div>
</center>
 </body>
</html>
