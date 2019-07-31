<?php

class Vendass {

    protected $id_usuario;
    protected $quantidade;
    protected $valor_total;
    protected $data_processo;
    protected $status_venda;
  

    public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
