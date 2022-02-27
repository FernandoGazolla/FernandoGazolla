<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=autocomand", "root", "");
function fill_unit_select_box($connect)
{ 
 $output = '';
 $query = "SELECT * FROM produto ORDER BY Descricao ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["Descricao"].'">'.$row["Descricao"].'</option>';
 }
 return $output;
}

$mesa = $_GET['mesa'];
if($mesa > 0){

  include_once("_conexao.php");
  $conn = getConnection();
  $query = $conn->prepare("SELECT * FROM COMANDA WHERE MESA_ID =".$mesa." AND STATUS = 1;");
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
  
  if($result['STATUS'] == 1 ){
     $Status = 'ABERTO'; 
  }else{
    $conn = getConnection();
    $query = $conn->prepare("INSERT INTO COMANDA(MESA_ID,STATUS) VALUES('".$mesa."','1')");
    $query->execute();
    header("Refresh: 0");
    
    #crio uma nova comanda no banco
  }

}else{

}

#Select combobox
  include_once("_conexao.php");
  $conn = getConnection();
  $query = $conn->prepare("SELECT * FROM PRODUTO");
  $query->execute();



?>

<!DOCTYPE html>
<html>
 <head>
   <title>Comanda | Mesa [<?= $mesa ?>]</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Mesa n°:[ <?= $mesa ?> ] Comanda n°: [<?= $result['ID'] ?>] Status [ <?= $Status ?> ]</h3>
   <br />
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>N° Comanda:</th>
       <th>Quantidade:</th>
       <th>Selecione o item:</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Enviar para Produção" />
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="item_name[]" class="form-control item_name" value="<?= $result['ID'] ?>" disabled/></td>';
  html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
  html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Selecione o item</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove">X</button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Campo Quantidade está vazio "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Campo item está vazio "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>
