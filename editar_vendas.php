<?php
  include_once "estructura/topo.php";
 
?>
<main class="app-content">
  <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="indicators">Editar Vendas</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <form  action="editar_vendasok.php" method="POST">
                <br>id:  <input type="text" name="id" value= <?php echo $_GET['id']?>></br>
                  <br>id_usuario:  <input type="text" name="id_usuario" value= <?php echo $_GET['id_usuario']?>></br>
                  <br>quantidade:  <input type="text" name="quantidade" value=<?php echo $_GET['quantidade']?>></br>
                  <br>valor_total:  <input type="text" name="valor_total"value=<?php echo $_GET['valor_total']?>></br>
                  <br>data_processo:  <input type="text" name="data_processo"value=<?php echo $_GET['data_processo']?>></br>
                  <br>status_venda:  <input type="text" name="status_venda"value=<?php echo $_GET['status_venda']?>></br>
              
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