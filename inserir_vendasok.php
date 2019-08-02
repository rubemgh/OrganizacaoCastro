<?php
include_once 'class/Vendas.class.php';
include_once 'class/Vendass.php';

$vendas = new Vendass();
print_r($_POST);
if($_POST['id_usuario']!=""){
    $vendas->id_usuario = $_POST['id_usuario'];
    $vendas->quantidade = $_POST['quantidade'];
    $vendas->valor_total = $_POST['valor_total'];
    $vendas->data_processo = $_POST['data_processo'];
    $vendas->status_venda = $_POST['status_venda'];
  

  $banco = new Vendas();

  $resultado = $banco->inserir($vendas);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_vendas.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_vendas.php?erro=id_usuario");
    //echo "Campo nome é obrigatorio";
}

	
  
