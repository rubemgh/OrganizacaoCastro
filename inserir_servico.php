<?php
  include_once "estructura/topo.php";

?>
<main class="app-content">
  <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="indicators">Adicionar Servico</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <form  action="inserir_servicook.php" method="POST" >
                 
            <br>id_categoria:  <input type="text" name="id_categ"/></br>
            <br>Nome Servico:  <input type="text" name="nomeserv"/></br>
            <br>Data Entrada: <input type="text" name="dataentrada"/></br>
            <br>Preco:  <input type="text" name="preco"/></br>
            <br>Descricao Servico:  <input type="text" name="descricaoserv"/></br>
            
            
                
                  
                  <br/>
                  <input type="submit" name="botao"/>
                </form>              
              </div>
            </div>
          </div>
        </div>
      </div>

<?php
    include_once "estructura/rodape.php";
?>

