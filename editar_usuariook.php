<?php
include_once 'class/Usuario.class.php';
include_once 'class/Usuarios.php';

$usuario = new Usuarios();

print_r($_POST);

   $usuario = new Usuario();
      //print_r($_POST);
if($_POST['nome']!=""){
   $sha256 = hash('sha256',$_POST["senha"]);
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
   $usuario->senha= $sha256;
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