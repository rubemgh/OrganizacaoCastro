<?php
 session_start();
 include "class/Usuario.class.php";
 
 
 $usuario = new Usuario();
 $sha256 = hash('sha256',$_POST["senha"]);
  $usuario->email = $_POST["email"];
   /*$usuario->senha = $_POST["senha"];*/
   $usuario->senha = $sha256; /* Se utiliza quando estão inseridos no banco com criptográfia*/
 /*var_dump($sha256);*/
   
   
   $login = $usuario->login($usuario);
   
    echo "<br>";
    /*var_dump($login);*/
   if($login){
   $_SESSION['loginADM'] = true;
	   header("Location:listar_categoria.php");
   }
   else
    /* echo "Não logado";*/
    header("Location:login.php?ERRO=senha");
     
   
   ?>