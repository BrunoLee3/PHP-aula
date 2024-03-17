<?php

class Pai{
    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    public $humor = 'Feliz';

    // public function __get($atributo){
    //     return $this->$atributo;
    // }

    // public function __set($atributo, $value){
    //     if(strlen($value) >= 3){
    //         $this->$atributo = $value;
    //     }
    // }

    private function executarMania(){
        echo 'Assobiar';
    }

    protected function responder(){
        echo 'Oi';
    }

    public function executarAcao(){
        $x = rand(1, 10);

        if($x>=1 && $x<=8){
            $this->executarMania();
        }
        else{
            $this->responder();
        }
    }
}

class Filho extends Pai{
    public function getAtributo($attr){
        return $this->$attr;
    }

    public function setAtributo($attr, $value){
        $this->$attr = $value;
    }
}

// $pai = new Pai();
// // echo $pai->nome;
// // $pai->sobrenome = 'Oliveira';
// // echo $pai->sobrenome;

// $pai->executarAcao();

$filho = new Filho();
print_r($filho);
// echo $filho->getAtributo('nome');
$filho->setAtributo('humor', 'triste');
echo $filho->getAtributo('humor');