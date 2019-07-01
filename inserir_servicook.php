<?php
include_once 'class/Servico.class.php';
include_once 'class/Servicos.php';

$servico = new Servicos();
print_r($_POST);
if($_POST['nomeserv']!=""){
    $servico->id_categ = $_POST['id_categ'];
    $servico->nomeserv = $_POST['nomeserv'];
    $servico->dataentrada = $_POST['dataentrada'];
    $servico->preco = $_POST['preco'];
    $servico->descricaoserv = $_POST['descricaoserv'];
   

  $banco = new Servico();

  $resultado = $banco->inserir($servico);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_servico.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_servico.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}

	
  
