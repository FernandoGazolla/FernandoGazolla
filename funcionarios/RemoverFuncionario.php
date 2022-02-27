<?php
 include("../include/inc_admin/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php

$id=$_GET['id'];
 include("../dbaseSQL/database.php");
 $conn = getConnection();
 $query = $conn->query("DELETE FROM funcionario WHERE Id='$id'");
 $novaquery = $conn->query("SELECT * FROM funcionario");
# echo "$id";
?>
<div class="container">

  <a href="../funcionarios/NovoFuncionario.php" class="btn btn-primary">Novo Funcionário</a> 
<center><h2>Funcionários</h2></center>
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Celular</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>

<?php
foreach ($novaquery as $dados){
?>

<tr>
        <td><?=$dados['Id']?></td>
        <td><?=$dados['Nome']?></td>
        <td><?=$dados['Cpf']?></td>
        <td><?=$dados['Celular']?></td>


        <td>
          <div class="btn-group">
            <!-- <a href="detalhe.php?codigo=<? echo $result["id"]; ?>">Link</a> -->
            <a href="../funcionarios/" class="btn btn-success btn-sm">
             <span class="glyphicon glyphicon-eye-open"></span> Voltar
            </a>

            <a href="../funcionarios/EditaFuncionario.php?id=<?=$dados['Id']?>" class="btn btn-info btn-sm">
              <span class="glyphicon glyphicon-pencil"></span> Editar 
            </a>

            <a href="../funcionarios/RemoverFuncionario.php?id=<?=$dados['Id']?>" class="btn btn-danger btn-sm">
              <span class="glyphicon glyphicon-trash"></span> Remover 
           </a>


          </div>
        </td>
      </tr>

      <?php
        }
      ?>

 </body>
</html>