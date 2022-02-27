<?php

/**
* @return \PDO
*/

#Open Connection database
function getConnection(){ 
  
  $dsn = "mysql:host=localhost;dbname=autocomand";
  $user = "root";
  $pass = "";

  try{

     $pdo = new PDO($dsn,$user,$pass);

  }catch(PDOException $ex){

     echo 'Erro: '.$ex->getMessage();

  }
  return $pdo;
}

#Close Connection database
 function getDesconnection(){
     $pdo = null;
 }

?>