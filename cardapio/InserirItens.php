<?php

$dia = utf8_decode($_POST['diasSemana']);

include_once '../dbaseSQL/database.php';
$conn = getConnection();


$_checkbox = $_POST['itens'];
foreach ($_checkbox as $_valor) {
#echo $_valor;
$query = $conn->query("INSERT INTO carda (descricao, diasemana) VALUES (
			'".$_valor."',
			'".$dia."'
	)");

header("Refresh: 0; ../cardapio/index.php");
}

?>