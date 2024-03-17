<?php
namespace A;

class Cliente implements \B\CadastroInterface{
    public $nome = 'Jorge';
    public function __construct(){
        print_r(get_class_methods($this));
    }
    public function __get($attr){
        return $this->$attr;
    }

    public function salvar(){
        echo 'salvar';
    }

    public function remover(){
        echo 'remover';
    }
}

interface CadastroInterface{
    public function salvar();
}

namespace B;

class Cliente implements CadastroInterface{
    public $nome = 'Jammilton';

    public function __construct(){
        print_r(get_class_methods($this));
    }

    public function __get($attr){
        return $this->$attr;
    }

    public function remover(){
        echo 'salvar';
    }
}

interface CadastroInterface{
    public function remover();
}

$c = new \B\Cliente();
echo '<br>';
print_r($c);
echo '<br>';
echo $c->__get('nome');