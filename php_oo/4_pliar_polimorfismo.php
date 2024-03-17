<?php
class Veiculo{
    public $placa = null;
    public $cor = null;

    function acelerar(){
        echo 'acelerar';
    }

    function frear(){
        echo 'frear';
    }

    function trocarMarcha(){
        echo 'desengatar embreagem com o pé e trocar marcha com a mão';
    }
}

class Carro extends Veiculo{
    public $teto_solar = true;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar(){
        echo 'Abrir o teto solar';
    }

    function AlterarPosicaoVolante(){
        echo 'Alterar posição do volante';
    }
}

class Moto extends Veiculo{
    public $contraPesoGuidao = true;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar(){
        echo 'empinar';
    }

    function trocarMarcha(){
        echo 'desengatar embreagem com a mão e trocar marcha com o pé';
    }
}

$carro = new Carro('ABC1234', 'Branco');
$moto = new moto('DEF1222', 'Preto');

$carro->trocarMarcha();
echo '<br>';
$moto->trocarMarcha();