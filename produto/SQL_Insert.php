<?php

$descricao1 = $_POST['descricao'];
$unidade1 = $_POST['unidade'];
$valorunitario1 = $_POST['valorunitario'];

include_once '../dbaseSQL/database.php';
$conn = getConnection();

if ($descricao1 == '' || $unidade1 == '' || $valorunitario1 == '') {
	# code...
	echo "Favor preencher todos os campos";
} else {
	$query = $conn->query("INSERT INTO produto(Descricao,Unidade,ValorUnitario)
	values(
	'".$descricao1."', 
	'".$unidade1."', 
	'".$valorunitario1."'
	)");
}

?>