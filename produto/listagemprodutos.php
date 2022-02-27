
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
 include("../dbaseSQL/database.php");
 $conn = getConnection();
 $query = $conn->query("SELECT * FROM produto");
?>

<div class="container">

  <center><h2>Produtos</h2></center>
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Un</th>
        <th>Valor</th>
      </tr>
    </thead>

<tbody>

<?php
foreach ($query as $dados){
?>

  <tr>
        <td><?=$dados['IdProduto']?></td>
        <td><?=$dados['Descricao']?></td>
        <td><?=$dados['Unidade']?></td>
        <td><?=$dados['ValorUnitario']?></td>

          </td>
      </tr>
         
      
         


          </div>
     

      <?php
        } 
      ?>

</tbody>
  </table>
  <center>
   <a href="../usuarios" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-pencil"></span> Voltar 
          </a>
          </center>
</div>

</body>
</html>