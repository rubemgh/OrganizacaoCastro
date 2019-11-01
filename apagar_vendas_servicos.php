<?php
include_once 'class/Vendas_servico.class.php';
include_once 'class/Vendas_servicos.php';

if(!isset($_GET['id']) || $_GET['id']== '' ){
    header('Location:listar_vendas_servicos.php');
}
//Instancia o Objeto da clase:
$obj= new Vendas_servico();
//atribui o valor que te no get ao id de objeto:
$obj->id = $_GET['id'];
//chama o objeto apagar
$resultado = $obj->apagar();

if($resultado)
echo"Vendas_servicos não pode ser excluida";
else
echo"Excluido com sucesso";
?>
<button onclick='window.location.href= "listar_vendas_servico.php"'> Voltar para lista</button>

