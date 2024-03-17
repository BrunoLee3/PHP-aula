<?php

class Exemplo{
    public static $atributo1 = 'atributo estatico';
    public $atributo2 = 'atributo normal';

    public static function metodo1(){
        echo 'metodo estatico';
    }

    public function metodo2(){
        echo 'metodo normal';
    }
}

echo Exemplo::$atributo1;
echo '<br>';
Exemplo::metodo1();
echo '<br>';