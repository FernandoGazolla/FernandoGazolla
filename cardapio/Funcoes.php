<?php

include_once '../dbaseSQL/database.php';
require 'CardapioClass.php';

class Funcoes{

#Criando obj da classe Cardapios
$cardapio = new CardapioClass();

function verificar(){

		if($_GET=="createCardapio"){
            inserirCardapio();
		}else{
           break;
		}
	}

#Lista de funções abaixo CRUD
function inserirCardapio (){

#Usuario apenas para teste
$Usuario = 'LUAN.FERNANDO';
$DataAtual = date ("Y-m-d");

#Abrindo Conexao com banco de dados
$conn =  getConnection();
#Query
$query = $conn->query("INSERT INTO cardapio(Data,Usuario) VALUES(".$DataAtual.",".$Usuario.")");
$conn->close();

}

function inserir (){

}
function editar(){

}
function remover(){

}

function listar(){

$array;

#Abrindo Conexao com banco de dados
$conn =  getConnection();
#Query
$query = $conn->query("SELECT * FROM cardapios");

foreach ($query as $dados) {
	# code...
	$cardapio->setId($dados['Id']);
	$cardapio->setData($dados['Data']);
	$cardapio->setUsuario($dados['Usuario']);

    $array[] = $cardapio;

    }
   return $array;
  }

}

?>