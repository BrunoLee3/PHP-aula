<?php
interface EletrodomesticoInterface{
    public function ligar();
    public function desligar();
}

//-------------------------------------

class Tv implements EletrodomesticoInterface{
    public function abrirPorta(){
        echo 'abrir porta';
    }

    public function ligar(){
        echo 'Ligar';
    }

    public function desligar(){
        echo 'desligar';
    }
}

class Geladeira implements EletrodomesticoInterface{
    public function trocarCanal(){
        echo 'trocar canal';
    }

    public function ligar(){
        echo 'Ligar';
    }

    public function desligar(){
        echo 'desligar';
    }
}

$x = new Geladeira();
$y = new Tv();

//----------------------------------

interface MamiferoInterface{
    public function respirar();
}

interface TerrestreInterface{
    public function andar();
}

interface AquaticoInterface{
    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface{
    public function andar(){
        echo 'andar';
    }

    public function respirar(){
        echo 'respirar';
    }

    public function conversar(){
        echo 'conversar';
    }
}

//------------------

interface AnimalInterface{
    public function comer();
}

interface AveInterface extends AnimalInterface{
    public function voar();
}

class Papagaio implements AveInterface{
    public function voar(){
        echo 'voar';
    }

    public function comer(){
        echo 'comer';
    }
}