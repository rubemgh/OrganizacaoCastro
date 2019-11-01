<?php

class Vendas_servicos {

    protected $id_usuario;
    protected $id_serv;
    protected $id_vendas;
    protected $quantidade_total_serv;
    protected $valor;
  
  

    public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
