<?php
 
  include_once '../dbaseSQL/database.php';
  $conn = getConnection();
  
  $imagem = addslashes($_FILES["imagem"]['tmp_name']);
  $nome = addslashes($_FILES["imagem"]['name']);
  $imagem = file_get_contents($imagem);
  $imagem = base64_encode($imagem);
  $query = $conn->query("INSERT INTO IMAGEM (IMAGEM,Nome) VALUES ('$imagem','$nome')");
  
  echo "Imagem enviada com sucesso!"
?>