<?php

include_once 'Usuarios.php';
include_once 'Conexao.php';

class Usuario extends ClassConexao {
     public $table = 'usuario';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir( $usuario) {
        $stmt = $this->conexao->prepare("INSERT INTO usuario (nome,veiculo,placa,renavam,email,nascimento,rg,cedula,tipo,endereco,celular,telefone,senha)
        VALUES (:nome, :veiculo, :placa, :renavam, :email, :nascimento, :rg, :cedula, :tipo, :endereco,:celular,:telefone,:senha)");
        
        var_dump($stmt);
      
		$stmt->bindParam(':nome', $usuario->nome);
		$stmt->bindParam(':veiculo', $usuario->veiculo);
		$stmt->bindParam(':placa', $usuario->placa);
		$stmt->bindParam(':renavam', $usuario->renavam);
		$stmt->bindParam(':email', $usuario->email);
		$stmt->bindParam(':nascimento', $usuario->nascimento);
		$stmt->bindParam(':rg', $usuario->rg);
		$stmt->bindParam(':cedula', $usuario->cedula);  
		$stmt->bindParam(':tipo', $usuario->tipo);
		$stmt->bindParam(':endereco', $usuario->endereco);
        $stmt->bindParam(':celular', $usuario->celular);
        $stmt->bindParam(':telefone', $usuario->telefone);
        $stmt->bindParam(':senha', $usuario->senha);

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from usuario");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($nome) {
   
        $stmt = $this->conexao->prepare("Select * from usuario where nome LIKE '%$nome%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM usuario WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($usuario){
          
            $stmt = $this->conexao->prepare('UPDATE usuario SET nome = :nome, veiculo = :veiculo, placa = :placa, 
            renavam = :renavam, email = :email, nascimento = :nascimento, rg = :rg, cedula = :cedula, tipo =:tipo,
            endereco = :endereco, celular = :celular,telefone = :telefone, senha = :senha
            where id= :id');
                      $stmt->bindValue(':id', $usuario->id);
              		  $stmt->bindValue(':nome', $usuario->nome);
                      $stmt->bindValue(':veiculo', $usuario->veiculo);
                      $stmt->bindValue(':placa', $usuario->placa);
                      $stmt->bindValue(':renavam', $usuario->renavam);
                      $stmt->bindValue(':email', $usuario->email);
                      $stmt->bindValue(':nascimento', $usuario->nascimento);
                      $stmt->bindValue(':rg', $usuario->rg);
                      $stmt->bindValue(':cedula', $usuario->cedula);  
                      $stmt->bindValue(':tipo', $usuario->tipo);
                      $stmt->bindValue(':endereco', $usuario->endereco);
                      $stmt->bindValue(':celular', $usuario->celular);
                      $stmt->bindValue(':telefone', $usuario->telefone);
                      $stmt->bindValue(':senha', $usuario->senha);
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
        public function login($usuario){
            $stmt = $this->conexao->prepare("Select * from  usuario 
            WHERE email = :email and senha = :senha");
         
            $stmt->bindParam(':email', $usuario->email);
            $stmt->bindParam(':senha', $usuario->senha);
            $stmt->execute();

            $resultado = $stmt->fetchAll();
        
            return $resultado;
        }
    }
