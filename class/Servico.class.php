<?php

include_once 'Servicos.php';
include_once 'Conexao.php';

class Servico extends ClassConexao {
     public $table = 'servico';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir( $servico) {
        $stmt = $this->conexao->prepare("INSERT INTO servico (id_categ,nomeserv,dataentrada,preco,descricaoserv)
        VALUES (:id_categ, :nomeserv, :dataentrada, :preco, :descricaoserv)");
        
        var_dump($stmt);
      
        
        $stmt->bindParam(':id_categ', $servico->id_categ);
        $stmt->bindParam(':nomeserv', $servico->nomeserv);
        $stmt->bindParam(':dataentrada', $servico->dataentrada);
        $stmt->bindParam(':preco', $servico->preco);
        $stmt->bindParam(':descricaoserv', $servico->descricaoserv);

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from servico");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($nomeserv) {
   
        $stmt = $this->conexao->prepare("Select * from servico where nomeserv LIKE '%$nomeserv%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM servico WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($servico){
          
            $stmt = $this->conexao->prepare('UPDATE servico SET id_categ = :id_categ, nomeserv = :nomeserv, dataentrada = :dataentrada, preco = :preco, descricaoserv = :descricaoserv
            where id= :id');
                       $stmt->bindParam(':id', $servico->id);
                       $stmt->bindParam(':id_categ', $servico->id_categ);
                       $stmt->bindParam(':nomeserv', $servico->nomeserv);
                       $stmt->bindParam(':dataentrada', $servico->dataentrada);
                       $stmt->bindParam(':preco', $servico->preco);
                       $stmt->bindParam(':descricaoserv', $servico->descricaoserv);
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
?>