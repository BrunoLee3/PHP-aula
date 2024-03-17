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
}

$carro = new Carro('ABC1234', 'Branco');
$moto = new moto('DEF1222', 'Preto');

print_r($carro);
echo '<br>';
print_r($moto);
echo '<hr>';

$carro->acelerar();
$moto->frear();