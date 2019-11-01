<?php
include_once 'class/Vendas.class.php';
include_once 'class/Vendass.php';

$vendas = new Vendass();

print_r($_POST);

  $vendas = new Vendas();
      //print_r($_POST);
if($_POST['id']!=""){
   $vendas->id = $_POST["id"];
   $vendas->id_usuario = $_POST["id_usuario"];
   $vendas->quantidade = $_POST["quantidade"];  
   $vendas->valor_total = $_POST["valor_total"];
   $vendas->data_processo = $_POST["data_processo"];
   $vendas->status_venda = $_POST["status_venda"];
   
   $banco = new Vendas();

   $resultado = $banco->editar($vendas);
 }
 if($resultado){
         echo"editado com sucesso";
 }
  else{
     echo"Usuario não pode ser editada";
   }
   ?>