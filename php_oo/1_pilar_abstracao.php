<?php

//modelo
class Funcionario{
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters setters (overloading)
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }


    //getter e setters
    // function setNome($nome) {
    //     $this->nome = $nome;
    // }

    // function setNumFilhos($numFilhos) {
    //     $this->numFilhos = $numFilhos;
    // }

    // function setTelefone($telefone){
    //     $this->telefone = $telefone;
    // }

    // function getNome() {
    //     return $this->nome;
    // }

    // function getNumFilhos() {
    //     return $this->numFilhos;
    // }

    // function getTelefone(){
    //     return $this->telefone;
    // }

    //metodos
    function resumirCadFun(){
        return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . 'filho(s)' . 
        ', telefone: ' . $this->__get('telefone') . '<br> Cargo: ' . $this->__get('cargo') . ', Salário: ' . $this->__get('salario');
    }  

    function modificarNumFilhos($numFilhos){
        //afetar um atributo do obj
        $this->numFilhos = $numFilhos;
    }   
}

//instância do objeto
$y = new Funcionario();
$y->__set('nome', 'José');
$y->__set('numFilhos', 2);
$y->__set('telefone', '9999-9999');
$y->__set('cargo', 'gerente');
$y->__set('salario', 5000);
echo $y->resumirCadFun();


echo '<hr>';

$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 1);
$x->__set('telefone', '8888-8888');
$x->__set('cargo', 'secretária');
$x->__set('salario', 1400);
echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ' . ', telefone: ' . $x->__get('telefone');
echo '<br> Cargo: ' . $x->__get('cargo') . ', Salário: ' . $x->__get('salario');