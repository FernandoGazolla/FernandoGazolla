<?php

/**
 * 
 */
class CardapioClass {
	# code...

    #Atributos da Classe
	private $Id = null;
	private $data;
	private $usuario;

	#Encapsulamento GET SET
	public function setId($Id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    
    public function setData($Data){
        $this->data = $data;
    }
    public function getData(){
        return $this->data;
    }
    
    public function setUsuario($Usuario){
        $this->usuario = $usuario;
    }
    public function getUsuario(){
        return $this->usuario;
    }
}

?>