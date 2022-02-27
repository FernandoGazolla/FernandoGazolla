<?php
 include("../include/inc_admin/headeratual.php");
?>

<html>
<?php

$descricao1 = $_POST['descricao'];
$unidade1 = $_POST['unidade'];
$valorunitario1 = $_POST['valorunitario'];

include_once '../dbaseSQL/database.php';
$conn = getConnection();

if ($descricao1 == '' || $unidade1 == '' || $valorunitario1 == '') {
?>

<div class="alert alert-danger">
  <strong>Alerta:</strong> Favor preencher todos os campos!
</div> 
  
	<!-- Ação para voltar a tela -->
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script language="Javascript">
		window.setTimeout("history.back(-2)", 1000);
	</script>

<?php
} else {
	$query = $conn->query("UPDATE produto SET Descricao = '".$_POST['descricao']."', Unidade = '".$_POST['unidade']."', ValorUnitario = '".$_POST['valorunitario']."'
	 WHERE IdProduto = '".$_POST['codproduto']."' ");
	header("Refresh: 0; ../produto/index.php");

}

?>
</html>