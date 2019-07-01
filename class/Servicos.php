<?php

class Servicos {

    protected $id_categ;
    protected $nomeserv;
    protected $dataentrada;
    protected $preco;
    protected $descricaoserv;
   


     public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
?>