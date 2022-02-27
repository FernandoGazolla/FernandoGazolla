<?php
 include("../include/inc_admin/headeratual.php");
?>

<!doctype html>
<html>
 <head>
   <title>Produtos do Cardápio</title>
 </head>

	<body>
		<div class="jumbotron text-center " ;color: #fff; style="background:#F2F2F2">
<!--Login no navbar -->
		<center>     
		<div class="container">
  		<h2>Cadastrar Produtos do Cardápio</h2>
  		<form method="post" action="SQL_Insert.php" >
  
   		 <div class="center">
     		 <label for="inputDescricao"> <h6> Produto </h6> </label>
      		 <input  type="text" class="form-control" id="descricaoproduto" name="descricaoproduto" placeholder="Nome do produto">
    	 </div>
  		 <br>

 		 <button type="submit" class="btn btn-primary col-md-2">Salvar</button> 

  		 <a href="../cardapio/index.php" class="btn btn-danger col-md-2" >Cancelar</a>
 
		</form>
		</div>
		</center>

 	</body>
</html>