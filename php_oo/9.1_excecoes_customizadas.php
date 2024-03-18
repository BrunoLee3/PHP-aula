<?php
class MinhaExceptionCustomizada extends Exception{
    private $erro = '';

    public function __construct($erro){
        $this->erro = $erro;
    }

    public function exibirMensagemErro(){
        return $this->erro;
    }
}

try{

    throw new MinhaExceptionCustomizada('Esse é um erro de teste');

}catch(MinhaExceptionCustomizada $e){
    echo $e->exibirMensagemErro();
}