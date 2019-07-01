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
                <form  action="inserir_usuariook.php" method="POST" >
                  <br>nome:  <input type="text" name="nome"/></br>
                  <br>veiculo:  <input type="text" name="veiculo"/></br>
                  <br>placa:  <input type="text" name="placa"/></br>
                  <br>renavam:  <input type="text" name="renavam"/></br>
                  <br>email:  <input type="text" name="email"/></br>
                  <br>nascimento:  <input type="text" name="nascimento"/></br>
                  <br>rg:    <input type="text" name="rg"/></br>
                  <br>cedula:  <input type="text" name="cedula"/></br>
                  <br>tipo:  <input type="text" name="tipo"/></br>
                  <br>endereco:  <input type="text" name="endereco"/></br>
                  <br>celular:  <input type="text" name="celular"/></br>
                  <br>telefone:  <input type="text" name="telefone"/></br>
                  <br>senha:  <input type="password" name="senha"/>
                  
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

