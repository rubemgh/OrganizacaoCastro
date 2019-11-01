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
            <form action="listar_categoria.php">
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
       include_once 'class/Categoria.class.php';
       include_once 'class/Categorias.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Categoria();
         $categoria = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Categoria();
         $categoria = $conexao->Listar();
      }

      


      echo "<table style='width:50%' id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>Nome </th>
    
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($categoria as $Categoria) {


                echo"<tr>
                <td> ". $Categoria ['id']." </td>
                <td> ". $Categoria['nome']." </td>
              
                 <td><a href='editar_categoria.php?id=".$Categoria['id']."&nome=".$Categoria['nome']."'>Editar</a></td>
                 <td><a href='apagar_categoria.php?id=".$Categoria['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>


<?php
    include_once "estructura/rodape.php";
?>
