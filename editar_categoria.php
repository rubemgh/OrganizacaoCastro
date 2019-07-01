<?php
  include_once "estructura/topo.php";
 
?>
<main class="app-content">
  <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="indicators">Editar Categoria</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <form  action="editar_categoriaok.php" method="POST">
                  <br>id:  <input type="text" name="id" value= <?php echo $_GET['id']?>></br>
                  <br>nome:  <input type="text" name="nome" value=<?php echo $_GET['nome']?>></br>
                 

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