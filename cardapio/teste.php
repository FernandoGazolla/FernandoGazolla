<?php

require 'Funcoes.php';

$dados = Funcoes::listar();



foreach ($dados as $mostrar) {
	# code...

	echo $mostrar."<br>";
}

?>