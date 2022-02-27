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

  </div>
</nav>


<div class="jumbotron text-center " ;color: #fff; style="background: white">
<!--Login no navbar -->
<center>     
<br>
<div class="container">
 


<!--  <label style="font-size: xx-large; font-family: all"> Login de Acesso</label> 
   <img src="../imagens/logo_autoComand_350_300.png">
-->
  <form class="form-horizontal" method="POST" action="redefinirsenha.php" >
    
 
      <div class="input-group col-xs-3">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="usuario" type="text" class="form-control" name="usuario" placeholder="Usuário">
      </div>

      <div class="input-group col-xs-3">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="senha_anteior" type="password" class="form-control" name="senha_anterior" placeholder="Senha anterior">
      </div>

      <div class="input-group col-xs-3">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="nova_senha" type="password" class="form-control" name="nova_senha" placeholder="Nova senha">
      </div>

    <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-primary btn-lg active">Redefinir</button>
      </div>
    </div>
  </form>


</div>
</center>
 </body>
</html>