<?php
include_once 'class/Vendas_servico.class.php';
include_once 'class/Vendas_servicos.php';

$vendas_serv = new Vendas_servicos();
print_r($_POST);
if($_POST['id_usuario']!=""){
    $vendas_serv->id_usuario = $_POST['id_usuario'];
    $vendas_serv->id_serv = $_POST['id_serv'];
    $vendas_serv->id_vendas= $_POST['id_vendas'];
    $vendas_serv->quantidade_total_serv = $_POST['quantidade_total_serv'];
    $vendas_serv->valor = $_POST['valor'];


  $banco = new Vendas_servico();

  $resultado = $banco->inserir($vendas_serv);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_vendas_servico.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_vendas_servico.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}
