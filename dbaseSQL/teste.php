
<!-- INSERT NA TABELA-->
<?php

include_once '../dbaseSQL/database.php';
$conn = getConnection();

$query = $conn->query("INSERT INTO cardapios(Data,Usuario)values('2018-12-20','FERNANDO.GAZOLLA')");
?>

<!-- SELECT DA TABELA-->
<?php

include_once '../dbaseSQL/database.php';
$conn = getConnection();
$query = $conn->query("SELECT * FROM cardapios");

foreach($query as $dados){
  echo "N° ".$dados['Id'] ." Data ".$dados['Data']." Usuário ".$dados['Usuario']."<br>";
}

?>

<!--Validação de login-->
<?php

$conn = getConnection();

$query = $conn->query("SELECT * FROM cardapios");

foreach ($query as $dados) {

	if($dados['Usuario'] == "LUAN.FERNANDO")
	{
      echo "Yes";
      break;
	}else{
	  echo "No";
	}

}



?>