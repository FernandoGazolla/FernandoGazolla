<?php
 include("../include/inc_admin/headeratual.php");
?>

<html>
<?php

$descricaoproduto1 = utf8_decode($_POST['descricaoproduto']);

include_once '../dbaseSQL/database.php';
$conn = getConnection();

if ($descricaoproduto1 == '') {
	# preventDefault();

?>

<div class="alert alert-danger">
  <strong>Alerta:</strong> Favor preencher todos os campos!
</div> 
  
	<!-- Ação para voltar a tela -->
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script language="Javascript">
		window.setTimeout("history.back(-2)", 1500);
	</script>

<?php
		
} else {
	$query = $conn->query("INSERT INTO itens_cardapio (DESCRICAO) values ('".$descricaoproduto1."')");
	header("Refresh: 0; ../itens_cardapio/InserirItens.php");
}

?>
</html>