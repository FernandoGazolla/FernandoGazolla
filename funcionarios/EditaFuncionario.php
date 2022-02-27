<?php
 include("../include/inc_admin/header.php");
?>

<!doctype html>
<html>
 <head>
   <title>Edição de dados</title>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>

 <body>

 	<div class="jumbotron text-center " ;color: #fff; style="background:#F2F2F2">
<!--Login no navbar -->

<?php

$id=$_GET['id'];
 include("../dbaseSQL/database.php");
 $conn = getConnection();
 $query = $conn->query("SELECT * FROM funcionario WHERE Id='$id'");

?>

<?php
foreach ($query as $dados){
?>

<center>     
<div class="container">
  <h2>Edição de Dados - Funcionário</h2>

  <form method="post" action="FuncaoUpdate.php">

    <div class="center">
      <label for="inputCity"> <h6> ID </h6> </label>
      <input  type="text" class="form-control" id="variavelID" name="variavelID" readonly="true" value="<?=$dados['Id']?>">
    </div>
  <br>

  <div class="center">
      <label for="inputCity"> <h6> Nome Completo </h6> </label>
      <input  type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" value="<?=$dados['Nome']?>">
    </div>
  <br>

  <div class="row">
      <div class="col">
        <label for="inputCity"> <h6> CPF </h6> </label>
        <input type="text" class="form-control" id="cpf" name="cpf"  value="<?=$dados['Cpf']?>">
      </div>
      <div class="col">
        <label for="inputCity"> <h6> RG </h6> </label>
        <input type="text" class="form-control" id="rg" name="rg"  value="<?=$dados['Rg']?>">
      </div>
    </div>  
<br>
    <div class="center">
      <label for="inputEmail4"> <h6> Email </h6> </label>
      <input type="email" class="form-control" id="email" name="email"  value="<?=$dados['Email']?>">
    </div>
<br>
<div class="row">
      <div class="col">
        <label for="inputCity"> <h6> Celular 1 </h6> </label>
        <input type="text" class="form-control" color="red" id="celular1" name="celular1" value="<?=$dados['Celular']?>">
      </div>
      <div class="col">
        <label for="inputCity"> <h6> Fone Fixo</h6> </label>
        <input type="text" class="form-control" id="celular2" name="celular2" value="<?=$dados['FoneFixo']?>">  
      </div>
    </div> 
<br>
    <div class="row">
      <div class="col">
        <label for="inputCity"> <h6> Endereço </h6> </label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="<?=$dados['Endereco']?>">
      </div>
        <div class="col">
          <label for="inputState"> <h6> Cargo </h6> </label>
          <select id="idCargo" class="form-control" name="cargo">
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
        <input type="text" class="form-control" id="nomePai" name="nomePai" value="<?=$dados['NomePai']?>">
      </div>
    <div class="col">
      <label for="inputCity"> <h6> Nome Mãe </h6> </label>
      <input type="text" class="form-control" id="nomeMae" name="nomeMae" value="<?=$dados['NomeMae']?>">
    </div>
    </div>
<br><br>


<center>
	
  <button type="submit" class="btn btn-primary col-md-2">Salvar</button> 
  <a href="../funcionarios/index.php" class="btn btn-danger col-md-2" >Cancelar</a>


  
</center>  
</form>
</div>


  <?php
        } 
      ?>
  </center>  
</form>
</div>
</center>

 </body>
</html>