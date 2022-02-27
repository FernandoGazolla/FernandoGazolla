<?php
 include("../include/inc_admin/header.php");
?>

<!doctype html>
<html>
 <head>
   <title>Cadastrar Imagem</title>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>

<body>
 <!--   Usar sempre enctype="multipart/form-data no form que receber IMAGEM  -->
        <form method="post" action="../itens_cardapio/SQL_InsertImagemCardapio.php" enctype="multipart/form-data">
        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" id="imagem"/>
        <br/>
        <input type="submit" value="Enviar"/>
    </form>
</body>


</html>