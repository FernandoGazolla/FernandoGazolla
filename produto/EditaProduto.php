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
 $query = $conn->query("SELECT * FROM produto WHERE IdProduto='$id'");

?>

<?php
foreach ($query as $dados){
?>

<center>     
<div class="container">
  <h2>Edição de Dados - Produtos</h2>

<form method="post" action="SQLUpdateProduto.php">

<br>
<br>
    <div class="row">
      <div class="center">
        <label for="inputCity"> <h6> Código Produto </h6> </label>
        <input type="text" class="form-control" id="codproduto" name="codproduto" readonly="true" value="<?=$dados['IdProduto']?>">
      </div>

      <div class="col">
      <label for="inputCity"> <h6> Descrição Produto </h6> </label>
      <input  type="text" class="form-control" id="descricao" name="descricao" value="<?=$dados['Descricao']?>">
    </div>
     </div> 

  <br> 
  <div class="row">
   <div class="center">
          <label for="inputState"> <h6> Unidade </h6> </label>
          <select id="Unidade" class="form-control" name="unidade">
          <option>Unidade</option>
          <option>Litros</option>
          <option>ML</option>
          </select>
        </div>


       <div class="col">
        <label for="inputCity"> <h6> Valor Unitário </h6> </label>
        <input type="text" class="form-control" id="valorunitario" name="valorunitario" value="<?=$dados['ValorUnitario']?>">
      </div>
      </div>
    
<br><br>


<center>
	
  <button type="submit" class="btn btn-primary col-md-2">Salvar</button> 
  <a href="../produto/index.php" class="btn btn-danger col-md-2" >Cancelar</a>


  
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