<?php
include_once 'class/Servico.class.php';
include_once 'class/Servicos.php';

$servico = new Servicos();

print_r($_POST);

   $servico = new Servico();
      //print_r($_POST);
if($_POST['nomeserv']!=""){
   $servico->id = $_POST["id"];
   $servico->id_categ = $_POST["id_categ"];
   $servico->nomeserv = $_POST["nomeserv"]; 
   $servico->dataentrada = $_POST["dataentrada"];
   $servico->preco = $_POST["preco"]; 
   $servico->descricaoserv = $_POST["descricaoserv"];
 
   $banco = new Servico();

   $resultado = $banco->editar($servico);
 }
 if($resultado){
         echo"editado com sucesso";
 }
  else{
     echo"Servico não pode ser editado";
   }
   ?>