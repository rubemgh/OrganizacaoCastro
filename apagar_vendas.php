<?php
include_once 'class/Vendas.class.php';
include_once 'class/Vendass.php';

if(!isset($_GET['id']) || $_GET['id']== '' ){
    header('Location:listar_vendas.php');
}
//Instancia o Objeto da clase:
$obj= new Vendas();
//atribui o valor que te no get ao id de objeto:
$obj->id = $_GET['id'];
//chama o objeto apagar
$resultado = $obj->apagar();

if($resultado)
echo"Vendas não pode ser excluida";
else
echo"Excluido com sucesso";
?>
<button onclick='window.location.href= "listar_vendas.php"'> Voltar para lista</button>

