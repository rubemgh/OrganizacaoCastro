<?php

include_once 'Vendass.php';
include_once 'Conexao.php';

class Vendas extends ClassConexao {
     public $table = 'vendas';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir($vendas) {
        $stmt = $this->conexao->prepare("INSERT INTO vendas (id_usuario,quantidade,valor_total,data_processo,status_venda)
        VALUES (:id_usuario, :quantidade, :valor_total, :data_processo, :status_venda)");
        
        var_dump($stmt);
      
        $stmt->bindParam(':id_usuario', $vendas->id_usuario);
        $stmt->bindParam(':quantidade', $vendas->quantidade);
        $stmt->bindParam(':valor_total', $vendas->valor_total);
        $stmt->bindParam(':data_processo', $vendas->data_processo);
        $stmt->bindParam(':status_venda', $vendas->status_venda);

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from vendas");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarid($id_usuario) {
   
        $stmt = $this->conexao->prepare("Select * from vendas where id_usuario LIKE '%$id_usuario%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM vendas WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($vendas){
          
            $stmt = $this->conexao->prepare('UPDATE vendas SET id_usuario = :id_usuario, quantidade = :quantidade, valor_total = :valor_total,
            data_processo = :data_processo, status_venda = :status_venda
            where id= :id');
                      $stmt->bindValue(':id', $vendas->id);
                      $stmt->bindValue(':id_usuario', $vendas->id_usuario);
                      $stmt->bindValue(':quantidade', $vendas->quantidade);
                      $stmt->bindValue(':valor_total', $vendas->valor_total);
                      $stmt->bindValue(':data_processo', $vendas->data_processo);
                      $stmt->bindValue(':status_venda', $vendas->status_venda);
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
