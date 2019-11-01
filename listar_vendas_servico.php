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
            <form action="listar_vendas_servico.php">
   Buscar:<input type="text" name="buscar"/>
 <input type="submit"/>
</form>
<br>
<style>
table {
  
  width: 100%;    
  background-color:#a8a6b3;
  margin-top: 15px; 
}
tr:nth-child(even){background-color: #ffffff}
      tr, th {
          text-align: left;
         padding:5px;
         }
</style>


        <?php
       include_once 'class/Vendas_servico.class.php';
       include_once 'class/Vendas_servicos.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Vendas_servico();
         $vendas_serv = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Vendas_servico();
         $vendas_serv = $conexao->Listar();
      }

      


      echo "<table style='width:50%' id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>id_usuario </th>
      <th>id_serv</th>
      <th>id_vendas </th>
      <th>quantidade_total_serv</th>
      <th>valor</th> 
     
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($vendas_serv as $Vendas_serv) {


                echo"<tr>
                <td> ". $Vendas_serv ['id']." </td>
                <td> ". $Vendas_serv['id_usuario']." </td>
                <td> ". $Vendas_serv['id_serv']." </td>
                <td> ". $Vendas_serv['id_vendas']." </td>
                <td> ". $Vendas_serv['quantidade_total_serv']." </td>
                <td> ". $Vendas_serv['valor']." </td>
            
                 <td><a href='editar_vendas_servicos.php?id=".$Vendas_serv['id']."&id_usuario=".$Vendas_serv['id_usuario']."&id_serv=".$Vendas_serv['id_serv'].
                 "&id_vendas=".$Vendas_serv['id_vendas']."&quantidade_total_serv=".$Vendas_serv['quantidade_total_serv']."&valor=".$Vendas_serv['valor']."'>Editar</a></td>
                 <td><a href='apagar_vendas_servicos.php?id=".$Vendas_serv['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>


<?php
    include_once "estructura/rodape.php";
?>
