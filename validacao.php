<?php

#inicia session
session_start();

 if((isset($_POST['usuario']))&& (isset($_POST['pwd']))){

   $usuario = $_POST['usuario'];
   $senha = $_POST['pwd'];

   #chamando metodo
   autenticacao($usuario,$senha);

 }else{
 	$_SESSION['loginErro'] = "Usuário ou Senha inválido";
 	header("Location: index.php");
 }

 #metodo de autenticao
 function autenticacao($usuario,$senha){

  $login = "Location: index.php";
  
  #inclui a classe de conexao com banco de dados
  include ("../autocomand/dbaseSQL/database.php");
  #chama metodo getConnection 
  $conn = getConnection();
  #monta a query de pesquisa
  $query = $conn->query("SELECT * FROM funcionario WHERE Email = '".$usuario."' && Senha ='".$senha."';");
  #armazena o resultado em uma variavel
  $result = $query->fetch(PDO::FETCH_ASSOC);
  
  #for vazio
  if(empty($result)){
  	 
  	 $_SESSION['loginErro'] = "Usuário ou Senha inválido";
  	 header($login);

  #diferente de vazio	 
  }else if(isset($result)){

  	#valida grupo de acesso
  	niveldeacesso($result);
    //header($admin);    
  }else{
  	 $_SESSION['loginErro'] = "Usuário ou Senha inválido";
     header($login);
  }

}

#Validando nivel de acesso
function niveldeacesso($dados){

#Links
$Administrador = "Location: ../autocomand/administrador";
$Garcom = "Location: ../autocomand/usuarios";
$Cozinheiro = "Location: ../autocomand/cozinheiro";
$alterarsenha = "Location: ../autocomand/senha";



    switch ($dados) {
    case ($dados['Acessos'] <= 0):
      header($alterarsenha);

      break;

    case ($dados['Cargo'] == 'Administrador'):
      # code...
      header($Administrador);
      break;
    case ($dados['Cargo'] == 'Garcom'):
      # code...
      header($Garcom);
      break;
    case ($dados['Cargo'] == 'Cozinheiro'):
      # code...
      header($Cozinheiro);
      break;
    default:
      # code...
      break;
  }
}
?>
