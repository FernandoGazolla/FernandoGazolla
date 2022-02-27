<?php


class db_config{

    #Qual banco esta usando MySQL,SQLSERVER..
    private $typedb ='mysql';
    #Host
    private $host ='localhost';
    #Nome da banco de dados criado
    private $database = 'autocomand';

    #falta arrumar o link para conexao do banco
	private $dsn = 'mysql:host=localhost;dbname=autocomand';
	private $user = 'root';
	private $pass = '';


	public function getDsn(){
        return $this->dsn;
    }
    public function getUser(){
        return $this->user;
    }
    public function getPass(){
        return $this->pass;
    }

}

?>