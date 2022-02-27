<?php
 include("../include/inc_admin/headeratual.php");
?>


<!-- html de formatação da página -->
<!doctype html>
<html>
<head>
  <title>Cardápio</title>
</head>

<body>

<div class="jumbotron text-center " ;color: #fff; style="background:#F2F2F2">
<!-- fim do html de formatação da página -->

<!-- conexão com o banco de dados -->
<?php
  include("../dbaseSQL/database.php");
  $conn = getConnection();
  $query = $conn->query("SELECT * FROM dia_semana");
  $query_itens = $conn->query("SELECT * FROM itens_cardapio");
?>

<!-- realização das consultas -->
<?php
  #Array com os itens da tabela "dias_semana"
  $dias = array();
    foreach ($query as $dados){
      #utf8_encode($dados['DESCRICAO']) faz com que reconheça os caracteres especiais que contém na tabela do banco de dados
      array_push($dias, utf8_encode($dados['DESCRICAO']));
    } 
  #Array com os itens da tabela "itens_cardapio"
  $itens = array();
    foreach ($query_itens as $dados_itens){
      #utf8_encode($dados['DESCRICAO']) faz com que reconheça os caracteres especiais que contém na tabela do banco de dados
      array_push($itens, utf8_encode($dados_itens['DESCRICAO']));
    }
?>

<!-- html para os combosbox pegar os dias da semana -->
<center>     
<div class="container">
<h2>Cardápio</h2>
  <form name="formulario" method="post" action="InserirItens.php"> 
  <div class="center">
  <div class="input-group col-xs-3">
    <div class="col">
    <label for="inputDiasSemana"> <h6> Dia da Semana </h6> </label>
    <select id="diasSemana" class="form-control" name="diasSemana">
    <option selected>Dia da semana</option>
      <?php
        for($i = 0; $i < count($dias); $i++){
        #lê o array com as datas da semana
      ?>
    <option><?=$dias[$i]?></option>
 
      <?php
        }
      ?>
    </select>
    </div>
    </div>
    <br>
<!-- finaliza html para os combosbox pegar os dias da semana -->

<!-- html para os combosbox pegar os itens do cardápio -->

  <label for="inputItens"> <h6> Itens </h6> </label>
   <?php
    for($i = 0; $i < count($itens); $i++){
      #lê o array com as datas da semana
    ?>
 
    <option><?=$itens[$i]?></option> 
    <input type="checkbox" name="itens[]" value="<?=$itens[$i]?>">

    <?php
        } 
      ?>

  </div>
  </div>
<button type="submit" class="btn btn-primary col-md-2" >Salvar</button>
<a href="../cardapio/index.php" class="btn btn-danger col-md-2" >Cancelar</a>
  </div>
  </div>
  <br>

  <br><br>
</form>
</center>  
</form>
</div>
</center>
</body>
</html>