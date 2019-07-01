<?php
  include_once "estructura/topo.php";
 
?>
<main class="app-content">
  <div class="tile mb-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="mb-3 line-head" id="indicators">Editar Usuário</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <form  action="editar_usuariook.php" method="POST">
                  <br>id:  <input type="text" name="id" value= <?php echo $_GET['id']?>></br>
                  <br>nome:  <input type="text" name="nome" value=<?php echo $_GET['nome']?>></br>
                  <br>veiculo:  <input type="text" name="veiculo"value=<?php echo $_GET['veiculo']?>></br>
                  <br>placa:  <input type="text" name="placa"value=<?php echo $_GET['placa']?>></br>
                  <br>renavam:  <input type="text" name="renavam"value=<?php echo $_GET['renavam']?>></br>
                  <br>email:  <input type="text" name="email"value=<?php echo $_GET['email']?>></br>
                  <br>nascimento:  <input type="text" name="nascimento"value=<?php echo $_GET['nascimento']?>></br>
                  <br>rg:    <input type="text" name="rg"value=<?php echo $_GET['rg']?>></br>
                  <br>cedula:  <input type="text" name="cedula"value=<?php echo $_GET['cedula']?>></br>
                  <br>tipo:  <input type="text" name="tipo"value=<?php echo $_GET['tipo']?>></br>
                  <br>Endereco:  <input type="text" name="endereco"value=<?php echo $_GET['endereco']?>></br>
                  <br>celular:  <input type="text" name="celular"value=<?php echo $_GET['celular']?>></br>
                  <br>telefone:  <input type="text" name="telefone"value=<?php echo $_GET['telefone']?>></br>
                  <br>senha:  <input type="password" name="senha"value=<?php echo $_GET['senha']?>>

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