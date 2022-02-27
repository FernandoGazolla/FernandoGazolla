<?php


$dia = utf8_decode($_POST['diasSemana']);
$item = utf8_decode($_POST['itensc']);

include_once '../dbaseSQL/database.php';
$conn = getConnection();

$query = $conn->query("INSERT INTO carda (descricao, diasemana) VALUES (
			'".$item."',
			'".$dia."'
	)");
header("Refresh: 0; ../cardapio/index.php");

?>