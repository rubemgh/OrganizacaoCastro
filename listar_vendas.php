<?php
  include_once "estructura/topo.php";

?>
<main class="app-content">
  <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="indicators">Listar</h2>
            </div>
            <form action="listar_usuario.php">
   Buscar:<input type="text" name="buscar"/>
 <input type="submit"/>
</form>
<br>
<style>
table {
  width: 100%;    
  background-color:#FAFFCD;
  
}
</style>


        <?php
       include_once 'class/Vendas.class.php';
       include_once 'class/Vendass.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Vendas();
         $vendas = $conexao->Listarid($_GET['buscar']);
       }else{
         $conexao = new Vendas();
         $vendas = $conexao->Listar();
      }

      


      echo "<table style='width:50%' border>";
      echo"<tr>
       <th>id </th>
      <th>id_usuario </th>
      <th>quantidade</th>
      <th>valor_total</th>
      <th>data_processo</th>
      <th>status_venda</th> 

      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($vendas as $Vendas) {


                echo"<tr>
                <td> ". $Vendas ['id']." </td>
                <td> ". $Vendas['id_usuario']." </td>
                <td> ". $Vendas['quantidade']." </td>
                <td> ". $Vendas['valor_total']." </td>
                <td> ". $Vendas['data_processo']." </td>
                <td> ". $Vendas['status_venda']." </td>
             
                 <td><a href='editar_vendas.php?id=".$Vendas['id']."&id_usuario=".$Vendas['id_usuario']."&quantidade=".$Vendas['quantidade'].
                 "&valor_total=".$Vendas['valor_total']."&data_processo=".$Vendas['data_processo']."&status_venda=".$Vendas['status_venda']."'>Editar</a></td>
                 <td><a href='apagar_vendas.php?id=".$Vendas['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>


<?php
    include_once "estructura/rodape.php";
?>
