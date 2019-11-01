<?php
  include_once "estructura/topo.php";

?>
<main class="app-content">
  <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="indicators">Adicionar Usuário</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <form  action="inserir_vendas_servicook.php" method="POST" >
                  <br>id_usuario:  <input type="text" name="id_usuario"/></br>
                  <br>id_serv:  <input type="text" name="id_serv"/></br>
                  <br>id_vendas:  <input type="text" name="id_vendas"/></br>
                  <br>quantidade_total_serv:  <input type="text" name="quantidade_total_serv"/></br>
                  <br>valor:  <input type="text" name="valor"/></br>
                
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

