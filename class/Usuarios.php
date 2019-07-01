<?php

class Usuarios {

    protected $nome;
    protected $veiculo;
    protected $placa;
    protected $renavam;
    protected $email;
    protected $nascimento;
    protected $rg;
    protected $cedula;  
    protected $tipo;
    protected $endereco;
    protected $celular;
    protected $telefone;
    protected $senha;


     public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
