<?php
 include("../include/inc_admin/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listar Funcionários</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!--Corpo do site-->

<!--#C0E99F  #C0D99F #GFD34F-->
<div class="jumbotron text-center " ;color: #fff; style="background:#F2F2F2">
<!--Login no navbar -->

<?php

$id=$_GET['id'];
 include("../dbaseSQL/database.php");
 $conn = getConnection();
 $query = $conn->query("SELECT * FROM funcionario WHERE Id='$id'");
# echo "$id";
?>

 <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Ações</th>
      </tr>
    </thead>

<tbody>

<?php
foreach ($query as $dados){
?>

  <tr>
        <td><?=$dados['Id']?></td>
        <td><?=$dados['Nome']?></td>
        <td><?=$dados['Cpf']?></td>
        <td><?=$dados['Email']?></td>
        <td><?=$dados['Celular']?></td>
        <td>
          <div class="btn-group">
            <!-- <a href="detalhe.php?codigo=<? echo $result["id"]; ?>">Link</a> -->
            
        <!--    
            <a href="../funcionarios/" class="btn btn-success">Voltar</a>
            <a href="../funcionarios/EditaFuncionario.php?id=<?=$dados['Id']?>" class="btn btn-primary">Editar</button>
            <a href="../funcionarios/RemoverFuncionario.php?id=<?=$dados['Id']?>" class="btn btn-danger">Remover</a> -->
            <a href="../funcionarios/" class="btn btn-success btn-sm">
             <span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar
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

</tbody>
</table>
</div>

 </body>
</html>