<?php
  include_once "estructura/topo.php";
 
?>
<main class="app-content">
  <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="indicators">Editar Servico</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <form  action="editar_servicook.php" method="POST">
                  <br>id:  <input type="text" name="id" value= <?php echo $_GET['id']?>></br>
                  <br>id_categ:  <input type="text" name="id_categ" value= <?php echo $_GET['id_categ']?>></br>
                  <br>nomeserv:  <input type="text" name="nomeserv" value= <?php echo $_GET['nomeserv']?>></br>
                  <br>dataentrada:  <input type="text" name="dataentrada" value=<?php echo $_GET['dataentrada']?>></br>
                  <br>preco:  <input type="text" name="preco" value=<?php echo $_GET['preco']?>></br>
                  <br>descricaoserv:  <input type="text" name="descricaoserv" value=<?php echo $_GET['descricaoserv']?>></br>
                 

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