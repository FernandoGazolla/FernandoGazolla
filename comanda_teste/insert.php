<?php
//insert.php;


if(isset($_POST["item_name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=autocomand", "root", "");

 for($count = 0; $count < count($_POST["item_name"]); $count++)
 {  
  $query = "INSERT INTO item_comanda 
  (ID_COMANDA, PRODUTO, VALOR,QUANTIDADE) 
  VALUES (:item_name, :item_quantity,:valor, :item_unit)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    
    ':item_name'  => $_POST["item_name"][$count], 
    ':item_quantity' => $_POST["item_quantity"][$count], 
    ':valor' => 3,
    ':item_unit'  => $_POST["item_unit"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
 
}
?>
