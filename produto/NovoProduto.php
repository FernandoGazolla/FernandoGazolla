<?php
 include("../include/inc_admin/header.php");
?>

<!doctype html>
<html>
 <head>
   <title>Cadastrar Produto</title>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>

 <body>

<?php 
  include_once '../dbaseSQL/database.php';
  $conn = getConnection();
  //realiza a consulta no banco de dados ordenando o IdProduto por ordem do mais recente 
  $query = $conn->query("SELECT IdProduto from produto ORDER by IdProduto DESC "); 
  //foreach para varrer todos os dados da variavel $query, com isso a variavel $dados se torna um array
  foreach ($query as $dados) 
  {
    # code...
  }
// $dados[0] pega sempre o primeiro campo do banco de dados
// $dados[0] + 1 sempre irá incrementar o valor do array para atualizar conforme o usuario adiciona o produto
// usar linha 52 de referencia
//echo $dados[0]+1;
?>



<!--Corpo do site-->

<!--#C0E99F  #C0D99F #GFD34F-->
<div class="jumbotron text-center " ;color: #fff; style="background:#F2F2F2">
<!--Login no navbar -->
<center>     
<div class="container">
  <h2>Cadastrar Produto</h2>
  <form method="post" action="SQL_Insert.php" >
<br>
<br>
    <div class="row">
      <div class="center">
        <label for="inputCity"> <h6> Código Produto </h6> </label>
        <input type="text" class="form-control" id="codproduto" name="codproduto" readonly="true" value="<?=$dados[0]+1?>">
      </div>

      <div class="col">
      <label for="inputCity"> <h6> Descrição Produto </h6> </label>
      <input  type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição Produto">
    </div>
     </div> 

  <br> 
  <div class="row">
   <div class="center">
          <label for="inputState"> <h6> Unidade </h6> </label>
          <select id="Unidade" class="form-control" name="unidade">
          <option selected>Unidade...</option>
          <option>Unidade</option>
          <option>Litros</option>
          <option>ML</option>
          </select>
        </div>
       <div class="col">
        <label for="inputCity"> <h6> Valor Unitário </h6> </label>
        <input type="text" class="form-control" id="valorunitario" name="valorunitario" placeholder="Valor Unitário">
      </div>
      </div>
    
<br><br>
<center>
  <button type="submit" class="btn btn-primary col-md-2" >Salvar Produto</button> 
  <input class="btn  btn-secondary col-md-2" type="reset" value="Limpar Campos">  
  <a href="../produto/index.php" class="btn btn-danger col-md-2" >Cancelar</a>
</center>  
</form>
</div>
</center>

 </body>
</html>