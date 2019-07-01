<?php
include_once 'class/Usuario.class.php';
include_once 'class/Usuarios.php';

$usuario = new Usuarios();

print_r($_POST);

   $objUsuario = new Usuario();
      //print_r($_POST);
if($_POST['nome']!=""){
   $usuario->id = $_POST["id"];
   $usuario->nome = $_POST["nome"]; 
   $usuario->veiculo= $_POST["veiculo"];   
   $usuario->placa= $_POST["placa"];   
   $usuario->renavam= $_POST["renavam"];
   $usuario->email= $_POST["email"];
   $usuario->nascimento = $_POST["nascimento"];
   $usuario->rg = $_POST["rg"];
   $usuario->cedula= $_POST["cedula"];
   $usuario->tipo = $_POST["tipo"];
   $usuario->endereco = $_POST["endereco"];
   $usuario->celular= $_POST["celular"];
   $usuario->telefone= $_POST["telefone"];
   $usuario->senha= $_POST["senha"];
   $banco = new Usuario();

   $resultado = $banco->editar($usuario);
 }
 if($resultado){
         echo"editado com sucesso";
 }
  else{
     echo"Usuario não pode ser editada";
   }
   ?>