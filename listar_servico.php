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
            <form action="listar_servico.php">
   Buscar:<input type="text" name="buscar"/>
 <input type="submit"/>
</form>
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
       include_once 'class/Servico.class.php';
       include_once 'class/Servicos.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Servico();
         $servico= $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Servico();
         $servico = $conexao->Listar();
      }

      


      echo "<table style='width:50%' id='tables'>";
      echo"<tr>
       <th>id </th>
       <th>id_categ</th>
      <th>nomeserv</th>
      <th>dataentrada</th>
      <th>preco</th>
      <th>descricaoserv</th>
    
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($servico);*/
       foreach ($servico as $Servico) {


                echo"<tr>
                <td> ". $Servico ['id']." </td>
                <td> ". $Servico['id_categ']." </td>
                <td> ". $Servico['nomeserv']." </td>
                <td> ". $Servico['dataentrada']." </td>
                <td> ". $Servico['preco']." </td>
                <td> ". $Servico['descricaoserv']." </td>
              
                 <td><a href='editar_servico.php?id=".$Servico['id']."&id_categ=".$Servico['id_categ'].
                 "&nomeserv=".$Servico['nomeserv']."&dataentrada=".$Servico['dataentrada'].
                 "&preco=".$Servico['preco']."&descricaoserv=".$Servico['descricaoserv']."'>Editar</a></td>
                 <td><a href='apagar_servico.php?id=".$Servico['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>


<?php
    include_once "estructura/rodape.php";
?>
