<?php
include_once 'class/Categoria.class.php';
include_once 'class/Categorias.php';

$categoria = new Categorias();

print_r($_POST);

   $categoria = new Categoria();
      //print_r($_POST);
if($_POST['nome']!=""){
   $categoria->id = $_POST["id"];
   $categoria->nome = $_POST["nome"]; 
 
   $banco = new Categoria();

   $resultado = $banco->editar($categoria);
 }
 if($resultado){
         echo"editado com sucesso";
 }
  else{
     echo"Categoria não pode ser editada";
   }
   ?>