<?php
 include("../include/inc_admin/header.php");
?>

<!doctype html>
<html>
 <head>
   <title>Cadastrar Funcionário</title>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>

 <body>

<!--Corpo do site-->

<!--#C0E99F  #C0D99F #GFD34F-->
<div class="jumbotron text-center " ;color: #fff; style="background:#F2F2F2">
<!--Login no navbar -->
<center>     
<div class="container">
  <h2>Cadastrar Funcionário</h2>
  <form method="post" action="Funcoes.php" >
  
    <div class="center">
      <label for="inputCity"> <h6> Nome Completo </h6> </label>
      <input  type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" placeholder="Nome Completo">
    </div>
  <br>
    <div class="row">
      <div class="col">
        <label for="inputCity"> <h6> CPF </h6> </label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
      </div>
      <div class="col">
        <label for="inputCity"> <h6> RG </h6> </label>
        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG">
      </div>
    </div>  
<br>
    <div class="row">
      <div class="col">
        <label for="inputCity"> <h6> E-mail </h6> </label>
        <input type="email" class="form-control" color="red" id="email" name="email" placeholder="E-mail">
      </div>
      <div class="col">
        <label for="inputCity"> <h6> Senha </h6> </label>
        <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha">   
      </div>
    </div>
<br>
    <div class="row">
      <div class="col">
        <label for="inputCity"> <h6> Celular 1 </h6> </label>
        <input type="text" class="form-control" color="red" id="celular1" name="celular1" placeholder="Celular 1">
      </div>
      <div class="col">
        <label for="inputCity"> <h6> Telefone </h6> </label>
        <input type="text" class="form-control" id="celular2" name="celular2" placeholder="Celular 2">   
      </div>
    </div> 
<br>
    <div class="row">
      <div class="col">
        <label for="inputCity"> <h6> Endereço </h6> </label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex: Mariaval de Alencar, Maringa-PR ">
      </div>
        <div class="col">
          <label for="inputState"> <h6> Cargo </h6> </label>
          <select id="cargo" class="form-control" name="cargo">
          <option selected>Cargo...</option>
          <option>Administrador</option>
          <option>Garcom</option>
          <option>Cozinheiro</option>
          </select>
        </div>
    </div>
<br>
    <div class="row">
      <div class="col">
        <label for="inputCity"> <h6> Nome Pai </h6> </label>
        <input type="text" class="form-control" id="nomePai" name="nomePai" placeholder="Nome do Pai">
      </div>
    <div class="col">
      <label for="inputCity"> <h6> Nome Mãe </h6> </label>
      <input type="text" class="form-control" id="nomeMae" name="nomeMae" placeholder="Nome da Mãe">
    </div>
    </div>
<br><br>
<center>
  <button type="submit" class="btn btn-primary col-md-2" >Salvar Funcionário</button> 
  <input class="btn  btn-secondary col-md-2" type="reset" value="Limpar Campos">  
  <a href="../funcionarios/index.php" class="btn btn-danger col-md-2" >Cancelar</a>
</center>  
</form>
</div>
</center>

 </body>
</html>