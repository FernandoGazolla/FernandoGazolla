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
$senha1 = $_POST['senha'];
$celular11 = $_POST['celular1'];
$celular12 = $_POST['celular2'];
$endereco1 = $_POST['endereco'];
$cargo1 = $_POST['cargo'];


include_once '../dbaseSQL/database.php';
$conn = getConnection();

if ($nome1 == '' || $cpf1 == '' || $rg1 == '' || $nomePai1 == '' || $nomeMae1 == '' || $email1 == '' 
		|| $cargo1 =='' ||  $celular11 == ''  || $celular12 == ''  || $endereco1 == '' || $cargo1 ='' ) {
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
	$query = $conn->query("INSERT INTO funcionario(Nome,Cpf,Rg,NomePai,NomeMae,Email,senha,Celular,FoneFixo,Endereco,Cargo, Acessos)
	values(
	'".$_POST['nomeCompleto']."', 
	'".$_POST['cpf']."', 
	'".$_POST['rg']."', 
	'".$_POST['nomePai']."', 
	'".$_POST['nomeMae']."',
	'".$email1."',
	'".$senha1."',
	'".$_POST['celular1']."', 
	'".$_POST['celular2']."', 
	'".$_POST['endereco']."', 
	'".$_POST['cargo']."',
	'0')");

	header("Refresh: 0; ../funcionarios/NovoFuncionario.php");
}

?>
</html>