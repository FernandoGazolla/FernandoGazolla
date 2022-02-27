<?php
 
include_once '../dbaseSQL/database.php';
$conn = getConnection();

$query= $conn->query("SELECT * FROM IMAGEM ");
$img = array();
foreach ($query as $dadosimg)
{
  #utf8_encode($dados['IMAGEM']) faz com que reconheça as imagens no banco de dados
  array_push($img, utf8_encode($dadosimg['IMAGEM']));
} 


for($i = 0; $i < count($img); $i++)
{
	#lê o array com as imagens armazenadas em banco
	base64_decode($img[$i]);
}

echo '<img height="300" width="300" src="data:imagem;base64, '.$img[3].'">';

?>