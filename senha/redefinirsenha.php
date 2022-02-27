<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha_anterior'];
$novasenha = $_POST['nova_senha'];


include_once '../dbaseSQL/database.php';
$conn = getConnection();

if ($usuario == '' || $senha == '' || $novasenha == '' ) {
	# code...
	echo "Favor preencher todos os campos";
} else {

	$query = $conn->query("UPDATE funcionario SET Senha ='".$novasenha."', Acessos = 1 
		WHERE Email = '".$usuario."' AND Senha = '".$senha."'");
	header("Refresh: 0; ../index.php");
}

?>