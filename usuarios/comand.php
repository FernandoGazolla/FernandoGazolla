<?php
 include("../include/inc_admin/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>AutoComand</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .container {
      padding: 50px 10px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 35%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  </style>


</head>
<body>

<?php
include("../dbaseSQL/database.php");
 $conn = getConnection();

 $mesa = $_GET['mesa'];
 $comanda = "";
 
$query = $conn->prepare("SELECT ID FROM COMANDA where status = 1 and id_mesa = :mesa");
$query->bindParam(":mesa",$mesa);
$query->execute();
$existeComanda = $query->fetch();

if (empty($existeComanda['ID'])) {

    $query = $conn->prepare("INSERT INTO COMANDA (ID_MESA,STATUS) VALUES (:mesa,1)");
    $query->bindParam(":mesa",$mesa);
    $query->execute();
    $comanda = $conn->lastInsertId();

} else {
  $comanda = $existeComanda['ID'];
}

?>

Comanda número: <?=$existeComanda['ID']?>

<form action="comand.php?mesa=<?=$mesa?>"  method="POST">
 <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Quantidade" name="quantidade">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Produto" name="produto">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Código" name="codigo">
    </div>
    <div class="col">
      <input type="submit" class="btn" value="Adicionar">
    </div>
  </div>

</form>



</div>
</body>
</html>
