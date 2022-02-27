<?php
 include("../include/inc_admin/headeratual.php");
?>

<html>

<?php
$nome1 = $_POST['nomeCompleto'];
$cpf1 = $_POST['cpf'];
$rg1 = $_POST['rg'];
$nomePai1 = $_POST['nomePai'];
$nomeMae1 = $_POST['nomeMae'];
$email1 = $_POST['email'];
$celular11 = $_POST['celular1'];
$celular12 = $_POST['celular2'];
$endereco1 = $_POST['endereco'];
$cargo1 = $_POST['cargo'];

include_once '../dbaseSQL/database.php';
$conn = getConnection();

if ($nome1 == '' || $cpf1 == '' || $rg1 == '' || $nomePai1 == '' || $nomeMae1 == '' || $email1 == '' 
		|| $celular11 == ''  || $celular12 == ''  || $endereco1 == '' || $cargo1 == ''  ) {
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
	$query = $conn->query("UPDATE funcionario SET Nome='".$_POST['nomeCompleto']."', Cpf='".$_POST['cpf']."', Rg='".$_POST['rg']."', 
		NomePai='".$_POST['nomePai']."', NomeMae='".$_POST['nomeMae']."', Email='".$email1."', Celular='".$_POST['celular1']."', 
		FoneFixo='".$_POST['celular2']."', Endereco='".$_POST['endereco']."', Cargo='".$_POST['cargo']."' WHERE Id = '".$_POST['variavelID']."' ");
	header("Refresh: 0; ../funcionarios/index.php");

}

?>
</html>