<?php

include_once 'Vendas_servicos.php';
include_once 'Conexao.php';

class Vendas_servico extends ClassConexao {
     public $table = 'vendas_serv';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir($vendas_serv) {
        $stmt = $this->conexao->prepare("INSERT INTO vendas_serv (id_usuario,id_serv,id_vendas,quantidade_total_serv,valor)
        VALUES (:id_usuario, :id_serv,:id_vendas,:quantidade_total_serv,:valor)");
        
        var_dump($stmt);
      
        $stmt->bindParam(':id_usuario', $vendas_serv->id_usuario);
        $stmt->bindParam(':id_serv', $vendas_serv->id_serv);
        $stmt->bindParam(':id_vendas', $vendas_serv->id_vendas);
        $stmt->bindParam(':quantidade_total_serv', $vendas_serv->quantidade_total_serv);
        $stmt->bindParam(':valor', $vendas_serv->valor);
      

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from vendas_serv");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarid($id_usuario) {
   
        $stmt = $this->conexao->prepare("Select * from vendas_serv where id_usuario LIKE '%$id_usuario%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM vendas_serv WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($vendas_serv){
          
            $stmt = $this->conexao->prepare('UPDATE vendas_serv SET id_usuario = :id_usuario, id_serv = :id_serv, id_vendas = :id_vendas,
            quantidade_total_serv = :quantidade_total_serv, valor = :valor
           where id= :id');
                      $stmt->bindValue(':id', $vendas_serv->id);
                      $stmt->bindValue(':id_usuario', $vendas_serv->id_usuario);
                      $stmt->bindValue(':id_serv', $vendas_serv->id_serv);
                      $stmt->bindValue(':id_vendas', $vendas_serv->id_vendas);
                      $stmt->bindValue(':quantidade_total_serv', $vendas_serv->quantidade_total_serv);
                      $stmt->bindValue(':valor', $vendas_serv->valor);

                  
              
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
