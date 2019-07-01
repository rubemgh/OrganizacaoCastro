<?php
include_once 'class/Usuario.class.php';
include_once 'class/Usuarios.php';

$usuario = new Usuarios();
print_r($_POST);
if($_POST['nome']!=""){
    $usuario->nome = $_POST['nome'];
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

  $resultado = $banco->inserir( $usuario);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_usuario.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_usuario.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}

	
  
