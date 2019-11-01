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
  background-color:#a8a6b3;
  margin-top: 15px; 
}
tr:nth-child(even){background-color: #ffffff}
      tr, th {
          text-align: left;
         padding:3px;
         }
</style>


        <?php
       include_once 'class/Usuario.class.php';
       include_once 'class/Usuarios.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Usuario();
         $usuario = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Usuario();
         $usuario = $conexao->Listar();
      }

      


      echo "<table style='width:50%' id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>Nome </th>
      <th>Veiculo </th>
      <th>placa </th>
      <th>renavam</th>
      <th>email</th> 
      <th>nascimento </th>
      <th>rg</th>
      <th>cedula</th> 
      <th>tipo</th>
      <th>endereco</th>
      <th>celular </th>
      <th> telefone </th>
      
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($usuario as $Usuario) {


                echo"<tr>
                <td> ". $Usuario ['id']." </td>
                <td> ". $Usuario['nome']." </td>
                <td> ". $Usuario['veiculo']." </td>
                <td> ". $Usuario['placa']." </td>
                <td> ". $Usuario['renavam']." </td>
                <td> ". $Usuario['email']." </td>
                <td> ". $Usuario['nascimento']." </td>
                <td> ". $Usuario['rg']." </td>
                <td> ". $Usuario['cedula']." </td> 
                <td> ". $Usuario['tipo']." </td>
                <td> ". $Usuario['endereco']." </td>
                <td> ". $Usuario['celular']." </td>
                <td> ". $Usuario['telefone']." </td>
               
                 <td><a href='editar_usuario.php?id=".$Usuario['id']."&nome=".$Usuario['nome']."&veiculo=".$Usuario['veiculo'].
                 "&placa=".$Usuario['placa']."&renavam=".$Usuario['renavam']."&email=".$Usuario['email']."&nascimento=".$Usuario['nascimento'].
                 "&rg=".$Usuario['rg']."&cedula=".$Usuario['cedula']."&tipo=".$Usuario['tipo']."&endereco=".$Usuario['endereco']."&celular=".$Usuario['celular'].
                 "&telefone=".$Usuario['telefone']."&tipo=".$Usuario['tipo']."&senha=".$Usuario['senha']."'>Editar</a></td>
                 <td><a href='apagar_usuario.php?id=".$Usuario['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>


<?php
    include_once "estructura/rodape.php";
?>
